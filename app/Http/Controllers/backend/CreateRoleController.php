<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use Illuminate\Support\Facades\Auth;
class CreateRoleController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $roles = RoleType::where('user_id', $user)->get();
        return view('backend.create_role.index', compact('roles'));
    }




    public function update(Request $request, $id)
    {
        $role_name = $request->role_name;
        RoleType::where('id', $id)->update([
            'name' => $role_name
        ]);
        return redirect()->route('backend.create_role.index')->with('update', "Role has been update successfully");
    }




    public function edit($id)
    {
        $role_name = RoleType::where('id', $id)->first();
        return view('backend.create_role.edit', compact('role_name'));
    }




    public function create(Request $request)
    {
        $name = $request->role_name;
        $newRole = RoleType::create([
            'name' => $name,
            'user_id' => Auth::user()->id,
            'status' => 1
        ]);
        return redirect()->route('backend.create_role.index')->with('success', "New role has been added successfully");
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
    public function destroy($id)
    {
        RoleType::where('id', $id)->delete();
        return redirect()->route('backend.create_role.index')->with('update', "Role has been Deleted successfully");
    }
}
