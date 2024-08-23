<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\RoleType;
use App\Models\backend\DepartmentType;
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    public function index(){
        $roles = DepartmentType::get();
        return view('backend.departments.index', compact('roles'));
    }
 

    public function update(Request $request, $id)
    {
        $role_name = $request->role_name;
        DepartmentType::where('id', $id)->update([
            'name' => $role_name
        ]);
        return redirect()->route('backend.department.index')->with('update', "Department has been update successfully");
    }
 
    public function edit($id)
    {
        $role_name = DepartmentType::where('id', $id)->first();
        return view('backend.departments.edit', compact('role_name'));
    }
 
    public function store(Request $request)
    {
        $name = $request->role_name;
        $newRole = DepartmentType::create([
            'name' => $name,
            'status' => 1
        ]);
        return redirect()->route('backend.department.index')->with('success', "New Department has been added successfully");
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
    public function destroy($id)
    {
        DepartmentType::where('id', $id)->delete();
        return redirect()->route('backend.department.index')->with('update', "Department has been Deleted successfully");
    }
    
}
