<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email:dns', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'head_department' => ['required'],
            'hotel' => ['required'],
            'hotel_department' => ['required'],
            'manager' => ['required'],
            'team_leader' => ['required'],
        ]);

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
            "role_type_id" => 7,
            "created_by" => Auth::user()->id
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




    public function edit($id){
        try{
        $decrypt_id = Crypt::decrypt($id);
        $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
        $team_member = User::with('getUserHierarchie')->where('id', $decrypt_id)->first();

        $hotels = User::where('role_type_id', 3)
        ->whereHas('getUserHierarchie', function ($query) use ($team_member)  {
            $query->where('head_department_id', $team_member->getUserHierarchie->head_department_id);
        })->get();

        $hotel_departments = User::where('role_type_id', 4)
        ->whereHas('getUserHierarchie', function ($query) use ($team_member){
            $query->where('hotel_id', $team_member->getUserHierarchie->hotel_id);
        })->get(); 

        $h_managers = User::where('role_type_id', 5)
        ->whereHas('getUserHierarchie', function($query) use ($team_member){
            $query->where('hotel_id', $team_member->getUserHierarchie->hotel_id);
        })->get();

        $team_leaders = User::where('role_type_id', 6)
        ->whereHas('getUserHierarchie', function ($query) use ($team_member){
            $query->where('manager_id', $team_member->getUserHierarchie->manager_id);
        })->get();
 
        return view('backend.team_member.edit', 
        compact('heade_departments', 'team_member',
        'hotels', 'hotel_departments', 'h_managers', 'team_leaders'));
    }catch(\Exception $e){
        abort('404');
    }
    }
 
    public function update(Request $request, $id){
        $decrypt_id  = Crypt::decrypt($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email:dns', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'], 
            'head_department' => ['required'],
            'hotel' => ['required'],
            'hotel_department' => ['required'],
            'manager' => ['required'],
            'team_leader' => ['required'],
        ]);
        
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $hotel_department_id = $request->hotel_department;
        $manager_id = $request->manager;
        $team_leader_id = $request->team_leader;
        $manager = User::where('id', $decrypt_id)->update([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,  
        ]);
        UserHierarchy::where('user_id', $decrypt_id)->update([ 
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id,
            "hoted_department_id" => $hotel_department_id,
            "manager_id" => $manager_id,
            "team_leader_id" => $team_leader_id,
        ]);
        if($request->new_pasword != ''){
            User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->new_pasword), 
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

}
