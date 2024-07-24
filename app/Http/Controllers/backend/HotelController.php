<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('getUser')->get();
        return view('backend.hotels.index', compact( 'hotels'));
    }
    public function create(){
        $head_departments = User::with('getDepartment')->where('role_type_id', 2)->where('status', 1)->get();
        return view('backend.hotels.create', compact('head_departments'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $hotel_name = $request->hotal_name;
        $hotel_location = $request->hotel_location;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $department_id = $request->head_department;
        $password = $request->password;


        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($password),
            'department_id' => $department_id,
            'role_type_id' => 3,
            'status' => 1
        ]);
        $newHotel = Hotel::create([
            'name'=> $hotel_name,
            'location'=> $hotel_location,
            'user_id' => $user->id,
            'status' => 1
        ]);

        // permissions:- dashboard, department, documents, employees
        return redirect()->route('backend.hotel.index')->with('success', "Hotel has been added successfully");
    }
    public function updateStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        Hotel::where('id', $id)->update([
            'status' => $status
        ]);
        return response()->json([
            'status' => 200,
            'message' => "success"
        ]);
    }
}
