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
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email:dns', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'head_department' => ['required'],
            'hotel' => ['required'],
            'hotel_department' => ['required'],
        ]);  
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

    public function edit($id){
        try{ 
            $decrypt_id = Crypt::decrypt($id);
            $heade_departments = User::with('getDepartmentType')->where('role_type_id', 2)->get(); 
            $manager = User::with('getUserHierarchie')->where('id', $decrypt_id)->first();
        }catch(\Exception $e){
            abort('404');
        } 
        $hotels = User::where('role_type_id', 3)
        ->whereHas('getUserHierarchie', function ($query) use ($manager)  {
            $query->where('head_department_id', $manager->getUserHierarchie->head_department_id);
        })->get(); 
        $hotel_departments = User::where('role_type_id', 4)
        ->whereHas('getUserHierarchie', function ($query) use ($manager){
            $query->where('hotel_id', $manager->getUserHierarchie->hotel_id);
        })->get();  
        return view('backend.manager.edit', compact('heade_departments', 'manager', 'hotels', 'hotel_departments'));
    }

    public function update(Request $request, $id){ 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:10'],
            'head_department' => ['required'],
            'hotel' => ['required'],
            'hotel_department' => ['required'],
        ]);  
        $decrypt_id = Crypt::decrypt($id);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;
        $hotel_department_id = $request->hotel_department; 
        $manager = User::where('id', $decrypt_id)->update([
            "name" => $name,
            "email" => $email,
            "phone" => $phone, 
            "role_type_id" => 5
        ]); 
        UserHierarchy::create([
            "user_id" => $decrypt_id,
            "head_department_id" => $head_department_id,
            "hotel_id" => $hotel_id,
            "hoted_department_id" => $hotel_department_id
        ]); 
        if($request->new_pasword != ''){
            User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->new_pasword), 
            ]);   
        }
        return redirect()->route('backend.manager.index')->with('success', "Manager has been updated successfully");
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

    public function destroy($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            if(Auth::user()->role_type_id == 1){
                $user = UserHierarchy::where('manager_id', $decrypt_id)->exists();
                if($user){ 
                    return redirect()->back()->with('already_in_use', 'This Manager has user you cant delete directly');
                }
                User::where('id', $decrypt_id)->delete();
                return redirect()->back()->with('deleted', "Manager has been deleted successfully");
            }
            else{
                return response()->view('errors.405', [], 405);
            }
        }catch(\Exception $e){
            abort('404');
        }
    }
}
