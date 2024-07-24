<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Menu;
use App\Models\backend\UserPermission;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EmployeeController extends Controller{
    public function index(){
        $roles = User::with(['roleType:id,name', 'getDepartment:id,name'])->get();
        return view('backend.employee.index', compact('roles'));
    }
    public function create(){
        $user = Auth::user()->id;
        $roles = RoleType::whereNotIn('id', [1,2])->where('status', 1)->get();
        return view('backend.employee.create', compact('roles'));
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
        $role_type_id = $request->department;
        $password = Hash::make($request->password);
        $newUser = User::create([
            'name' => $user_name,
            'email' => $user_email,
            'phone' => $user_phone,
            'created_by' => Auth::user()->id,
            'role_type_id' => $role_type_id,
            'password' => $password,
            'status' => 1
        ]);
        return redirect()->route('backend.employee.index')->with('success', "User has been added successfully");
    }

    public function updateStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        RoleType::where('id', $id)->update([
            'status' => $status
        ]);
        return response()->json([
            'status' => 200,
            'message' => "success"
        ]);
    }

    public function edit($id){
       $user = User::where('id', $id)->first();
       $roles = User::with('roleType:id,name')->where('created_by', Auth::user()->id)->get();
       return view('backend.employee.edit', compact('user', 'roles'));
    }

    public function assignPermission($id){
        $employee = User::where('id', $id)->first();
        $menus = Menu::all()->groupBy(['order_id', 'group_name']);
        $permission_list = UserPermission::where('user_id', $id)->pluck('menu_id')->toArray();
        return view('backend.employee.assign_permission', compact('employee', 'menus', 'permission_list'));
    }

    public function syncUserPermission(Request $request){
        $user_id = $request->user_id;
        $new_permissions = $request->permission_ids;
        UserPermission::where('user_id', $user_id)->delete();
        foreach($new_permissions as $permission){
            UserPermission::create([
                'menu_id' => $permission,
                'user_id' => $user_id,
                'status' => 1
            ]);
        }
        return redirect()->route('backend.employee.index', [$user_id])->with('updated', 'Permission has been updated !');
    }

    // public function destroy($id)
    // {
    //     RoleType::where('id', $id)->delete();
    //     return redirect()->route('backend.create_role.index')->with('update', "Role has been Deleted successfully");
    // }
}
