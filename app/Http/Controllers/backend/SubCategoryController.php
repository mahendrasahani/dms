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
        $sub_categories = SubCategory::get();
        $main_categories = MainCategory::get();
        return view('backend.sub_category.index', compact('sub_categories', 'main_categories'));
    }

    public function edit(){
        return view('backend.sub_category.edit');
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
    public function destroy(Request $request, $id){
        
        SubCategory::where('id', $id)->delete();
        return redirect()->route('backend.sub_category.index')->with('update', "Sub Category has been Deleted successfully");
    }
}
