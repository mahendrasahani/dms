<?php

namespace App\Http\Controllers\backend;

use App\Mail\SendPasswordToAdminMail;
use App\Models\backend\Department;
use App\Models\backend\DepartmentType;
use App\Models\backend\MainFolder;
use App\Models\backend\RoleType;
use App\Models\backend\UserHierarchy;
use App\Models\backend\UserMainFolderPermission;
use App\Models\backend\UserPermission;
use App\Models\User;
use Crypt;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class HeadDepartmentController extends Controller{
    public function index(){ 
        if(Auth::user()->role_type_id == 1){
            $head_users = User::with('getDepartmentType:id,name')
            ->where('role_type_id', 2)
            ->orderBy('id', 'desc')->paginate(10);  
            return view('backend.head_department.index', compact('head_users'));
        }else{
            return response()->view('errors.405', [], 405);
        }
    }
    
    public function edit($id){
        try{
            $decrypt_id= Crypt::decrypt($id);
            if(Auth::user()->role_type_id == 1){
                $head_department_type = DepartmentType::where('status', 1)->get();  
                $head_department = User::where('id', $decrypt_id)->first();
                
                return view('backend.head_department.edit', compact('head_department', 'head_department_type'));
            }else{
                return response()->view('errors.405', [], 405);
            } 
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function update(Request $request, $id){
        $decrypt_id= Crypt::decrypt($id);

        $request->validate([
            'f_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'l_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'], 
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10']
        ]);

        // $unit_ids = array_map('intval', $request->units ?? []); 
        $user_f_name = $request->f_name;
        $user_l_name = $request->l_name; 
        // $user_email = $request->email;
        $user_phone = $request->phone;
        $department_type_id = $request->department;
        
        $newUser = User::where('id', $decrypt_id)->update([
            'first_name' => $user_f_name,
            'last_name' => $user_l_name,
            'name' => $user_f_name.' '.$user_l_name,
            // 'email' => $user_email,
            'phone' => $user_phone,
            'department_type_id' => $department_type_id,
            // "unit_ids" => $unit_ids,
        ]);
        User::where('head_department_id', $decrypt_id)->update([ 
            'department_type_id' => $department_type_id,
        ]);
        
        if($request->password != ''){
            $newUser = User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->password), 
            ]);
        }
        return redirect()->route('backend.head_department.index')->with('success', "Head User has been updated successfully");
    }
 
    public function destroy($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            if(Auth::user()->role_type_id == 1){
                $user = UserHierarchy::where('head_department_id', $decrypt_id)->exists();
                if($user){ 
                    return redirect()->back()->with('already_in_use', 'This Head department has user you cant delete directly');
                }
                User::where('id', $decrypt_id)->forceDelete();
                return redirect()->back()->with('deleted', "Department has been Deleted successfully");
            }
            else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');   
        }
    }

    public function statusChange(Request $request){
        try{
            User::where('id', $request->id)->update([
                "status" => $request->status
            ]); 
            return response()->json([
                "status" => "success", 
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }
}
