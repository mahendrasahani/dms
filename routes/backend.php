<?php
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MainCategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\AllDocumentController;
use App\Http\Controllers\backend\LoginAuditController;
use App\Http\Controllers\backend\UserProfileController;



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



    
    // sub category  
    Route::get('/admin/sub-category', [SubCategoryController::class, 'index'])->name('backend.sub_category.index');
    Route::get('/admin/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('backend.sub_category.edit');
    Route::post('/admin/sub-category/create', [SubCategoryController::class, 'create'])->name('backend.sub_category.create');
    Route::get('/admin/sub-category/delete/{id}', [SubCategoryController::class, 'destroy'])->name('backend.sub_category.delete');

    // All document
    Route::get('/admin/all-document', [AllDocumentController::class, 'index'])->name('backend.all_document.index');
    // Route::get('/admin/all-document/edit', [AllDocumentController::class, 'edit'])->name('backend.all_document.edit');
    Route::get('/admin/all-document/create', [AllDocumentController::class, 'create'])->name('backend.all_document.create');


    // login Audit route
    Route::get('/admin/login-audit', [LoginAuditController::class, 'index'])->name('backend.login_audit.index');
    // Route::get('/admin/login-audit/edit', [LoginAuditController::class, 'edit'])->name('backend.login_audit.edit');


    // user Profile
    Route::get('/admin/profile', [UserProfileController::class, 'index'])->name('backend.user_profile.index');
});



Route::middleware(['auth', 'super-admin', 'web'])->group(function(){
});

Route::middleware(['auth', 'admin', 'web'])->group(function(){ 
});

Route::middleware(['auth', 'department', 'web'])->group(function(){ 
});

Route::middleware(['auth', 'employee', 'web'])->group(function(){ 
});