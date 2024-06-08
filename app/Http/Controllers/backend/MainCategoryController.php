<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function index(){
        return view('backend.main_category.index');
    }

    public function edit(){
        return view('backend.main_category.edit');
    }

    public function create(){
        return view('backend.main_category.create');
    }
}
