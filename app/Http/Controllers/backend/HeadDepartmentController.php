<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Department;
use App\Models\backend\RoleType;
use App\Models\backend\UserPermission;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class HeadDepartmentController extends Controller
{
    public function index()
    {
        $head_users = User::with('getDepartment:id,name')->where('role_type_id', 2)->get();  
        
        return view('backend.head_department.index', compact('head_users'));
    }
    public function create(){
        $departments = Department::where('status', 1)->get();  
        return view('backend.head_department.create', compact('departments'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user_name = $request->name;
        $user_email = $request->email;
        $user_phone = $request->phone;
        $department_id = $request->department;
        $password = Hash::make($request->password);
        $newUser = User::create([
            'name' => $user_name,
            'email' => $user_email,
            'phone' => $user_phone,
            'created_by' => Auth::user()->id,
            'role_type_id' => 2,
            'department_id' => $department_id,
            'password' => $password,
            'status' => 1
        ]); 

        $permission_list = [1, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 38];
        foreach($permission_list as $permission){
            UserPermission::create([
                "user_id" => $newUser->id,
                'menu_id' => $permission,
                'status' => 1
            ]);
            
        }


        return redirect()->route('backend.head_department.index')->with('success', "Head User has been added successfully");
    }
}
