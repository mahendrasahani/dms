<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){ 
        if(Auth::user()->role_type_id == 1){
            return view('backend.dashboard.super_admin_dashboard');
        }else if(Auth::user()->role_type_id == 2){
            return view('backend.dashboard.admin_dashboard');
        }else if(Auth::user()->role_type_id == 3){
            return view('backend.dashboard.department_dashboard'); 
        }else if(Auth::user()->role_type_id == 4){
            return view('backend.dashboard.employee_dashboard');
        }
    }
    public function redirectDashboard(){
        return redirect('admin/dashboard'); 
    } 
   
}
