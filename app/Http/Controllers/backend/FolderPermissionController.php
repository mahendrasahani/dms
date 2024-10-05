<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\DepartmentType;
use App\Models\backend\FileUploadPermission;
use App\Models\backend\Folder;
use App\Models\backend\FolderPermissionList;
use App\Models\backend\FolderPermission;
use App\Models\backend\MainFolder;
use App\Models\backend\MainFolderPermissionList;
use App\Models\backend\SubFolder;
use App\Models\backend\UserFolderPermission;
use App\Models\backend\UserMainFolderPermission;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Crypt;
 
// Used table for folder permissions
// MainFolderPermissionList
// UserMainFolderPermission
// UserFolderPermissionList
// UserFolderPermission


class FolderPermissionController extends Controller{
    public function assignFolderPermission($id){
        try{
        $decrypt_id= Crypt::decrypt($id);
        $user = User::where('id', $decrypt_id);
        if(Auth::user()->role_type_id != 1){
            $user = $user->where('created_by', Auth::user()->id);
        }
        $user = $user->first();   
        if($user){
            $sub_folder_permission_list = FolderPermissionList::all();
            $main_folder_permission_list = MainFolderPermissionList::all();
            $user_main_folder_assigned_permission_list = UserMainFolderPermission::where('user_id', $decrypt_id)->pluck('main_folder_permission_lists_id')->toArray();
            $user_folder_assigned_permission_list = UserFolderPermission::where('user_id', $decrypt_id)->pluck('folder_permission_list_id')->toArray();
                return view('backend.folder_permission.assign_folder_permission', compact(
                'user', 'sub_folder_permission_list', 'main_folder_permission_list', 
                'user_main_folder_assigned_permission_list',
                'user_folder_assigned_permission_list'));
            }else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort(404, 'Invalid User ID');
        } 
    }

    public function syncFolderPermission(Request $request){
        $user_id = Crypt::decrypt($request->user_id);
        // if($user_id != 1){
        $main_folder_permission_ids = $request->main_folder_permission_ids;
        $sub_permission_ids = $request->sub_permission_ids;
        UserFolderPermission::where('user_id', $user_id)->delete();
        UserMainFolderPermission::where('user_id', $user_id)->delete();
        if($main_folder_permission_ids != null){
        foreach($main_folder_permission_ids as $permission){
            UserMainFolderPermission::create([
                'main_folder_permission_lists_id' => $permission,
                'user_id' => $user_id,
                'status' => 1
            ]);
        }
        if($sub_permission_ids != null){
            foreach($sub_permission_ids as $permission){
                UserFolderPermission::create([
                    'folder_permission_list_id' => $permission,
                    'user_id' => $user_id,
                    'status' => 1
                ]);
            }
        }
        }
        return redirect()->back()->with('updated', 'Permission has been updated !'); 
        // }else{
        //     return response()->view('errors.405', [], 405);  
        // }
    }

    public function AssignFolderPermissionDirect($m_folder, $s_folder){ 
        try{
        $decrypt_m_folder = Crypt::decrypt($m_folder);
        $decrypt_s_folder = Crypt::decrypt($s_folder); 
        $main_folder = MainFolder::where('id', $decrypt_m_folder)->first();
        $sub_folder = SubFolder::where('id', $decrypt_s_folder)->first(); 
        
        $users = User::select('*');
        if(Auth::user()->role_type_id != 1){
            $users = $users->where('created_by', Auth::user()->id);
        }
        $users = $users->get();  

        $assigned_users = UserFolderPermission::where('folder_permission_list_id', $decrypt_s_folder)
        ->where('user_id', '!=', 1)->pluck('user_id')->toArray();
        
        $assigned_users_upload_access = FileUploadPermission::where('main_folder_id', $decrypt_m_folder)
        ->where('sub_folder_id', $decrypt_s_folder)
        ->where('access_given_by', Auth::user()->id)
        ->pluck('user_id')->toArray(); 

        return view('backend.folder_permission.assign_direct_permisssion', 
        compact('main_folder', 'sub_folder', 'users', 'assigned_users', 
        'assigned_users_upload_access'));
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function SyncFolderPermissionDirect(Request $request){
        $m_folder_id = $request->m_folder_id;
        $s_folder_id = $request->s_folder_id;
        $users = $request->users; 

        $main_folder_existence = UserMainFolderPermission::where('main_folder_permission_lists_id', $m_folder_id)
        ->where('access_given_by', Auth::user()->id)->delete();
        $sub_folder_existence = UserFolderPermission::where('folder_permission_list_id', $s_folder_id)
        ->where('access_given_by', Auth::user()->id)->delete();
        
        foreach($users as $user){
            // $main_folder_existence = UserMainFolderPermission::where('main_folder_permission_lists_id', $m_folder_id)->where('user_id', $user)->exists();
            // $sub_folder_existence = UserFolderPermission::where('folder_permission_list_id', $s_folder_id)->where('user_id', $user)->exists();
            // if(!$main_folder_existence){
                UserMainFolderPermission::create([
                    'main_folder_permission_lists_id' => $m_folder_id,
                    'user_id' => $user,
                    "access_given_by" => Auth::user()->id
                ]);
            // }

            // if(!$sub_folder_existence){
                UserFolderPermission::create([
                    'folder_permission_list_id' => $s_folder_id,
                    'user_id' => $user,
                    "access_given_by" => Auth::user()->id
                ]);
            // }
        }
        return redirect()->back();
    }

    //this function is for insert all permission record in folder permission table remove after use "createFolderPermissionTest()"
    public function createFolderPermissionTest(){
        $main_folders = MainFolder::get();
        // foreach($main_folders as $main){
        //     MainFolderPermissionList::create([
        //                     "name" => $main->name,
        //                     "main_folder_id" => $main->id,
        //                     "group_name" => $main->name,
        //                     "group_id" => $main->id,  
        //                 ]);
        // }

        // foreach($main_folders as $main){
        //     $sub_folders = SubFolder::where('main_folder_id', $main->id)->get();
        //     foreach($sub_folders as $sub){
        //         $department = DepartmentType::where('name', $main->name)->first()->id;
        //         FolderPermissionList::create([
        //             "name" => $sub->name,
        //             "main_folder_id" => $main->id,
        //             "sub_folder_id" => $sub->id,
        //             "department_type_id" => $department,
        //             "group_name" => $main->name,
        //             "group_id" => $main->id,
        //             "status" => 1
        //         ]);
                
        //     }
        // }
        $folder_per = FolderPermissionList::get();
        return $folder_per;  
    }


        public function SyncFileUploadAccess(Request $request){
            $m_id = $request->m_folder_id;
            $s_id = $request->s_folder_id;
            $users = $request->users; 
            FileUploadPermission::where('main_folder_id', $m_id)
            ->where('sub_folder_id', $s_id)->where('access_given_by', Auth::user()->id)->delete();
            if($users != null){
            foreach($users as $user){
                FileUploadPermission::create([
                    'main_folder_id' => $m_id,
                    'sub_folder_id' => $s_id,
                    'user_id' => $user,
                    'access_given_by' => Auth::user()->id
                ]);
            } 
        }
        return redirect()->back(); 
    }

}
