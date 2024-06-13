<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckListController extends Controller
{
    public function index(){
        return view('backend.check_list.index');
    }
}
