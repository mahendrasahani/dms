<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\UserHierarchy;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        $managers = User::with(['getUserHierarchie.getHeadDepartment.getDepartmentType', 'getUserHierarchie.getHotel', 'getUserHierarchie.getHotelDepartment'])->where('role_type_id', 5)->get(); 
        // return $managers;
        return view('backend.manager.index', compact('managers'));
    }

    public function create(){
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
        // return $heade_departments;
        return view('backend.manager.create', compact('heade_departments'));
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $hotel_department_id = $request->hotel_department;
        $password = Hash::make($request->password);
        
        $manager = User::create([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "password" => $password,
            "role_type_id" => 5
        ]);

        UserHierarchy::create([
            "user_id" => $manager->id,
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id,
            "hoted_department_id" => $hotel_department_id
        ]);
        return redirect()->route('backend.manager.index')->with('success', "Manager has been added successfully");
    }

    public function getHotelList(Request $request){
        try{
        $head_department_id = $request->head_department_id;  
        $hotel_lists = UserHierarchy::where('head_department_id', $head_department_id)->get();
        $user_ids = [];
        foreach($hotel_lists as $hotel_list){
            $user_ids[] = $hotel_list->user_id;
        } 
        $hotel_list = User::whereIn('id', $user_ids)->where('role_type_id', 3)->get();
        return response()->json([
            "status" => "success",
            "hotel_list" => $hotel_list
        ], 200);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 400);
        } 
    }

    public function getHotelDepartmentList(Request $request){
        try{
            $hotel_id = $request->hotel_id;
            $dept_list = UserHierarchy::where('hotel_id', $hotel_id)->get();
            $user_ids = [];
            foreach($dept_list as $dept){
                $user_ids[] = $dept->user_id;
            } 
            $department_list = User::whereIn('id', $user_ids)->where('role_type_id', 4)->get();
            return response()->json([
                "status" => "success",
                "hotel_department_list" => $department_list
            ], 200);
            
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ], 400);
        }
    }
}
