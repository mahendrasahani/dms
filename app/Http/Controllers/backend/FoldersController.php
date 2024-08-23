<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\backend\{DepartmentType, Folder, UserPermission};
use Auth;

class FoldersController extends Controller
{
    public function viewDoc()
    {
        $departments = DepartmentType::with('folders')->get();
        return view('backend.all_document.viewDocumentFolder', compact('departments'));
    }
    public function viewDocFolder($id)
    {
        $folder = DepartmentType::with('folders')->where('id', $id)->first();

        return view('backend.all_document.viewDocumentSubFolder' , compact('folder'));
    }
    public function docView()
    {
        return view('backend.all_document.viewDocFile');
    }
    public function viewFolderData()
    {
        return view('backend.all_document.view_folder_data');
    }

    public function folderStore(Request $request)
    {
        $permission_check = UserPermission::where('user_id', Auth::user()->id)
            ->where('menu_id', 60)
            ->exists();
        if ($permission_check) {
            $folder = Folder::create([
                'department_type_id' => $request->department_type_id,
                'folder_name' => $request->folder_name,
            ]);
            
            return redirect('/admin/folders')->with('success', 'Sub Folder Store Successfully');
        } else {
            return response()->view('errors.405', [], 405);
        }
    }
}
