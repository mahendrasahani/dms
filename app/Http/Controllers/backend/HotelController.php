<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::with('getUser')->get();
        return view('backend.hotels.index',compact( 'hotel'));
    }
    public function create()
    {
        return view('backend.hotels.create');
    }
    public function store(Request $request)
    {

        $hotel_name = $request->hotal_name;
        $hotel_location = $request->hotel_location;
      
        $user = User::create([
            'name' => $request->owner_name,
            'email' => $request->owner_email,
            'password' => Hash::make($request->password),
            'role_type_id' => 2,
            'status' => 1
        ]);
        $newHotel = Hotel::create([
            'name'=> $hotel_name,
            'location'=> $hotel_location,
            'user_id' => $user->id,
            'status' => 1
        ]);
        return redirect()->route('backend.hotels.create')->with('success', "Hotel has been added successfully");
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
