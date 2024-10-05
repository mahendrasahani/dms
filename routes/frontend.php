<?php
use App\Http\Controllers\backend\DocumentController;
use App\Http\Controllers\Controller;


Route::get('document/{file}', [DocumentController::class, 'PubliclySharedDocumentView'])->name('frontend.publicly_shared_document_view');


Route::get('pass', [Controller::class, 'getpass']);
