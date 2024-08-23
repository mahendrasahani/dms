<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class TeamLeaderController extends Controller
{
    public function index(){
        $team_leader = User::with(['getUserHierarchie.getHeadDepartment.getDepartmentType', 'getUserHierarchie.getHotel', 'getUserHierarchie.getHotelDepartment'])->where('role_type_id', 6)->get(); 
        return view('backend.team_leader.index', compact('team_leader'));
    }

    public function create(){
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
        return view('backend.team_leader.create', compact('heade_departments'));
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $hotel_department_id = $request->hotel_department;
        $manager_id = $request->manager;
        $password = Hash::make($request->password);
        $manager = User::create([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "password" => $password,
            "role_type_id" => 6
        ]);
        UserHierarchy::create([
            "user_id" => $manager->id,
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id,
            "hoted_department_id" => $hotel_department_id,
            "manager_id" => $manager_id,
        ]);
        return redirect()->route('backend.team_leader.index')->with('success', "Team Leader has been added successfully");
    }


    public function getManagerList(Request $request){
        try{
            $hotel_department_id = $request->hotel_department_id;
            $manager_list = UserHierarchy::where('hoted_department_id', $hotel_department_id)->get();
            $user_ids = [];
            foreach($manager_list as $mang){
                $user_ids[] = $mang->user_id;
            }
            $manager_list = User::whereIn('id', $user_ids)->where('role_type_id', 5)->get();
            return response()->json([
                "status" => "success",
                "manager_list" => $manager_list
            ], 200); 
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 400);
        }
    }


}
