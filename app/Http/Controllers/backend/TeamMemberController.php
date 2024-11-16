<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Unit;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class TeamMemberController extends Controller
{
    public function index(){ 
        $team_members = User::with(['getDepartmentType', 'getHead', 'getUnit', 'getManager', 'getTeamLeader']);
        if(Auth::user()->role_type_id == 2){
            $team_members = $team_members->where('head_department_id', Auth::user()->id);
        }
        if(Auth::user()->role_type_id == 5){
            $team_members = $team_members->where('manager_id', Auth::user()->id);
        }
        if(Auth::user()->role_type_id == 6){
            $team_members = $team_members->where('team_leader_id', Auth::user()->id);
        }
        $team_members = $team_members->where('role_type_id', 7)
        ->orderBy('id', 'desc')->paginate(10);
        return view('backend.team_member.index', compact('team_members'));
    }

    public function create(){
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
        return view('backend.team_member.create', compact('heade_departments'));
    }
 
    public function edit($id){
        try{ 
            $decrypt_id = Crypt::decrypt($id);
            $head_departments = User::where('role_type_id', 2)->get(); 
            $team_member = User::with(['getDepartmentType', 'getHead', 'getUnit', 'getManager', 'getTeamLeader'])->where('id', $decrypt_id)->first();
            $units = Unit::get(); 
                if($team_member->head_department_id != ''){
                    $managers = User::where('head_department_id', $team_member->head_department_id)
                    ->where('unit_id', $team_member->unit_id)
                    ->where('role_type_id', 5)->get();
                } 
            $team_leaders = User::where('head_department_id', $team_member->head_department_id)
            ->where('unit_id', $team_member->unit_id);
                if($team_member->manager_id != ''){
                    $team_leaders = $team_leaders->where('manager_id', $team_member->manager_id);
                }
            $team_leaders = $team_leaders->where('role_type_id', 6)->get();   
            return view('backend.team_member.edit', compact(['team_member',
            'head_departments', 'managers', 'team_leaders', 'units']));  
        }catch(\Exception $e){
            abort('404');
        }
    }
 
    public function update(Request $request, $id){   
        $decrypt_id  = Crypt::decrypt($id);
        $request->validate([
            'f_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'l_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            // 'email' => ['required', 'string', 'lowercase', 'email:dns', 'email', 'max:255', Rule::unique(User::class)->ignore($decrypt_id)],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique(User::class)->ignore($decrypt_id)], 
            'head_department' => ['required'],
            'hotel' => ['required'], 
            // 'manager' => ['required'],
            // 'team_leader' => ['required'],
        ]);
 
        $f_name = $request->f_name;
        $l_name = $request->l_name;
        // $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        // $hotel_department_id = $request->hotel_department;
        $manager_id = $request->manager;
        $team_leader_id = $request->team_leader;
        $department_head = User::where('id', $head_department_id)->first();
        $member = User::where('id', $decrypt_id)->update([
            "first_name" => $f_name,
            "last_name" => $l_name,
            "name" => $f_name .' '. $l_name,
            // "email" => $email,
            "phone" => $phone,
            "department_type_id" => $department_head->department_type_id,
            "head_department_id" => $head_department_id,
            "unit_id" => $hotel_id,
            "manager_id" => $manager_id,
            "team_leader_id" => $team_leader_id
        ]);
        if($request->password != null){
           $usercheck =  User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->password), 
            ]);   
        }
        return redirect()->route('backend.team_member.index')->with('success', "Team Member has been updated successfully");
    }


    public function getTeamLeader(Request $request){
        try{
            $manager_id = $request->manager;
            $team_leader_list = UserHierarchy::where('manager_id', $manager_id)->get();
            $user_ids = [];
            foreach($team_leader_list as $tl){
                $user_ids[] = $tl->user_id;
            }
            $team_leaders = User::whereIn('id', $user_ids)->where('role_type_id', 6)->get();
            return response()->json([
                "status" => "success",
                "team_leader" => $team_leaders
            ], 200); 
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 400);
        }
    }


    public function destroy($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            if(Auth::user()->role_type_id == 1){
                $user = UserHierarchy::where('team_leader_id', $decrypt_id)->exists();
                User::where('id', $decrypt_id)->delete();
                return redirect()->back()->with('deleted', "Team Member has been deleted successfully");
            }else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');
        }
    }


    public function statusChange(Request $request){
        try{
            User::where('id', $request->id)->update([
                "status" => $request->status
            ]); 
            return response()->json([
                "status" => "success", 
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }

}
