<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Menu;
use App\Models\backend\UserPermission;
use App\Models\User;
use Illuminate\Http\Request;

class CustomPermissionController extends Controller{
    public function assignCustomPermission($id){
        $employee = User::where('id', $id)->first();
        $menus = Menu::all()->groupBy(['order_id', 'group_name']);
        $permission_list = UserPermission::where('user_id', $id)->pluck('menu_id')->toArray();
        return view('backend.employee.assign_permission', compact('employee', 'menus', 'permission_list'));
    }

    public function syncCustomPermission(Request $request){
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
        return redirect()->back()->with('updated', 'Permission has been updated !');
    }
}
