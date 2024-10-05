<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\FolderPermissionList;
use App\Models\backend\UserFolderPermission;
use Crypt;
use Illuminate\Http\Request;
use App\Models\backend\{DepartmentType, MainFolder, UserPermission, SubFolder, Document};
use Auth;

class FoldersController extends Controller
{
    public function index($id){
        try{
        $decrypt_id = Crypt::decrypt($id);
        $subFolderIds = [];
        $ids = [];
        $main_folder = MainFolder::where('id', $decrypt_id)->first();
        $sub_folder_list = SubFolder::where('main_folder_id', $decrypt_id)->pluck('id')->toArray(); 
        
        $sub_folders = UserFolderPermission::with('getSubFolders')
        ->whereIn('folder_permission_list_id', $sub_folder_list);       
        $sub_folders = $sub_folders->where('user_id', Auth::user()->id); 
        $sub_folders = $sub_folders->get();
        
        if(Auth::user()->role_type_id == 2){
            if($id == Auth::user()->department_type_id){
                $sub_folders = SubFolder::where('main_folder_id', $decrypt_id)->get(); 
            }
        } 
        return view('backend.folders.index', compact(
            'sub_folders',
            'main_folder',
        ));
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function store(Request $request, $id){
        $decrypt_id = Crypt::decrypt($id);
        $main_folder = MainFolder::where('id', $decrypt_id)->first();
        $folder = SubFolder::create([
            'main_folder_id' => $decrypt_id,
            'name' => $request->folder_name,
        ]);  
        $folder_permission_list = FolderPermissionList::create([
            "name" => $request->folder_name,
            "main_folder_id" => $decrypt_id,
            "sub_folder_id" => $folder->id,
            "group_name" => $main_folder->name,
            "group_id" => $decrypt_id 
        ]); 
        UserFolderPermission::create([
            "folder_permission_list_id" => $folder->id,
            "user_id" => 1,
            "status" => 1
        ]); 
        return redirect('/admin/folders/' . $id)->with('success', 'Sub Folder Store Successfully');
    }

    public function viewDocList($main_folde_id, $sub_folder_id){
        try{
        $decrypt_main_folder_id = Crypt::decrypt($main_folde_id);
        $decrypt_sub_folder_id = Crypt::decrypt($sub_folder_id);
        $check_permission = UserFolderPermission::where('folder_permission_list_id', $decrypt_sub_folder_id)->exists();
        if($check_permission){
            $main_folder = MainFolder::where('id', $decrypt_main_folder_id)->first()->name;
            $sub_folder = SubFolder::where('id', $decrypt_sub_folder_id)->first()->name;  
            $documents = Document::where('main_folder_id', $decrypt_main_folder_id)->where('sub_folder_id', $decrypt_sub_folder_id); 
            if(Auth::user()->role_type_id != 1){
                $documents = $documents->whereJsonContains('assigned_users', Auth::user()->id)->orWhere('owner_id', Auth::user()->id);
            }
            $documents = $documents->get();  
            return view('backend.folders.doc_list', compact('documents', 
            'main_folder', 'sub_folder',
        'main_folde_id', 'sub_folder_id'));
            }else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function DeleteSubFolder($m_id, $s_id){
        $decrypt_m_id = Crypt::decrypt($m_id);
        $decrypt_s_id = Crypt::decrypt($s_id);
        $document = Document::where('sub_folder_id', $decrypt_s_id)->exists();
        if($document){
            return redirect()->back()->with('in_used', 'Please Delete all document first from this folder.');
        }else{
            SubFolder::where('id', $decrypt_s_id)->delete();
            FolderPermissionList::where('id', $decrypt_s_id)->delete();
            return redirect()->back()->with('deleted', 'Sub Folder has been deleted.');
        }
    }

    public function mainFolderList(){ 
        return view('backend.folders.main_folder_list');
    }

    public function deleteMainFolder(Request $request){ 
        try{
            $main_folder_id = $request->id;  
            $s_folder = SubFolder::where('main_folder_id', $main_folder_id)->exists();
                if($s_folder){
                    return response()->json([
                        "status" => "warning",
                        "message" => "Please Delete all sub folder first from this folder"
                    ]);
                }else{
                    MainFolder::where('id', $main_folder_id)->delete();  
                    return response()->json([
                        "status" => "deleted",
                        "message" => "Main Folder has been deleted"
                    ]); 
                }
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    // public function viewDocFolder($id){
        // $folder = DepartmentType::with('folders')->where('id', $id)->first();
        // return view('backend.all_document.viewDocumentSubFolder' , compact('folder'));
    // }

    // public function docView(){
        // return view('backend.all_document.viewDocFile');
    // }

    // public function viewFolderData(){
        //return view('backend.all_document.view_folder_data');
    // }

    // public function folderStore(Request $request){
        // $permission_check = UserPermission::where('user_id', Auth::user()->id)
        //     ->where('menu_id', 60)
        //     ->exists();
        // if ($permission_check) {
        //     $folder = Folder::create([
        //         'department_type_id' => $request->department_type_id,
        //         'folder_name' => $request->folder_name,
        //     ])     //     return redirect('/admin/folders')->with('success', 'Sub Folder Store Successfully');
        // } else {
        //     return response()->view('errors.405', [], 405);
        // }
    // }

}
