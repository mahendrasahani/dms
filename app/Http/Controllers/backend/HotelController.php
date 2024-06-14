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
    public function create()
    {
        return view('backend.hotels.create');
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
        $password = $request->password;

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => Hash::make($password),
            'role_type_id' => 2,
            'status' => 1
        ]);
        $newHotel = Hotel::create([
            'name'=> $hotel_name,
            'location'=> $hotel_location,
            'user_id' => $user->id,
            'status' => 1
        ]);
        return redirect()->route('backend.hotels.index')->with('success', "Hotel has been added successfully");
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
