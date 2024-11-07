<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\DepartmentType;
use App\Models\backend\Unit;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPasswordToAdminMail;

class UserController extends Controller
{
    public function create(){
        if(Auth::user()->role_type_id == 1 || Auth::user()->role_type_id == 2 || Auth::user()->role_type_id == 5){
            return view('backend.user.create');
        }else{  
            return response()->view('errors.405', [], 405);
        }
    }

    public function store(Request $request){
        $request->validate([
            'f_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'l_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'lowercase', 'email:dns', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:'.User::class],
            'role_type' => ['required']
        ]);  
        $randompassword = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 10);
        $password = Hash::make($randompassword); 
        $role_type =  $request->role_type;
        $role = '';
        if($role_type == 2){
            $role = "Department Head";
        }else if($role_type == 5){
            $role = "Manager";
        }else if($role_type == 6){
            $role = "Team Leader";
        }else if($role_type == 7){
            $role = "Employee";
        } 
        if(Auth::user()->role_type_id == 1 && $role_type == 2){
            $check_dep_head = User::where('department_type_id', $request->department_type)
            ->where('role_type_id', 2)->first();
            if($check_dep_head){
                return redirect()->back()->with('already_exists', 'Head user already exist in selected department.');
            } 
            $unit_ids = array_map('intval', $request->units ?? []);
            $new_user =  User::create([
                "first_name" => $request->f_name,
                "last_name" => $request->l_name,
                "name" => $request->f_name.' '.$request->l_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => $password,
                "role_type_id" => $role_type,
                "unit_ids" => $unit_ids,
                "department_type_id" => $request->department_type
            ]); 
           $user_detail_mail_data = [
                "message" => "Email Message",
                "first_name" => $request->f_name,
                "last_name" => $request->l_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => $randompassword,  
                "login_url" => route('login'),
                "role" => $role,
            ];
            $admin_email = User::where('role_type_id', 1)->first();
            Mail::to($admin_email->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            Mail::to($request->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            return redirect()->back()->with('created', 'Head Department has benn created.');
        }else if($role_type == 5){
            $department_head = User::where('id', $request->department_head)->first();
            $old_manager = User::where('head_department_id', $request->department_head)
            ->where('unit_id', $request->unit)
            ->where('role_type_id', 5)->exists();
            if($old_manager){
                return redirect()->back()->with('already_exists', 'Manager already exist.');
            } 
            if(Auth::user()->role_type_id == 1){
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $request->department_head,
                    "unit_id" => $request->unit,
                ]);
            }else if(Auth::user()->role_type_id == 2){
                $department_head = User::where('id', Auth::user()->id)->first();
                    $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $department_head->id,
                    "unit_id" => $request->unit,
               ]);  
            }
            $user_detail_mail_data = [
                "message" => "Email Message",
                "first_name" => $request->f_name,
                "last_name" => $request->l_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => $randompassword,
                "login_url" => route('login'),
                "role" => $role,
            ];
            $admin_email = User::where('role_type_id', 1)->first();
            Mail::to($admin_email->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            Mail::to($request->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            return redirect()->back()->with('created', 'Manager has benn created.');
        }else if($role_type == 6){
            if(Auth::user()->role_type_id == 1){
                $department_head = User::where('id', $request->department_head)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $department_head->id,
                    "unit_id" => $request->unit,
                    "manager_id" => $request->manager
                ]);
            }elseif(Auth::user()->role_type_id == 2){
                $department_head = User::where('id', Auth::user()->id)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $department_head->id,
                    "unit_id" => $request->unit,
                    "manager_id" => $request->manager
                ]); 
            }elseif(Auth::user()->role_type_id == 5){
                $manager = User::where('id', Auth::user()->id)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $manager->department_type_id,
                    "head_department_id" => $manager->head_department_id,
                    "manager_id" => $manager->id,
                    "unit_id" => $manager->unit_id,
                ]);
            }
            $user_detail_mail_data = [
                "message" => "Email Message",
                "first_name" => $request->f_name,
                "last_name" => $request->l_name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => $randompassword,
                "login_url" => route('login'),
                "role" => $role,
            ];
            $admin_email = User::where('role_type_id', 1)->first();
            Mail::to($admin_email->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            Mail::to($request->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
            return redirect()->back()->with('created', 'Team Leader has benn created.');
        }elseif($role_type == 7){
            if(Auth::user()->role_type_id == 1){
                $department_head = User::where('id', $request->department_head)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $department_head->id,
                    "unit_id" => $request->unit,
                    "manager_id" => $request->manager,
                    "team_leader_id" => $request->team_leader,
                ]); 
            }else if(Auth::user()->role_type_id == 2){
                $department_head = User::where('id', Auth::user()->id)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $department_head->department_type_id,
                    "head_department_id" => $department_head->id,
                    "unit_id" => $request->unit,
                    "manager_id" => $request->manager,
                    "team_leader_id" => $request->team_leader,
                ]);
            }else if(Auth::user()->role_type_id == 5){
                $manager = User::where('id', $request->Auth::user()->id)->first();
                $new_user =  User::create([
                    "first_name" => $request->f_name,
                    "last_name" => $request->l_name,
                    "name" => $request->f_name.' '.$request->l_name,
                    "email" => $request->email,
                    "phone" => $request->phone, 
                    "password" => $password,
                    "role_type_id" => $role_type,
                    "department_type_id" => $manager->department_type_id,
                    "head_department_id" => $manager->head_department_id,
                    "unit_id" => $manager->unit_id,
                    "manager_id" => $manager->id,
                    "team_leader_id" => $request->team_leader,
                ]);
            }
        $user_detail_mail_data = [
            "message" => "Email Message",
            "first_name" => $request->f_name,
            "last_name" => $request->l_name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => $randompassword,
            "login_url" => route('login'),
            "role" => $role,
        ];
        $admin_email = User::where('role_type_id', 1)->first();
        Mail::to($admin_email->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
        Mail::to($request->email)->send(new SendPasswordToAdminMail($user_detail_mail_data));
        return redirect()->back()->with('created', 'Team Member has benn created.');
        }
    }

    public function getDepartmentList(){
        try{
            if(Auth::user()->role_type_id == 1){
                $department_type_list = DepartmentType::get();
                $unit_list = Unit::get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 1,
                    "department_type_list" => $department_type_list,
                    "unit_list" => $unit_list
                ]);
            }else{
                return response()->json([
                    "status" => "permission_denied"
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getHierarchieForManager(){
        try{
            if(Auth::user()->role_type_id == 1){
                $head_department_list = User::where('role_type_id', 2)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 1,
                    "head_department_list" => $head_department_list
                ]);
            }elseif(Auth::user()->role_type_id == 2){ 
                $department_head = User::where('id', Auth::user()->id)->first();

                $unit_list = Unit::whereIn('id', $department_head->unit_ids)->get();
                
                return response()->json([
                    "status" => "success",
                    "auth_role" => 2,
                    "unit_list" => $unit_list
                ]);
            } 
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getHierarchieForTeamLeader(){
        try{
            if(Auth::user()->role_type_id == 1){
                $head_department_list = User::where('role_type_id', 2)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 1,
                    "head_department_list" => $head_department_list
                ]);
            }else if(Auth::user()->role_type_id == 2){
                
                $unit_list = Unit::whereIn('id', Auth::user()->unit_ids)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 2,
                    "unit_list" => $unit_list
                ]);
            } else if(Auth::user()->role_type_id == 5){
                return response()->json([
                    "status" => "success",
                    "auth_role" => 5
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getHierarchieForTeamMember(){
        try{
            if(Auth::user()->role_type_id == 1){ 
                $head_department_list = User::where('role_type_id', 2)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 1,
                    "head_department_list" => $head_department_list
                ]);
            }else if(Auth::user()->role_type_id == 2){
                $unit_list = Unit::whereIn('id', Auth::user()->unit_ids)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 2,
                    "unit_list" => $unit_list
                ]);
            }else if(Auth::user()->role_type_id == 5){
                $team_leader_list = User::where('manager_id', Auth::user()->id)->where('role_type_id', 6)->get();
                return response()->json([
                    "status" => "success",
                    "auth_role" => 5,
                    "team_leader_list" => $team_leader_list
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getUnitList(Request $request){
        try{
            $department_head = User::where('id', $request->department_id)->first();
            $unit_list = Unit::whereIn('id', $department_head->unit_ids)->get();
                return response()->json([
                "status" => "success", 
                "unit_list" => $unit_list
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getManagerList(Request $request){
        try{
             $manager_list = User::where('unit_id', $request->unit_id);
            if(Auth::user()->role_type_id == 1){ 
                $manager_list = $manager_list->where('head_department_id', $request->department_head);
            }elseif(Auth::user()->role_type_id == 2){   
                $manager_list = $manager_list->where('head_department_id', Auth::user()->id);
            } 
            $manager_list = $manager_list->where('role_type_id', 5)->get();
            return response()->json([
                "status" => "success",
                "manager_list" => $manager_list
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

    public function getTeamLeaderList(Request $request){
        try{
            $team_leader_list = User::where('manager_id', $request->manager_id)->where('role_type_id', 6)->get();
            return response()->json([
                "status" => "success",
                "team_leader_list" => $team_leader_list
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }
}
