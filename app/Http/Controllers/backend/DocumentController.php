<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(){
        return view('backend.all_document.index');
    }

    

    public function create(){
        return view('backend.all_document.create');
    }

    public function edit(){
        return view('backend.all_document.edit');
    }

    public function view(){
        return view('backend.all_document.view_pdf');
    }
    public function comment(){
        return view('backend.all_document.comment');
    }
}
