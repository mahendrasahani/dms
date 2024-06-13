<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\SubCategory;
use Illuminate\Http\Request;
// ------ using for the data from the main category -----//
use App\Models\backend\MainCategory;

class SubCategoryController extends Controller
{
    public function index(){
        $sub_categories = SubCategory::with('getMainCategory:id,name')->get();
        $main_categories = MainCategory::get();
        return view('backend.sub_category.index', compact('sub_categories', 'main_categories'));
    }

    public function edit($id){
         
        $main_categories = MainCategory::where('status', 1)->get();
        $sub_category = SubCategory::with('getMainCategory:id,name')->where('id', $id)->first();
        return view('backend.sub_category.edit', compact('sub_category', 'main_categories'));
    }

    public function create(Request $request)
    {
        $category_name = $request->sub_category_name;
        $discription = $request->sub_category_disc; 
        $main_category_id = $request->main_category_id; 
        $newSubCategory = SubCategory::create([
            'name' => $category_name,
            'description' => $discription,
            'main_category_id' => $main_category_id,
            'status' => 1
        ]);
        return redirect()->route('backend.sub_category.index')->with('success', "Sub Category has been added successfully");
    }
    public function destroy($id){ 
        SubCategory::where('id', $id)->delete();
        return redirect()->route('backend.sub_category.index')->with('update', "Sub Category has been Deleted successfully");
    }

    
    public function update(Request $request, $id)
    {
        $category_name = $request->sub_category_name;
        $main_category_id = $request->main_category_id;
        $description = $request->discription;
        SubCategory::where('id', $id)->update([
            'name' => $category_name,
            'description' => $description,
            'main_category_id' => $main_category_id
        ]);
        return redirect()->route('backend.sub_category.index')->with('update', "Sub Category  has been update successfully");
    }



    public function updateStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        SubCategory::where('id', $id)->update([
            'status' => $status
        ]);
        return response()->json([
            'status' => 200,
            'message' => "success"
        ]);
    }


}
