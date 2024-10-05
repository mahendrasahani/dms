<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\backend\MainFolderPermissionList;
use App\Models\backend\UserMainFolderPermission;
use App\Models\backend\UserPermission;
use App\Models\User;
use Crypt;
use DB;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use App\Models\backend\{DepartmentType, MainFolder};
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    public function index(){
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 38)->exists();
        if($permission_check){
        $roles = DepartmentType::get();
        return view('backend.departments.index', compact('roles'));
        }else{
            return response()->view('errors.405', [], 405);
        }
    }


    public function update(Request $request, $id){
        $validate = $request->validate([
            "role_name" => ['required']
        ]);
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 41)->exists();
        if($permission_check){
        $role_name = $request->role_name;
        DepartmentType::where('id', $id)->update([
            'name' => $role_name
        ]);
        return redirect()->route('backend.department.index')->with('update', "Department has been update successfully");
        }else{
            return response()->view('errors.405', [], 405);
        }

    }

    public function edit($id){
        try{
            $decrypt_id = Crypt::decrypt($id); 
            $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 41)->exists();
            if($permission_check){
            $role_name = DepartmentType::where('id', $decrypt_id)->first();
            return view('backend.departments.edit', compact('role_name'));
        }else{
            return response()->view('errors.405', [], 405);
        }
        }catch(\Exception $e){
            abort('404');
        }
    }
 
    public function store(Request $request){
        $validate = $request->validate([
            "role_name" => ['required']
        ]);
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 41)->exists();
        if($permission_check){
        $name = $request->role_name;
        $lastGroupId = DB::table('main_folder_permission_lists')->max('group_id');  
        $newGroupId = $lastGroupId ? $lastGroupId + 1 : 1; 
        $department = DepartmentType::create([
            'name' => $name,
            'status' => 1
        ]);
        $main_folder = MainFolder::create([
            'name' => $name,
            'department_type_id' => $department->id
        ]);  
        $main_folder_permission_list = MainFolderPermissionList::create([
            'name' => $name,
            'main_folder_id' => $main_folder->id,
            'group_name' => $newGroupId,
            'status' => 1
        ]); 
        UserMainFolderPermission::create([
            "main_folder_permission_lists_id" => $main_folder->id,
            "user_id" => 1,
            "status" => 1
        ]); 
        return redirect()->route('backend.department.index')->with('success', "New Department has been added successfully");
    }else{
        return response()->view('errors.405', [], 405);
    }
    }
 
    public function updateStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        DepartmentType::where('id', $id)->update([
            'status' => $status
        ]);
        return response()->json([
            'status' => 200,
            'message' => "success"
        ]);
    }
    public function destroy($id){
        try{
        $decrypt_id = Crypt::decrypt($id);
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 43)->exists();
            if($permission_check){
            $user = User::where('department_type_id', $decrypt_id)->exists();
            if($user){
                return redirect()->back()->with('already_in_use', 'This department has user you cant delete directly');
            } 
            $main_folder = MainFolder::where('department_type_id', $decrypt_id)->exists();
            if($main_folder){
                return redirect()->back()->with('main_folder_already_in_use', 'Main Folder is using this department. You cant delete directly.');
            }
            DepartmentType::where('id', $decrypt_id)->delete();
            return redirect()->route('backend.department.index')->with('update', "Department has been Deleted successfully");
            }else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');
        }
    }
    
}
