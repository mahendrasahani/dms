<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadDepartmentController extends Controller
{
    public function index()
    {
        $roles = User::with('roleType:id,name')->where('created_by', Auth::user()->id)->get(); 
        // return $roles;
        return view('backend.head_department.index', compact('roles'));
    }
    public function create()
    {
        $roles = User::where('created_by', Auth::user()->id)->get(); 
        // return $roles;
        return view('backend.head_department.create', compact('roles'));
    }
}
