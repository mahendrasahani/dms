<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        $user = User::with('roleType')->where('id', Auth::user()->id)->first();
        return view('backend.user_profile.index', compact('user'));
    }

    public function update(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone; 
        User::where('id', Auth::user()->id)->update([
            "name" => $name,
            "email" => $email,
            "phone" => $phone
        ]); 
        if($request->new_password != ''){
            User::where('id', Auth::user()->id)->update([
                "password" => Hash::make($request->new_password)
            ]); 
        }
        if($request->hasFile('profile_image')){
            $profile_name = time().''.$request->file('profile_image')->getClientOriginalExtension();
            $request->file('profile_image')->move(public_path('assets/backend/assets/images/upload/profile_image'), $profile_name);
            User::where('id', Auth::user()->id)->update([
                "profile_image" => $profile_name
            ]);
        }   

        return redirect()->back()->with("profile_updated", "Profile has been updated successfully.");

        }
    
}
