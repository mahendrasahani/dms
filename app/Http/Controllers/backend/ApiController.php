<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\{SubFolder, MainFolder};
use App\Models\backend\DepartmentType;
use App\Models\backend\Document;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function getSubFolderList(Request $request){
    try{
        $department_id = $request->department_id;
        $main_folder_id = MainFolder::where('department_type_id', $department_id)->first()->id;
        $sub_folders = SubFolder::where('main_folder_id', $main_folder_id)->get();
         return response()->json([
            "status" => "success",
            "folders" => $sub_folders
         ], 200);
    }catch(\Exception $e){
        return response()->json([
            "status" => "error",
            "mesage" => $e->getMessage()
        ], 400);
    }
  }

  public function fetchChartData(){
    try{
      $departments = DepartmentType::withCount('getDocument')
      ->get(['name', 'get_document_count']); 
        $labels = $departments->pluck('name');
        $data = $departments->pluck('get_document_count'); 
        return response()->json([
          "status" => "success",
            'labels' => $labels,
            'data' => $data
        ]);
    }catch(\Exception $e){
      return response()->json([
        "status" => "failed",
        "error" => $e->getMessage()
      ]);
    }
  }
}
