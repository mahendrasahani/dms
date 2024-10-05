<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Department;
use App\Models\backend\DepartmentType;
use App\Models\backend\RoleType;
use App\Models\backend\UserHierarchy;
use App\Models\backend\UserPermission;
use App\Models\User;
use Crypt;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class HeadDepartmentController extends Controller
{
    public function index(){ 
        if(Auth::user()->role_type_id == 1){
            $head_users = User::with('getDepartmentType:id,name')->where('role_type_id', 2)->get();  
            return view('backend.head_department.index', compact('head_users'));
        }else{
            return response()->view('errors.405', [], 405);
        } 
    }
    public function create(){
        if(Auth::user()->role_type_id == 1){
        $head_departments = DepartmentType::where('status', 1)->get();  
        return view('backend.head_department.create', compact('head_departments'));
        }else{
            return response()->view('errors.405', [], 405);
        }
    }

    public function store(Request $request){
        if(Auth::user()->role_type_id == 1){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email:dns', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user_name = $request->name;
        $user_email = $request->email;
        $user_phone = $request->phone;
        $department_type_id = $request->department;
        $password = Hash::make($request->password);
        $newUser = User::create([
            'name' => $user_name,
            'email' => $user_email,
            'phone' => $user_phone,
            'created_by' => Auth::user()->id,
            'role_type_id' => 2,
            'department_type_id' => $department_type_id,
            'password' => $password,
            'status' => 1, 
        ]);
        return redirect()->route('backend.head_department.index')->with('success', "Head User has been added successfully");
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10']
        ]);
        $user_name = $request->name;
        $user_email = $request->email;
        $user_phone = $request->phone;
        $department_type_id = $request->department;
        $newUser = User::where('id', $decrypt_id)->update([
            'name' => $user_name,
            'email' => $user_email,
            'phone' => $user_phone,
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
                User::where('id', $decrypt_id)->delete();
                return redirect()->back()->with('deleted', "Department has been Deleted successfully");
            }
            else{
                return response()->view('errors.405', [], 405);
            } 
        }catch(\Exception $e){
            abort('404');
        }
    }
}
