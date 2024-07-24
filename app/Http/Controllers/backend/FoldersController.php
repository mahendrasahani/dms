<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\{Department, Folder, UserPermission};
use Auth;

class FoldersController extends Controller
{
    public function viewDoc()
    {
        $departments = Department::with('folders')->get();
        return view('backend.all_document.viewDocumentFolder', compact('departments'));
    }
    public function viewDocFolder($id)
    {
        $folder = Department::with('folders')->where('id', $id)->first();

        return view('backend.all_document.viewDocumentSubFolder' , compact('folder'));
    }
    public function docView()
    {
        return view('backend.all_document.viewDocFile');
    }

    public function folderStore(Request $request)
    {
        $permission_check = UserPermission::where('user_id', Auth::user()->id)
            ->where('menu_id', 60)
            ->exists();
        if ($permission_check) {
            $folder = Folder::create([
                'department_id' => $request->department_id,
                'folder_name' => $request->folder_name,
            ]);
            return redirect('/admin/folders')->with('success', 'Sub Folder Store Successfully');
        } else {
            return response()->view('errors.405', [], 405);
        }
    }
}
