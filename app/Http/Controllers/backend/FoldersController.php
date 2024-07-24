<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoldersController extends Controller
{
    public  function viewDoc(){
        return view('backend.all_document.viewDocumentFolder');
    }
    public  function viewDocFolder(){
        return view('backend.all_document.viewDocument');
    }
    public  function docView(){
        return view('backend.all_document.viewDocFile');
    }
}
