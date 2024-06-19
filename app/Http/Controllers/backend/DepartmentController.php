<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    public function index(){
        $roles = RoleType::whereNotIn('id', [1, 2])->get();
        return view('backend.departments.index', compact('roles'));
    }
 

    public function update(Request $request, $id)
    {
        $role_name = $request->role_name;
        RoleType::where('id', $id)->update([
            'name' => $role_name
        ]);
        return redirect()->route('backend.departments.index')->with('update', "Role has been update successfully");
    }
 
    public function edit($id)
    {
        $role_name = RoleType::where('id', $id)->first();
        return view('backend.departments.edit', compact('role_name'));
    }
 
    public function store(Request $request)
    {
        $name = $request->role_name;
        $newRole = RoleType::create([
            'name' => $name,
            'user_id' => Auth::user()->id,
            'status' => 1
        ]);
        return redirect()->route('backend.departments.index')->with('success', "New role has been added successfully");
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
        return redirect()->route('backend.departments.index')->with('update', "Role has been Deleted successfully");
    }
    
}
