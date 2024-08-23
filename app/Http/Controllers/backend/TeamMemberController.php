<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class TeamMemberController extends Controller
{
    public function index(){
        $team_member = User::with(['getUserHierarchie.getHeadDepartment.getDepartmentType', 'getUserHierarchie.getHotel', 'getUserHierarchie.getHotelDepartment', 'getUserHierarchie.getManager', 'getUserHierarchie.getTeamLeader'])->where('role_type_id', 7)->get(); 
        return view('backend.team_member.index', compact('team_member'));
    }

    public function create(){
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
        return view('backend.team_member.create', compact('heade_departments'));
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $hotel_department_id = $request->hotel_department;
        $manager_id = $request->manager;
        $team_leader_id = $request->team_leader;
        $password = Hash::make($request->password);
        $manager = User::create([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "password" => $password,
            "role_type_id" => 7
        ]);
        UserHierarchy::create([
            "user_id" => $manager->id,
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id,
            "hoted_department_id" => $hotel_department_id,
            "manager_id" => $manager_id,
            "team_leader_id" => $team_leader_id,
        ]);
        return redirect()->route('backend.team_member.index')->with('success', "Team Member has been added successfully");
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

}
