<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\DocumentAudit;
use Auth;
use Illuminate\Http\Request;

class DocumentAuditController extends Controller
{
    public function index(){
        if(Auth::user()->role_type_id == 1){
            $document_audits = DocumentAudit::with(['getUser', 'getDocument', 
            'getMainFolder', 'getSubFolder'])
            ->orderBy('id', 'desc')->paginate(10);
            return view('backend.document_audit.index', compact('document_audits'));
        }else{
            abort('404');
        }
    }
}
