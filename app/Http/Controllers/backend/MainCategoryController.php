<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function index()
    {
        $main_categories = MainCategory::get();
        return view('backend.main_category.index', compact('main_categories'));
    }

    public function edit($id)
    {
        $main_categories = MainCategory::where('id', $id)->first();
        return view('backend.main_category.edit', compact('main_categories'));
    }
     


        public function update(Request $request, $id){
            $category_name = $request->category_name;
            $description = $request->discription;
            MainCategory::where('id', $id)->update([
                'name' => $category_name,
                'description' => $description
            ]);
            return redirect()->route('backend.main_category.index')->with('update', "Main Category has been update successfully");  

        }


    public function store(Request $request)
    {
        $category_name = $request->category_name;
        $discription = $request->discription;

        $newMainCategory = MainCategory::create([
            'name' => $category_name,
            'description' => $discription,
            'status' => 1
        ]);
        return redirect()->route('backend.main_category.index')->with('success', "Main Category has been added successfully");
    }
}
