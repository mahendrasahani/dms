<?php
use App\Http\Controllers\backend\DashboardController;


Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'redirectDashboard'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'redirectDashboard'])->name('dashboard');
});



Route::middleware(['auth', 'super-admin', 'web'])->group(function(){
});

Route::middleware(['auth', 'admin', 'web'])->group(function(){ 
});

Route::middleware(['auth', 'department', 'web'])->group(function(){ 
});

Route::middleware(['auth', 'employee', 'web'])->group(function(){ 
});