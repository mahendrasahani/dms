<?php
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\MainCategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\AllDocumentController;
use App\Http\Controllers\backend\LoginAuditController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\backend\HotelController;
use App\Http\Controllers\backend\CreateRoleController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\DataBaseEntryController;
use App\Http\Controllers\backend\CheckListController;



Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'redirectDashboard'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'redirectDashboard'])->name('dashboard');

    // main category  
    Route::get('/admin/main-category', [MainCategoryController::class, 'index'])->name('backend.main_category.index');
    Route::get('/admin/main-category/edit/{id}', [MainCategoryController::class, 'edit'])->name('backend.main_category.edit');
    Route::post('/admin/main-category/store', [MainCategoryController::class, 'store'])->name('backend.main_category.store');
    Route::get('/admin/main-category/update/{id}', [MainCategoryController::class, 'update'])->name('backend.main_category.update');
    Route::get('/admin/main-category/delete/{id}', [MainCategoryController::class, 'destroy'])->name('backend.main_category.delete');
    Route::get('/admin/main-category/update-status', [MainCategoryController::class, 'updateStatus'])->name('backend.main_category.update_status');

    // sub category  
    Route::get('/admin/sub-category', [SubCategoryController::class, 'index'])->name('backend.sub_category.index');
    Route::get('/admin/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('backend.sub_category.edit');
    Route::post('/admin/sub-category/create', [SubCategoryController::class, 'create'])->name('backend.sub_category.create');
    Route::get('/admin/sub-category/delete', [SubCategoryController::class, 'destroy'])->name('backend.sub_category.delete');
    Route::get('/admin/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('backend.sub_category.update');
    Route::get('/admin/sub-category/update-status', [SubCategoryController::class, 'updateStatus'])->name('backend.sub_category.update_status');

    // All document
    Route::get('/admin/all-document', [AllDocumentController::class, 'index'])->name('backend.all_document.index');
    Route::get('/admin/all-document/create', [AllDocumentController::class, 'create'])->name('backend.all_document.create');

    // login Audit route
    Route::get('/admin/login-audit', [LoginAuditController::class, 'index'])->name('backend.login_audit.index');

    // Hotal route
    Route::get('/admin/hotel', [HotelController::class, 'index'])->name('backend.hotels.index');
    Route::get('/admin/hotel/create', [HotelController::class, 'create'])->name('backend.hotels.create');
    Route::post('/admin/hotel/store', [HotelController::class, 'store'])->name('backend.hotels.store');
    // hotel edit
    Route::get('/admin/hotel/update-status', [EmployeeController::class, 'updateStatus'])->name('backend.hotel.update_status');

    // user Profile
    Route::get('/admin/profile', [UserProfileController::class, 'index'])->name('backend.user_profile.index');

     // create role Profile
    Route::get('/admin/department', [DepartmentController::class, 'index'])->name('backend.create_role.index');
    Route::post('/admin/department', [DepartmentController::class, 'create'])->name('backend.create_role.create');
    Route::get('/admin/department/edit/{id}', [DepartmentController::class, 'edit'])->name('backend.create_role.edit');
    Route::get('/admin/department/delete/{id}', [DepartmentController::class, 'update'])->name('backend.create_role.update');
    Route::get('/admin/department/update/{id}', [DepartmentController::class, 'destroy'])->name('backend.create_role.delete');
    Route::get('/admin/department/update-status', [DepartmentController::class, 'updateStatus'])->name('backend.create_role.update_status');

    // Employee 
    Route::get('/admin/users', [EmployeeController::class, 'index'])->name('backend.employee.index');
    Route::get('/admin/users/create', [EmployeeController::class, 'create'])->name('backend.employee.create');
    Route::post('/admin/users/store', [EmployeeController::class, 'store'])->name('backend.employee.store');
    // employee edit 
    Route::get('/admin/users/update-status', [EmployeeController::class, 'updateStatus'])->name('backend.employee.update_status');

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