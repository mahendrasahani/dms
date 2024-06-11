<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\backend\Hotal;
use Illuminate\Support\Facades\Hash;


class HotalController extends Controller
{
    
    public function index()
    {
        $hotel = Hotal::with('getUser')->get();
        return view('backend.hotals.index',compact( 'hotel'));
    }
    public function create()
    {
        return view('backend.hotals.create');
    }
    public function store(Request $request)
    {

        $hotel_name = $request->hotal_name;
        $hotel_location = $request->hotel_location;
      
        $user = User::create([
            'name' => $request->owner_name,
            'email' => $request->owner_email,
            'password' => Hash::make($request->password),
            'role_type_id' => 2
        ]);
        $newHotel = Hotal::create([
            'name'=> $hotel_name,
            'location'=> $hotel_location,
            'user_id' => $user->id,
            'status' => 1
        ]);
        return redirect()->route('backend.hotals.create')->with('success', "Hotel has been added successfully");
    }
}
