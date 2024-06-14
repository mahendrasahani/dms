<?php
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\MainCategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\AllDocumentController;
use App\Http\Controllers\backend\LoginAuditController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\backend\HotelController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\DataBaseEntryController;
use App\Http\Controllers\backend\CheckListController;

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'redirectDashboard'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'redirectDashboard'])->name('dashboard');

    // main category  
    $main_category_routes = DB::table('menus')->where('id', 2)->first();
    Route::get('/'.$main_category_routes->url, [MainCategoryController::class, 'index'])->name($main_category_routes->route_name);
    $main_category_routes = DB::table('menus')->where('id', 3)->first();
    Route::get('/'.$main_category_routes->url, [MainCategoryController::class, 'edit'])->name($main_category_routes->route_name);
    $main_category_routes = DB::table('menus')->where('id', 4)->first();
    Route::post('/'.$main_category_routes->url, [MainCategoryController::class, 'store'])->name($main_category_routes->route_name);
    $main_category_routes = DB::table('menus')->where('id', 5)->first();
    Route::get('/'.$main_category_routes->url, [MainCategoryController::class, 'update'])->name($main_category_routes->route_name);
    $main_category_routes = DB::table('menus')->where('id', 6)->first();
    Route::get('/'.$main_category_routes->url, [MainCategoryController::class, 'destroy'])->name($main_category_routes->route_name);
    $main_category_routes = DB::table('menus')->where('id', 7)->first();
    Route::get('/'.$main_category_routes->url, [MainCategoryController::class, 'updateStatus'])->name($main_category_routes->route_name);

    // Sub category  
    $sub_category = DB::table('menus')->where('id', 8)->first();
    Route::get('/'.$sub_category->url, [SubCategoryController::class, 'index'])->name($sub_category->route_name);
    $sub_category = DB::table('menus')->where('id', 9)->first();
    Route::get('/'.$sub_category->url, [SubCategoryController::class, 'edit'])->name($sub_category->route_name);
    $sub_category = DB::table('menus')->where('id', 10)->first(); 
    Route::post('/'.$sub_category->url, [SubCategoryController::class, 'store'])->name($sub_category->route_name);
    $sub_category = DB::table('menus')->where('id', 11)->first(); 
    Route::get('/'.$sub_category->url, [SubCategoryController::class, 'update'])->name($sub_category->route_name);
    $sub_category = DB::table('menus')->where('id', 12)->first(); 
    Route::get('/'.$sub_category->url, [SubCategoryController::class, 'destroy'])->name($sub_category->route_name);
    $sub_category = DB::table('menus')->where('id', 13)->first(); 
    Route::get('/'.$sub_category->url, [SubCategoryController::class, 'updateStatus'])->name($sub_category->route_name);
    
    // All document
    $document = DB::table('menus')->where('id', 14)->first(); 
    Route::get('/'.$document->url, [AllDocumentController::class, 'index'])->name($document->route_name);
    $document = DB::table('menus')->where('id', 15)->first(); 
    Route::get('/'.$document->url, [AllDocumentController::class, 'create'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 16)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'store'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 17)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'edit'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 18)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'update'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 19)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'updateStatus'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 20)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'destroy'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 21)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'viewDoc'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 22)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'commentOnDoc'])->name($document->route_name);
    // $document = DB::table('menus')->where('id', 23)->first(); 
    // Route::get('/'.$document->url, [AllDocumentController::class, 'dwonloadDoc'])->name($document->route_name);

    // Hotel route
    $hotel = DB::table('menus')->where('id', 24)->first();
    Route::get('/'.$hotel->url, [HotelController::class, 'index'])->name($hotel->route_name);
    $hotel = DB::table('menus')->where('id', 25)->first();
    Route::get('/'.$hotel->url, [HotelController::class, 'create'])->name($hotel->route_name);
    $hotel = DB::table('menus')->where('id', 26)->first();
    Route::post('/'.$hotel->url, [HotelController::class, 'store'])->name($hotel->route_name);
    // $hotel = DB::table('menus')->where('id', 27)->first();
    // Route::post('/'.$hotel->url, [HotelController::class, 'edit'])->name($hotel->route_name);
    // $hotel = DB::table('menus')->where('id', 28)->first();
    // Route::post('/'.$hotel->url, [HotelController::class, 'update'])->name($hotel->route_name);
    // $hotel = DB::table('menus')->where('id', 29)->first();
    // Route::post('/'.$hotel->url, [HotelController::class, 'delete'])->name($hotel->route_name);
    $hotel = DB::table('menus')->where('id', 30)->first();
    Route::get('/'.$hotel->url, [HotelController::class, 'updateStatus'])->name($hotel->route_name);

    // Employee 
    $employee = DB::table('menus')->where('id', 31)->first();
    Route::get('/'.$employee->url, [EmployeeController::class, 'index'])->name($employee->route_name);
    $employee = DB::table('menus')->where('id', 32)->first();
    Route::get('/'.$employee->url, [EmployeeController::class, 'create'])->name($employee->route_name);
    $employee = DB::table('menus')->where('id', 33)->first();
    Route::post('/'.$employee->url, [EmployeeController::class, 'store'])->name($employee->route_name);
    // $employee = DB::table('menus')->where('id', 34)->first();
    // Route::post('/'.$employee->url, [EmployeeController::class, 'edit'])->name($employee->route_name);
    // $employee = DB::table('menus')->where('id', 35)->first();
    // Route::post('/'.$employee->url, [EmployeeController::class, 'update'])->name($employee->route_name);
    // $employee = DB::table('menus')->where('id', 36)->first();
    // Route::post('/'.$employee->url, [EmployeeController::class, 'delete'])->name($employee->route_name);
    $employee = DB::table('menus')->where('id', 37)->first();
    Route::get('/'.$employee->url, [EmployeeController::class, 'updateStatus'])->name($employee->route_name);
    
    // create department Profile
    $department = DB::table('menus')->where('id', 38)->first();
    Route::get('/'.$department->url, [DepartmentController::class, 'index'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 39)->first();
    Route::post('/'.$department->url, [DepartmentController::class, 'create'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 40)->first();
    Route::post('/'.$department->url, [DepartmentController::class, 'store'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 41)->first();
    Route::get('/'.$department->url, [DepartmentController::class, 'edit'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 42)->first();
    Route::get('/'.$department->url, [DepartmentController::class, 'update'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 43)->first();
    Route::get('/'.$department->url, [DepartmentController::class, 'destroy'])->name($department->route_name);
    $department = DB::table('menus')->where('id', 44)->first();
    Route::get('/'.$department->url, [DepartmentController::class, 'updateStatus'])->name($department->route_name);

    // login Audit route
    Route::get('/admin/login-audit', [LoginAuditController::class, 'index'])->name('backend.login_audit.index');

    // user Profile
    Route::get('/admin/profile', [UserProfileController::class, 'index'])->name('backend.user_profile.index');

    // for database entry (delete after work)
    Route::get('/admin/entry', [DataBaseEntryController::class, 'index'])->name('backend.database_entry.index'); 
    Route::post('/admin/entry/create', [DataBaseEntryController::class, 'create'])->name('backend.database_entry.create');

    // check box
    Route::get('/admin/check-list/create', [CheckListController::class, 'index'])->name('backend.check_list.index'); 
});

Route::middleware(['auth', 'super-admin', 'web'])->group(function(){
});

Route::middleware(['auth', 'admin', 'web'])->group(function(){ 
});

// Route::middleware(['auth', 'department', 'web'])->group(function(){ 
// });

Route::middleware(['auth', 'employee', 'web'])->group(function(){ 
});