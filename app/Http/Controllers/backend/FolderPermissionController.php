<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Folder;
use App\Models\User;
use Illuminate\Http\Request;

class FolderPermissionController extends Controller
{
    public function assignFolderPermission($id){
        $user = User::where('id', $id)->first();
        $folder = Folder::groupBy('department_type_id')->get();
        // return $folder;
        return view('backend.folder_permission.assign_folder_permission', compact('user', 'folder'));
    }
}
