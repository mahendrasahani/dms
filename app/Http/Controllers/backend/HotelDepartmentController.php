<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class HotelDepartmentController extends Controller
{
    public function index(){
            $hotel_departments = User::with(['getUserHierarchie.getHeadDepartment.getDepartmentType', 'getUserHierarchie.getHotel'])->where('role_type_id', 4)->get();
        // return $hotel_departments;
        return view('backend.hotel_department.index', compact('hotel_departments'));
    }

    public function create(){
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->where('status', 1)->get();
        $hotels = User::where('role_type_id', 3)->where('status', 1)->get();
        return view('backend.hotel_department.create', compact('heade_departments', 'hotels'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $heade_department_id = $request->head_department;
        $hote_id = $request->hotel;
        $password = Hash::make($request->password);

        $user = User::create([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "password" => $password,
            "role_type_id" => 4,
            "created_by" => Auth::user()->id,
            "status" => 1
        ]);
        UserHierarchy::create([
            "user_id" => $user->id,
            "head_department_id" => $heade_department_id,
            "hotel_id" => $hote_id,
            "status" => 1
        ]);

        return redirect()->route('backend.hotel_department.index')->with('success', "Hotel Department has been added successfully");

    }

    public function edit($id){
        $hotel_department = User::where('id', $id)->with(['getUserHierarchie.getHeadDepartment', 'getUserHierarchie.getHotel'])->first();
        $head_departments = User::with('getDepartmentType')->where('role_type_id', 2)->where('status', 1)->get();
        $hotels = User::where('role_type_id', 3)->where('status', 1)->get();
        return view('backend.hotel_department.edit', compact('hotel_department', 'head_departments', 'hotels'));
    }

    public function update(Request $request, $id){
        $name = $request->name; 
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;

        User::where('id', $id)->update([
            "name" => $name, 
            "phone" => $phone
        ]);
        UserHierarchy::where('user_id', $id)->update([
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id
        ]); 
        return redirect()->route('backend.hotel_department.index')->with("update", "Hotel Department has been successfully updated.");
    }

    public function getHotelList(Request $request){
       $user_hierarchy = UserHierarchy::where('head_department_id', $request->head_department)->get();
       $user_ids = [];
       foreach($user_hierarchy as $id){
            $user_ids[] = $id->user_id;
       }
       $hotels = User::whereIn('id', $user_ids)->where('role_type_id', 3)->get();
       return response()->json([
        "status" => "success",
        "hotel_list" => $hotels
       ]);
    }

}
