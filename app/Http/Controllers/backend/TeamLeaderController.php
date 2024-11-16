<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Unit;
use App\Models\backend\UserHierarchy;
use App\Models\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class TeamLeaderController extends Controller
{
    public function index(){
        $team_leaders = User::with(['getDepartmentType', 'getHead', 'getUnit', 'getManager']);
        if(Auth::user()->role_type_id == 2){
            $team_leaders = $team_leaders->where('head_department_id', Auth::user()->id);
        }
        if(Auth::user()->role_type_id == 5){
            $team_leaders = $team_leaders->where('manager_id', Auth::user()->id);
        }
        $team_leaders = $team_leaders->where('role_type_id', 6)
        ->orderBy('id', 'desc')->paginate(10);
        return view('backend.team_leader.index', compact('team_leaders'));
    }



  
    public function edit($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            $managers = '';
            $team_leader = User::with(['getDepartmentType', 'getHead', 'getUnit', 'getManager'])
            ->where('id', $decrypt_id)->first(); 
            $department_heads = User::where('role_type_id', 2)
            ->where('status', 1)->get(); 
            $units = Unit::select('*');
            if(Auth::user()->role_type_id == 5){
                $units = $units->where('id', Auth::user()->unit_id);
            }
            $units = $units->get(); 
            if($team_leader->head_department_id != ''){
                $managers = User::where('role_type_id', 5)
                ->where('head_department_id', $team_leader->head_department_id)
                ->where('unit_id', $team_leader->unit_id)
                ->get();
            } 
            return view('backend.team_leader.edit', compact('team_leader',
            'department_heads', 'units', 'managers'));  
        }catch(\Exception $e){
            abort('404');
        }
    }



    public function update(Request $request, $id){
        $decrypt_id = Crypt::decrypt($id);
        $request->validate([
            'f_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'l_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            // 'email' => ['required', 'string', 'lowercase', 'email:dns', 'email', 'max:255', Rule::unique(User::class)->ignore($decrypt_id)],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique(User::class)->ignore($decrypt_id)], 
            'head_department' => ['required'],
            'hotel' => ['required'],
            // 'manager' => ['required'],
        ]);
        $f_name = $request->f_name;
        $l_name = $request->l_name;
        // $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $manager_id = $request->manager;
        $head_department = User::where('id', $head_department_id)->first();

        $manager = User::where('id', $decrypt_id)->update([
            "first_name" => $f_name,
            "last_name" => $l_name,
            "name" => $f_name.' '.$l_name,
            // "email" => $email,
            "phone" => $phone,
            "department_type_id" => $head_department->department_type_id,
            "head_department_id" => $head_department_id,
            "unit_id" => $hotel_id,
            "manager_id" => $manager_id
        ]);  
        if($request->password != ''){
            User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->password), 
            ]);     
        }
        return redirect()->route('backend.team_leader.index')->with('success', "Team Leader has been updated successfully");
    }
 

    public function destroy($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            if(Auth::user()->role_type_id == 1){
                $user = UserHierarchy::where('team_leader_id', $decrypt_id)->exists();
                if($user){ 
                    return redirect()->back()->with('already_in_use', 'This Team Leader has user you cant delete directly');
                }
                User::where('id', $decrypt_id)->delete();
                return redirect()->back()->with('deleted', "Team Leader has been deleted successfully");
            }
            else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function statusChange(Request $request){
        try{
            User::where('id', $request->id)->update([
                "status" => $request->status
            ]); 
            return response()->json([
                "status" => "success", 
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => "failed",
                "error" => $e->getMessage()
            ]);
        }
    }


}
