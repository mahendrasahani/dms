<?php
use App\Http\Controllers\backend\AssignedCheckListController;
use App\Http\Controllers\backend\CustomPermissionController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DocumentAuditController;
use App\Http\Controllers\backend\DocumentController;
use App\Http\Controllers\backend\FolderPermissionController;
use App\Http\Controllers\backend\HotelDepartmentController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\backend\MainCategoryController;
use App\Http\Controllers\backend\ManagerController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\LoginAuditController;
use App\Http\Controllers\backend\TaskController;
use App\Http\Controllers\backend\TeamLeaderController;
use App\Http\Controllers\backend\TeamMemberController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\backend\HotelController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\DataBaseEntryController;
use App\Http\Controllers\backend\CheckListController;
use App\Http\Controllers\backend\HeadDepartmentController;
use App\Http\Controllers\backend\FoldersController;
use App\Models\backend\FolderPermission;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'redirectDashboard'])->name('dashboard');
    Route::get('/admin', [DashboardController::class, 'redirectDashboard'])->name('dashboard');

    // main category 
    Route::controller(MainCategoryController::class)->group(function(){
        Route::prefix('/admin/main-category')->group(function(){
            Route::get('/', 'index')->name('backend.main_category.index');
            Route::get('edit/{id}', 'edit')->name('backend.main_category.edit');
            Route::post('store', 'store')->name('backend.main_category.store');
            Route::post('update/{id}', 'update')->name('backend.main_category.update');
            Route::get('delete/{id}', 'destroy')->name('backend.main_category.delete'); 
        });
    });
    // Sub category 
    Route::controller(SubCategoryController::class)->group(function(){
        Route::prefix('/admin/sub-category')->group(function(){
            Route::get('/', 'index')->name('backend.sub_category.index');
            Route::get('edit/{id}', 'edit')->name('backend.sub_category.edit');
            Route::post('store', 'store')->name('backend.sub_category.store');
            Route::post('update/{id}', 'update')->name('backend.sub_category.update');
            Route::get('delete', 'destroy')->name('backend.sub_category.delete'); 
        });
    });

    // All document 
    Route::get('/admin/document', [DocumentController::class, 'index'])->name('backend.document.index');
    Route::get('/admin/document/create', [DocumentController::class, 'create'])->name('backend.document.create');
    Route::post('/admin/document/store', [DocumentController::class, 'store'])->name('backend.document.store');
    Route::get('/admin/document/view/{file}', [DocumentController::class, 'view'])->name('backend.document.view');
    Route::get('/admin/document/edit/{id}', [DocumentController::class, 'edit'])->name('backend.document.edit');
    Route::post('/admin/document/update/{id}', [DocumentController::class, 'update'])->name('backend.document.update');
    Route::get('upload_new_file/{id}', [DocumentController::class, 'uploadNewFile'])->name('backend.document.upload_new_file');
    Route::post('upload_new_file_store/{id}', [DocumentController::class, 'uploadNewFileStore'])->name('backend.document.upload_new_file.store');
    Route::get('/admin/document/comment/{id}', [DocumentController::class, 'comment'])->name('backend.document.comment');
    Route::post('/admin/document/comment/store', [DocumentController::class, 'commentStore'])->name('backend.document.comment_store');
    Route::post('/admin/document/reply/store', [DocumentController::class, 'replyStore'])->name('backend.document.reply');
    Route::get('/admin/document/direct_upload/{m_id}/{s_id}', [DocumentController::class, 'directUpload'])->name('backend.document.direct_upload');
    Route::post('/admin/document/direct_upload_store', [DocumentController::class, 'DirectUploadStore'])->name('backend.document.direct_upload_store');
    Route::get('/admin/document/document_access/{id}', [DocumentController::class, 'DocumentAccess'])->name('backend.document.document_access');
    Route::post('/admin/document/document_access_sync/{id}', [DocumentController::class, 'DocumentAccessSync'])->name('backend.document.document_access_sync');
    Route::get('/admin/document/delete/{id}', [DocumentController::class, 'delete'])->name('backend.document.delete');
    Route::get('/admin/document/download/{id}', [DocumentController::class, 'download'])->name('backend.document.download');
    Route::get('/admin/document/archived_document', [DocumentController::class, 'archivedDocuments'])->name('backend.document.archived_document');
    Route::get('/admin/document/restore/{id}', [DocumentController::class, 'restore'])->name('backend.document.restore');
    Route::get('/admin/document/permanent-delete/{id}', [DocumentController::class, 'PermanentDelete'])->name('backend.document.permanent_delete');


    Route::controller(CustomPermissionController::class)->group(function(){
        Route::prefix('/admin')->group(function(){
            Route::get('assign-custom-permission/{id}', 'assignCustomPermission')->name('backend.assign_custom_permission');
            Route::post('sync-custom-permission', 'syncCustomPermission')->name('backend.sync_custom_permission');
        });
    });

    Route::controller(FolderPermissionController::class)->group(function(){
        Route::prefix('/admin/folder-permission')->group(function(){
            Route::get('/assign/{id}', 'assignFolderPermission')->name('backend.assign_folder_permission.assign');
            Route::post('sync', 'syncFolderPermission')->name('backend.folder_permission.sync');
            Route::get('/assign/direct/{m_folder}/{s_fulder}', 'AssignFolderPermissionDirect')->name('backend_folder_permission.assign.direct');
            Route::post('/sync/direct_permission', 'SyncFolderPermissionDirect')->name('backend_folder_permission.sync.direct');
            Route::post('/sync/sync_file_upload_access', 'SyncFileUploadAccess')->name('backend_folder_permission.sync.file_upload_accesss');
            Route::get('/pertest', 'createFolderPermissionTest');
        });
    });

    Route::controller(FoldersController::class)->group(function () {
        Route::prefix('admin/folders')->group(function () {
            Route::get('/', action: 'mainFolderList')->name('backend.folders.main_folder_list');
            Route::get('/{id}', 'index')->name('backend.folders.index');
            Route::get('/{main_folder_id}/{sub_folder_id}', 'viewDocList')->name('backend.folders.view_doc_list');
            Route::get('/delete-main-folder', 'deleteMainFolder')->name('backend.folders.delete_main_folder');
            Route::get('/delete_sub_folder/{main_folder_id}/{sub_folder_id}', 'DeleteSubFolder')->name('backend.folders.delete_sub_folder');

            // Route::post('/store', 'folderStore')->name('backend.all_document.folders.store');
            Route::post('/store/{id}', 'store')->name('backend.folders.store');
            // Route::get('/view/{id}', 'viewDocFolder')->name('backend.document.folderView');
            Route::get('/view', 'viewDocFolder')->name('backend.all_document.folderView');
            Route::get('/doc-view', 'docView')->name('backend.all_document.docView');
            Route::get('/folder-data', 'viewFolderData')->name('backend.view_folder_data');   
        });
    });
 
    // check box
    Route::controller(CheckListController::class)->group(function () {
        Route::prefix('admin/check-list')->group(function () {
            Route::get('/', 'index')->name('backend.check_list.index');
            Route::get('/edit/{id}', 'edit')->name('backend.check_list.edit');
            Route::post('/update-checklist/{dept_id}', 'updateCheckList')->name('backend.update_checklist');
            Route::get('/get-hotel', 'getHotel')->name('backend.check_list.getHotels');
        });
    });
    Route::controller(AssignedCheckListController::class)->group(function () {
        Route::prefix('admin/assigned-check-list')->group(function () {
            Route::get('/admin/assigned-check-list/', 'index')->name('backend.assigned_check_list.index');
            Route::get('/admin/assigned-check-list/view/{id}', 'view')->name('backend.assigned_check_list.view');
            Route::post('/admin/assigned-check-list/update', 'update')->name('backend.assigned_check_list.update');
        });
    });
    // create department Profile 
    Route::controller(DepartmentController::class)->group(function(){
        Route::prefix('/admin/department')->group(function(){
            Route::get('/', 'index')->name('backend.department.index');
            Route::post('create', 'create')->name('backend.department.create');
            Route::post('store', 'store')->name('backend.department.store');
            Route::get('edit/{id}', 'edit')->name('backend.department.edit');
            Route::get('update/{id}', 'update')->name('backend.department.update');
            Route::get('delete/{id}', 'destroy')->name('backend.department.delete');
        });
    });
    Route::controller(HeadDepartmentController::class)->group(function () {
        Route::prefix('admin/head-department')->group(function () {
            Route::get('/', 'index')->name('backend.head_department.index');
            Route::get('/create', 'create')->name('backend.head_department.create');
            Route::post('/store', 'store')->name('backend.head_department.store');
            Route::get('/edit/{id}', 'edit')->name('backend.head_department.edit');
            Route::post('/update/{id}', 'update')->name('backend.head_department.update');
            Route::get('delete/{id}', 'destroy')->name('backend.head_department.delete');
        });
    });

    Route::controller(HotelController::class)->group(function(){
        Route::prefix('/admin/hotel')->group(function(){
            Route::get('/', 'index')->name('backend.hotel.index');
            Route::get('create', 'create')->name('backend.hotel.create');
            Route::post('store', 'store')->name('backend.hotel.store');
            Route::get('edit/{id}', 'edit')->name('backend.hotel.edit');
            Route::post('update/{id}', 'update')->name('backend.hotel.update');
            Route::get('delete/{id}', 'destroy')->name('backend.hotel.delete');
        });
    });
    Route::controller(HotelDepartmentController::class)->group(function(){
        Route::prefix('admin/hotel_department')->group(function(){
            Route::get('/', 'index')->name('backend.hotel_department.index');
            Route::get('/create', 'create')->name('backend.hotel_department.create');
            Route::post('/store', 'store')->name('backend.hotel_department.store');
            Route::get('/edit/{id}', 'edit')->name('backend.hotel_department.edit');
            Route::post('/update/{id}', 'update')->name('backend.hotel_department.update');
            Route::get('/get-hotel-list', 'getHotelList')->name('backend.hotel_department.get_hotel_list');
            Route::get('delete/{id}', 'destroy')->name('backend.hotel_department.delete');
        });
    });
    Route::controller(ManagerController::class)->group(function(){
        Route::prefix('admin/manager')->group(function (){
            Route::get('/', 'index')->name('backend.manager.index');
            Route::get('create', 'create')->name('backend.manager.create');
            Route::post('store', 'store')->name('backend.manager.store');
            Route::get('edit/{id}', 'edit')->name('backend.manager.edit');
            Route::post('update/{id}', 'update')->name('backend.manager.update');
            Route::get('/get-hotel-list', 'getHotelList')->name('backend.manager.get_hotel_list');
            Route::get('/get-hotel-department-list', 'getHotelDepartmentList')->name('backend.manager.get_hotel_department_list');
            Route::get('delete/{id}', 'destroy')->name('backend.get_hotel_department_list.delete');
        });
    });
    Route::controller(TeamLeaderController::class)->group(function(){
        Route::prefix('/admin/team-leader')->group(function(){
            Route::get('/', 'index')->name('backend.team_leader.index');
            Route::get('create', 'create')->name('backend.team_leader.create');
            Route::post('store', 'store')->name('backend.team_leader.store');
            Route::get('edit/{id}', 'edit')->name('backend.team_leader.edit');
            Route::post('update/{id}', 'update')->name('backend.team_leader.update');
            Route::get('/get-manager-list', 'getManagerList')->name('backend.get_manager_list');
            Route::get('delete/{id}', 'destroy')->name('backend.get_manager_list.delete');
      
        });
    });

    Route::controller(TeamMemberController::class)->group(function(){
        Route::prefix('/admin/team-member')->group(function(){
            Route::get('/', 'index')->name('backend.team_member.index');
            Route::get('create', 'create')->name('backend.team_member.create');
            Route::post('store', 'store')->name('backend.team_member.store');
            Route::get('edit/{id}', 'edit')->name('backend.team_member.edit');
            Route::post('update/{id}', 'update')->name('backend.team_member.update');
            Route::get('/get-team-leader-list', 'getTeamLeader')->name('backend.get_team_leader');
            Route::get('delete/{id}', 'destroy')->name('backend.team_member.delete');
        
        });
    });

    Route::controller(TaskController::class)->group(function(){
        Route::prefix('admin/task')->group(function(){
            Route::get('/', 'index')->name('admin.task.index');
            Route::get('/create/{id}', 'create')->name('admin.task.create');
            Route::post('/store', 'store')->name('admin.task.store');
            Route::get('/edit/{id}', 'edit')->name('admin.task.edit');
            Route::post('/update', 'update')->name('admin.task.update');
            Route::get('/viewDoc/{id}', 'viewDoc')->name('admin.task.view_doc');
            Route::get('/view/{id}', 'view')->name('admin.task.view');
            Route::post('/task_comment', 'TaskComment')->name('admin.task.comment');
            Route::post('/reply-on-comment', 'ReplyOnComment')->name('admin.task.comment.reply');
        });
    });

    Route::get('/admin/login-audit', [LoginAuditController::class, 'index'])->name('backend.login_audit.index');
    Route::get('/admin/document-audit', [DocumentAuditController::class, 'index'])->name('backend.document_audit.index');

    // user Profile
    Route::get('/admin/profile', [UserProfileController::class, 'index'])->name('backend.user_profile.index');
    Route::post('/admin/profile_update', [UserProfileController::class, 'update'])->name('backend.user_profile.update');
    // for database entry (delete after work)
    Route::controller(DataBaseEntryController::class)->group(function () {
        Route::prefix('admin/entry')->group(function () {
            Route::get('/', 'index')->name('backend.database_entry.index');
            Route::post('/create', 'create')->name('backend.database_entry.create');
        });
    });
    // Employee 



    // This (employee) route is only for testing purpose delete after project complete
    Route::get('/admin/employee', [EmployeeController::class, 'index'])->name('backend.employee.index');
     


    Route::get('/admin/create/publicly_shared_url/{id}', [DocumentController::class, 'PubliclySharedDocument'])->name('backend.create_publicly_shared_url');
    Route::post('/admin/create/publicly_shared_url/send', [DocumentController::class, 'PubliclySharedDocumentSend'])->name('backend.create_publicly_shared_url_send');

});


    Route::middleware(['auth', 'super-admin', 'web'])->group(function () {});
    Route::middleware(['auth', 'admin', 'web'])->group(function(){
    });
    // Route::middleware(['auth', 'department', 'web'])->group(function(){
    // });
    Route::middleware(['auth', 'employee', 'web'])->group(function(){
    });
 
