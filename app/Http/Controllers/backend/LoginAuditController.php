<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAuditController extends Controller
{ 
    public function index(){
        return view('backend.login_audit.index');
    }
}
