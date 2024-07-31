<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\backend\{MainCategory ,SubCategory};

class DocumentController extends Controller
{
    public function index(){
        return view('backend.all_document.index');
    }

    public function create(){
        $id = auth()->user()->id;

        $data['users'] = User::where('id' , '!=' ,  $id)->get();
        $data['main_categories'] = MainCategory::get();
        $data['sub_categories'] = SubCategory::get();

        return view('backend.all_document.create',compact('data'));
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
