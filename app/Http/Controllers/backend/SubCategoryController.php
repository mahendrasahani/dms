<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('backend.sub_category.index');
    }

    public function edit(){
        return view('backend.sub_category.edit');
    }

    // public function create(){
    //     return view('backend.sub_category.create');
    // }
}
