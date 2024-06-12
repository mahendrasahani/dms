<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        // $roles = User::where('admin_id', $id)->get();
        $roles = User::with('roleType:id,name')->where('admin_id', $id)->get();
        // return $roles;
        return view('backend.employee.index', compact('roles'));
    }
    public function create()
    {
        $user = Auth::user()->id;
        $roles = RoleType::where('user_id', $user)->get();
        return view('backend.employee.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $user_name = $request->user_name;
        $user_email = $request->user_email;
        $user_phone = $request->user_phone;
        $role_type_id = $request->role_type_id;
        $password = Hash::make($request->password);

        $newUser = User::create([
            'name' => $user_name,
            'email' => $user_email,
            'phone' => $user_phone,
            'admin_id' => Auth::user()->id,
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
    // public function destroy($id)
    // {
    //     RoleType::where('id', $id)->delete();
    //     return redirect()->route('backend.create_role.index')->with('update', "Role has been Deleted successfully");
    // }
}
