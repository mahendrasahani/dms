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

class ManagerController extends Controller
{
    public function index(){ 
        $managers = User::with(['getDepartmentType', 'getHead', 'getUnit'])
        ->where('role_type_id', 5); 
        if(Auth::user()->role_type_id == 2){
            $managers = $managers->where('head_department_id', Auth::user()->id)
            ->whereIn('unit_id', Auth::user()->unit_ids);
        }
        $managers = $managers->orderBy('id', 'desc')->paginate(10);  
        return view('backend.manager.index', compact('managers'));
    }

    public function create(){
        try{ 
        $current_user = User::with('getUserHierarchie')->where('id', Auth::user()->id)->first();
        $heade_departments = User::with('getDepartmentType');
        if(Auth::user()->role_type_id == 2){
            $heade_departments = $heade_departments->where('id', Auth::user()->id);
        }
        if(Auth::user()->role_type_id == 4){
            $heade_departments = $heade_departments->where('id', $current_user->getUserHierarchie->head_department_id);
        }
        $heade_departments = $heade_departments->where('role_type_id', 2)->get();  
        return view('backend.manager.create', compact('heade_departments'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
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
            $manager = User::with(['getDepartmentType', 'getHead', 'getUnit'])->where('id', $decrypt_id)->first();
            $head_departments = User::where('role_type_id', 2)->get();
            $head_units = Unit::whereIn('id', $manager?->getHead?->unit_ids)->get(); 
        }catch(\Exception $e){
            abort('404');
        } 
        return view('backend.manager.edit', compact('manager', 
        'head_departments', 'head_units'));
    }

    public function update(Request $request, $id){
        $decrypt_id = Crypt::decrypt($id);
        $request->validate([
            'f_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'l_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'email:dns', Rule::unique(User::class)->ignore($decrypt_id)],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique(User::class)->ignore($decrypt_id)],
            'head_department' => ['required'],
            'hotel' => ['required'],
        ]);
        $f_name = $request->f_name;
        $l_name = $request->l_name;
        // $email = $request->email;
        $phone = $request->phone;
        $head_department_id = $request->head_department;
        $hotel_id = $request->hotel;  
        $head_department = User::where('id', $head_department_id)->first(); 
        $manager = User::where('id', $decrypt_id)->update([
            "first_name" => $f_name,
            "last_name" => $l_name,
            "name" => $f_name.' '.$l_name,
            // "email" => $email,
            "phone" => $phone,
            "department_type_id" => $head_department->department_type_id,
            "head_department_id" => $head_department_id,
            "unit_id" => $hotel_id 
        ]);
        if($request->password != ''){
            User::where('id', $decrypt_id)->update([
                'password' => Hash::make($request->password), 
            ]);   
        }
        return redirect()->route('backend.manager.index')->with('updated', "Manager has been updated successfully");
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
