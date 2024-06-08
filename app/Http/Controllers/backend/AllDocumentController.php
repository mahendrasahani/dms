<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllDocumentController extends Controller
{
    public function index(){
        return view('backend.all_document.index');
    }

    

    public function create(){
        return view('backend.all_document.create');
    }
}
