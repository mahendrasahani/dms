<?php

use App\Http\Controllers\backend\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){ 
});

Route::get('/get_sub_folder_list', [ApiController::class, 'getSubFolderList'])->name('api.get_sub_folder_list');
Route::get('/fetch-chart-data', [ApiController::class, 'fetchChartData'])->name('fetch_chart_data');
Route::get('get_subfolder_with_m_f', [ApiController::class, 'getSFolderWithMfolderId'])->name('api.get_s_folder_list');
Route::get('get_document_list', [ApiController::class, 'getDocumentList'])->name('api.get_docuemnt_list');