<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\DocumentReadWritePermissionAlertMail;
use App\Mail\PubliclySharedDocumentMail;
use App\Models\Backend\DocumentComment;
use App\Models\backend\DocumentPermission;
use App\Models\backend\FileUploadPermission;
use App\Models\backend\PubliclySharedDocument;
use App\Models\backend\UserPermission;
use App\Services\DocumentAuditService;
use Carbon\Carbon;
use Crypt;
use File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\backend\{MainCategory ,SubCategory, DepartmentType, Document, MainFolder, SubFolder};
use Auth;
use Mail;
use Response; 
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpWord\IOFactory as WordIOFactory;
use Spatie\PdfToImage\Pdf;
use Mpdf\Mpdf;


class DocumentController extends Controller{
    protected $documentAuditService;
    public function __construct(DocumentAuditService $documentAuditService){
        $this->documentAuditService = $documentAuditService;
    } 
   

    private function convertToImageOrPdf($filePath, $extension, $outputPath){
        try {
            $convertedFileName = null;
            try {  
            } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
                return 'Error reading Word file: ' . $e->getMessage();
            } 
            return $convertedFileName;
        }catch (\Exception $e){
            return 'General error: ' . $e->getMessage();
        }
    } 
    public function index(){
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 14)->exists();
        if($permission_check){
        $documents = Document::with('getMainFolder:id,name', 'getSubFolder:id,name', 'getDepartmentType:id,name');
        if(Auth::user()->role_type_id != 1){
            $documents = $documents->whereJsonContains('assigned_users', Auth::user()->id)->orWhere('owner_id', Auth::user()->id);
        }
        $documents = $documents->orderBy('id', 'desc')->paginate(10);
        return view('backend.document.index', compact('documents'));
        }else{  
            return response()->view('errors.405', [], 405);
        }
    }
    public function create(){
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 15)->exists();
        if($permission_check){
        // here default department type is not getting this is an issue check latter
        $departments_list = DepartmentType::select('*');
        if(Auth::user()->role_type_id != 1 ){
            $departments_list = $departments_list->whereHas('getAccessibleDepartmentList', callback: function($query){
                $query = $query->where('user_id', Auth::user()->id);
            });
        }
        $departments_list = $departments_list->get();  
        $users = User::where('created_by', Auth::user()->id)->get();   
        return view('backend.document.create', compact('departments_list', 'users'));
        }else{
            return response()->view('errors.405', [], 405);
        }
    }
    public function store(Request $request){ 
        $validate = $request->validate([
            'document_title' => ['max:100'],
            'department' => ['required'],
            'sub_folder' => ['required'],
          'document' => ['required', 'mimes:pdf,png,doc,docx,xls,xlsx,xlsm,pptx,gif,jpg', 'max:512000',]
        ],
        [
            'document.max' => 'The document field must not be greater than 500 MB.',
        ]); 

        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 15)->exists();
        if($permission_check){
        $title = $request->document_title;
        $department_id = $request->department;
        $assigned_users = $request->users;
        if($assigned_users != ''){
            $assigned_users = array_map('intval', $assigned_users);
        }
        $main_folder = MainFolder::where('department_type_id', $department_id)->first();
        $sub_folder_id = $request->sub_folder;
        $sub_folder = SubFolder::where('id', $sub_folder_id)->first();
        $document = Document::create([
            'document_title' => $title,
            'main_folder_id' => $main_folder->id,
            'sub_folder_id' => $sub_folder_id,
            'department_type_id' => $department_id, 
            'assigned_users' => $assigned_users,
            'owner_id' => Auth::user()->id
        ]);
        if($request->hasFile('document')){
            $documentFile = $request->file('document');
            $extension = $documentFile->getClientOriginalExtension();
            $documentName = time() . '.' . $extension; 
              // Define the paths
              $documentPath = public_path('folders/' . $main_folder->name . '/' . $sub_folder->name);
              $documentFilePath = $documentPath . '/' . $documentName; 
              // Move the uploaded file to the desired folder
              $documentFile->move($documentPath, $documentName);
              // $document_name = time().'.'.$request->file('document')->getClientOriginalExtension();
              // $request->file('document')->move(public_path('folders/'.$main_folder->name.'/'.$sub_folder->name), $document_name); 
              // Convert file (to image if needed) 
              $convertedFileName = null;
              if (in_array($extension, ['doc', 'docx', 'xls', 'xlsx', 'xlsm', 'pdf'])) {
                  $convertedFileName = $this->convertToImageOrPdf($documentFilePath, $extension, $documentPath);
              } 
            // Document::where('id', $document->id)->update([
            //    'doc_file'  => $document_name,
            //    'doc_path' => 'public/folders/'.$main_folder->name.'/'.$sub_folder->name
            // ]); 
            Document::where('id', $document->id)->update([
                'doc_file' => $documentName,
                'doc_path' => 'public/folders/' . $main_folder->name . '/' . $sub_folder->name,
                'converted_file' => $convertedFileName
            ]); 
        }
        return redirect()->route('backend.document.index')->with('created', 'Document has been uploaded successfully.');
        }else{
            return response()->view('errors.405', [], 405);
        }
    
    } 
    public function edit($id){
        try{
        $decrypt_id = Crypt::decrypt($id);
        $document = Document::where('id', $decrypt_id)->first();
        $departments_list = DepartmentType::get();

        $users = User::select('*');
        if(Auth::user()->role_type_id != 1){
            $users = $users->where('created_by', Auth::user()->id);
        }
        $users = $users->get();
        $sub_folder_list = SubFolder::where('main_folder_id', $document->main_folder_id)->get();
        // $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 17)->exists();
            if(Auth::user()->role_type_id == 1 || $document->owner_id == Auth::user()->id){
                $document = Document::where('id', $decrypt_id)->first();
                return view('backend.document.edit', compact('document', 'departments_list', 'users', 'sub_folder_list'));
            }else{
            $permission_check = DocumentPermission::where('user_id', Auth::user()->id)
            ->where('write', 1)->where('document_id', $decrypt_id)->exists();
            if($permission_check){  
                return view('backend.document.edit', compact('document', 'departments_list', 'users', 'sub_folder_list'));
                }else{
                    return response()->view('errors.405', [], 405);
                }     
        }
        }catch(\Exception $e){
            abort('404');
        }   
    } 
    public function update(Request $request, $id){ 
        $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 17)->exists();
        if($permission_check){
        $title = $request->document_title;
        $department_id = $request->department;
        $assigned_users = $request->users;
        if($assigned_users != ''){
            $assigned_users = array_map('intval', $assigned_users);
        }
        $main_folder = MainFolder::where('department_type_id', $department_id)->first();
        $sub_folder_id = $request->sub_folder;
        $sub_folder = SubFolder::where('id', $sub_folder_id)->first();
        $document_id = Document::where('id', $id)->update([
            'document_title' => $title,
            'main_folder_id' => $main_folder->id,
            'sub_folder_id' => $sub_folder_id,
            'department_type_id' => $department_id, 
            'assigned_users' => $assigned_users
        ]);
        if($request->hasFile('document')){
                $document_name = time().'.'.$request->file('document')->getClientOriginalExtension();
                $request->file('document')->move(public_path('folders/'.$main_folder->name.'/'.$sub_folder->name), $document_name); 
                Document::where('id', $id)->update([
                   'doc_file'  => $document_name,
                   'doc_path' => 'public/folders/'.$main_folder->name.'/'.$sub_folder->name
                ]);
        }
        $this->documentAuditService->CreateDocumentAudit(
            Auth::user()->id,
            $id,
            $main_folder->id,
            $sub_folder_id,
            "update" 
        );
        return redirect()->back()->with('updated', 'Document has been updated successfully.');
        // return redirect()->route('backend.document.index')->with('updated', 'Document has been updated successfully.');
        }else{
            return response()->view('errors.405', [], 405);
        }
    } 
    public function view($file){
        try{
        $decrypt_file = Crypt::decrypt($file);
        $doc = Document::withTrashed()->where('doc_file', $decrypt_file)->first();
        $file_type = File::extension($decrypt_file);
        // $permission_check = UserPermission::where('user_id', Auth::user()->id)->where('menu_id', 21)->exists();
        if(Auth::user()->role_type_id == 1 || $doc->owner_id == Auth::user()->id){
            $document = Document::withTrashed()->where('doc_file', $decrypt_file)->first(); 
            $this->documentAuditService->CreateDocumentAudit(
                Auth::user()->id,
                $doc->id,
                $doc->main_folder_id,
                $doc->sub_folder_id,
                "view" 
            );
            return view('backend.document.view', compact('document', 'file_type')); 
        }else{
            $permission_check = DocumentPermission::where('user_id', Auth::user()->id)->where('read', 1)->where('document_id', $doc->id)->exists();
            if($permission_check){
                $document = Document::where('doc_file', $decrypt_file);
                if(Auth::user()->role_type_id != 1){
                    $document = $document->whereJsonContains('assigned_users', Auth::user()->id);
                }
                $document = $document->first(); 
                $this->documentAuditService->CreateDocumentAudit(
                    Auth::user()->id,
                    $doc->id,
                    $doc->main_folder_id,
                    $doc->sub_folder_id,
                    "view" 
                ); 
                if($document){
                    return view('backend.document.view', compact('document','file_type'));
                }else{
                 return response()->view('errors.405', [], 405);
                }
             }else{
                 return response()->view('errors.405', [], 405);
             }
        }
        }catch(\Exception $e){  
            abort('404');
        }
        
       
    }
    public function comment($id){
        try{
        $decrypt_id = Crypt::decrypt($id); 
        $document = Document::where('id', $decrypt_id)->first();
        $comments = DocumentComment::with(['getUser:id,name,email',
         'getReplys', 'getReplys.getUser:id,name'])
        ->where('document_id', $decrypt_id)->where('parent_id', NULL)->get();
        // return $comments;    
        return view('backend.document.comment', compact('document', 'comments'));
        }catch(\Exception $e){
                abort('404');
        }
    } 
    public function commentStore(Request $request){
        $comment = $request->comment;
        $doc_id = $request->document_id;
        DocumentComment::create([
            "document_id" => $doc_id,
            "user_id" => Auth::user()->id,
            "comment" => $comment,
            "publish_status" => 1,
            "status" => 1
        ]);

        return redirect()->back(); 
    } 
    public function replyStore(Request $request){
        $reply = $request->reply;
        $doc_id = $request->document_id;
        $parent_id = $request->parent_id;
        DocumentComment::create([
            "document_id" => $doc_id,
            "user_id" => Auth::user()->id,
            "parent_id" => $parent_id,
            "comment" => $reply,
            "publish_status" => 1,
            "status" => 1
        ]);
        return redirect()->back(); 
    } 
    public function directUpload($m_id, $s_id){
        try{
            $decrypt_m_id = Crypt::decrypt($m_id);
            $decrypt_s_id = Crypt::decrypt($s_id);
            if(Auth::user()->role_type_id == 1 || Auth::user()->department_type_id == $decrypt_m_id){
                return view('backend.document.direct_upload', compact('decrypt_m_id', 'decrypt_s_id'));
            }else{
            $check_permission = FileUploadPermission::where('main_folder_id', $decrypt_m_id)->where('sub_folder_id', $decrypt_s_id)->where('user_id', Auth::user()->id)->exists();
            if($check_permission){
                return view('backend.document.direct_upload', compact('decrypt_m_id', 'decrypt_s_id'));
            }else{
                return response()->view('errors.405', [], 405);
            }
        } 
        }catch(\Exception $e){
            abort('404');
        }
    } 
    public function DirectUploadStore(Request $request){
        $validate = $request->validate([
            'document' => ['required', 'mimes:pdf,png,doc,docx,xls,xlsx,xlsm,pptx,gif,jpg', 'max:512000',]
        ],
        [
            'document.max' => 'The document field must not be greater than 500 MB.',
        ]
    );
        $m_id = $request->m_id;
        $s_id = $request->s_id;
        $title = $request->document_title;
        $main_folder = MainFolder::where('id', $m_id)->first();
        $sub_folder = SubFolder::where('id', $s_id)->first();
        $document_id = Document::create([
            'document_title' => $title,
            'main_folder_id' => $m_id,
            'sub_folder_id' => $s_id,
            'department_type_id' => $m_id,
            'owner_id' => Auth::user()->id
        ]);

         if($request->hasFile('document')){
            $document_name = time().'.'.$request->file('document')->getClientOriginalExtension();
            $request->file('document')->move(public_path('folders/'.$main_folder->name.'/'.$sub_folder->name), $document_name); 
            Document::where('id', $document_id->id)->update([
               'doc_file'  => $document_name,
               'doc_path' => 'public/folders/'.$main_folder->name.'/'.$sub_folder->name
            ]);
        }
        return redirect()->route('backend.folders.view_doc_list',[Crypt::encrypt($m_id), Crypt::encrypt($s_id)]);
    } 
    public function DocumentAccess($id){ 
        try{
        $decrypt_id = Crypt::decrypt($id); 
        $document = Document::where('id', $decrypt_id)->first();  
        $users = User::with('getDocumentPermission')->whereIn('role_type_id', [2,3,4,5,6,7])
        ->with('getDocumentPermission', function ($query) use ($decrypt_id){
            $query->where('document_id', $decrypt_id);
        })
        ->orderBy('role_type_id', 'asc')->get();   
        // return $users;
        // getDocumentPermission
        return view('backend.document_permission.assign_document_permission', compact('document', 'users'));
        }catch(\Exception $e){
            abort('404');
        }
    } 
    public function DocumentAccessSync(Request $request, $id){ 
        $allRecords = json_decode($request->input('all_records'), true);
        $w = '';
        $r = '';  
        foreach ($allRecords as $record) { 
            $doc_per = DocumentPermission::where('user_id', $record['user_id'])
            ->where('document_id', $id)->where('access_given_by', Auth::user()->id)
            ->first(); 
            $getUser = User::where('id', $record['user_id'])->first();
            $document = Document::with(['getMainFolder', 'getSubFolder'])->where('id', $id)->first();
            $user = User::where('id', $record['user_id'])->first();
            DocumentPermission::where('user_id', $record['user_id'])
            ->where('document_id', $id)->delete(); 
            if($doc_per != ''){
                if($doc_per->read == 0 && $record['read'] == 0){
                    $r = 0; 
                }else if($doc_per->read == 1 && $record['read'] == 0){
                    $r = 1; 
                }else if($doc_per->read == 0 && $record['read'] == 1){
                    $r = 1; 
                }else if($doc_per->read == 1 && $record['read'] == 1){
                    $r = 0; 
                } 
                if($doc_per->write == 0 && $record['write'] == 0){
                    $w = 0; 
                }else if($doc_per->write == 1 && $record['write'] == 0){
                    $w = 1; 
                }else if($doc_per->write == 0 && $record['write'] == 1){
                    $w = 1; 
                }else if($doc_per->write == 1 && $record['write'] == 1){
                    $w = 0; 
                }     
            }else{
                if($record['read'] == 0){ 
                    $r = 0; 
                }else if($record['read'] == 1){ 
                    $r = 1; 
                }
                if($record['write'] == 0){ 
                    $w = 0; 
                }else if($record['write'] == 1){ 
                    $w = 1; 
                }  
            }
            if($r == 1 || $w == 1){ 
                $doc_r_w_permission_mail_data = [
                    'read' => $record['read'],
                    'write' => $record['write'],
                    'user_name' => $getUser->first_name.' '.$getUser->last_name,
                    'doc_title' => $document->document_title,
                    'document_path' => $document->doc_path,
                    'doc_file' => $document->doc_file,
                    'main_folder' => $document->getMainFolder?->name,
                    'sub_folder' => $document->getSubFolder?->name
                ];
                Mail::to($getUser->email)->send(new DocumentReadWritePermissionAlertMail($doc_r_w_permission_mail_data));
            } 
            DocumentPermission::create([
                'document_id' => $id, 
                'user_id' => $record['user_id'],
                'read' => $record['read'],
                'write' => $record['write'],
                'access_given_by' => Auth::user()->id
            ]);
        } 
        return redirect()->back()->with('document_access_synced', 'Document access has been assigned successfully.'); 
    } 
    
    public function PubliclySharedDocument($id){
        try{
        $decrypt_id = Crypt::decrypt($id)  ;
        return view('backend.document.publicly_shared_document', compact('decrypt_id'));
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function PubliclySharedDocumentSend(Request $request){
        $emails = explode(',', $request->email);
        $doc_id = $request->doc_id;
        $date = $request->date;
        $document = Document::where('id', $doc_id)->first();
        $shared_row = PubliclySharedDocument::create([
            'doc_file' => $document->doc_file, 
            'shared_url' => $document->doc_path,
            'link_valid_until' => $date
        ]);

        $shared_document_url = [
            'shared_url' => route('frontend.publicly_shared_document_view', [$document->doc_file, $shared_row->id]),
            'doc_file' => $document->doc_file,
            'doc_path' => $document->doc_path,
            'row_id' => $shared_row->id,
            'valid_until' => $shared_row->link_valid_until
        ];
        foreach($emails as $email){
            $shared_document_url['user_email'] = $email;
            Mail::to($email)->send(new PubliclySharedDocumentMail(shared_document_url: $shared_document_url));
        }
        return redirect()->back();
        //return route('frontend.publicly_shared_document_view', $document->doc_file);
    }

    public function PubliclySharedDocumentView($file, $row_id){ 
        try{ 
            $file_type = '';
            $decrypt_file = Crypt::decrypt($file);
            $decrypt_row_id = Crypt::decrypt($row_id);
            $current_date = Carbon::now()->format('Y-m-d');
            $file_url = route('frontend.publicly_shared_document_view', [$file, $row_id]); 
            // $document = Document::where('doc_file', $file)->first();
            $document = PubliclySharedDocument::where('doc_file', $decrypt_file)->where('id', $decrypt_row_id)->first(); 
        if($document){
            $file_type = File::extension($document->doc_file);
            if($document->link_valid_until != NULL){
            $link_valid_until = Carbon::parse($document->link_valid_until)->format('Y-m-d'); 
            if($link_valid_until >= $current_date){
                return view('backend.document.publicly_shared_document_view', compact('document', 'file_type'));
            }else{
                return response()->view('errors.410', [], 410);
            }
            }else{
                return view('backend.document.publicly_shared_document_view', compact('document', 'file_type')); 
            } 
        }else{
            return response()->view('errors.404', [], 404);
        }

    }catch(\Exception $e){
        abort('404');
    } 
    } 
    public function delete(Request $request){
        try{
        $decrypt_id = Crypt::decrypt($request->id);
        $document = Document::find($decrypt_id);
        if($document->owner_id == Auth::user()->id || Auth::user()->role_type_id == 1){
        $document->delete();
        $this->documentAuditService->CreateDocumentAudit(
            Auth::user()->id,
            $decrypt_id,
            $document->main_folder_id,
            $document->sub_folder_id,
            "delete" 
        );
        return response()->json([
            "status" => "deleted"
        ]);
        // return redirect()->back();
        }else{
            return response()->json([
                "status" => "permission_denied"
            ]);
            // return response()->view('errors.405', [], 405);
        }
        }catch(\Exception $e){
            return response()->json([
                "status" => "something_went_wrong"
            ]);
            // abort('404');
        }

    } 
    public function uploadNewFile($id){
        try{
            $document_id = Crypt::decrypt($id);
        }catch(\Exception $e){
            abort('404');
        }
        return view('backend.document.upload_new_file', compact('document_id'));
    } 
    public function uploadNewFileStore(Request $request, $id){
        $validate = $request->validate([
            'document' => ['required', 'mimes:pdf,png,doc,docx,xls,xlsx,xlsm,pptx,gif,jpg', 'max:512000',]
        ],
        [
            'document.max' => 'The document field must not be greater than 500 MB.',
        ]);
        $decrypt_id = Crypt::decrypt($id); 
        $document = Document::where('id', $decrypt_id)->first();
        if($request->hasFile('document')){
            $document_name = time().'.'.$request->file('document')->getClientOriginalExtension();
            $request->file('document')->move($document->doc_path, $document_name); 
            Document::where('id', $decrypt_id)->update([
               'doc_file'  => $document_name,
            ]);
        }
        $this->documentAuditService->CreateDocumentAudit(
            Auth::user()->id,
            $decrypt_id,
            $document->main_folder_id,
            $document->sub_folder_id,
            "file replace" 
        );
        return redirect()->back();

    } 
    public function download($id){ 
        try{
        $decrypt_id = Crypt::decrypt($id);
         $document = Document::withTrashed()->findOrFail($decrypt_id);  
         $filePath = $document->doc_path . '/' . $document->doc_file;
         if (!file_exists($filePath)) {
             return abort(404); 
         } 
         $this->documentAuditService->CreateDocumentAudit(
            Auth::user()->id,
            $decrypt_id,
            $document->main_folder_id,
            $document->sub_folder_id,
            "download" 
        );
         return Response::download($filePath);  
        }catch(\Exception $e){
            abort('404');
        }
    } 
    public function archivedDocuments(){
        if(Auth::user()->role_type_id == 1){
            $documents = Document::onlyTrashed()->with('getMainFolder:id,name', 'getSubFolder:id,name', 'getDepartmentType:id,name');
            if(Auth::user()->role_type_id != 1){
                $documents = $documents->whereJsonContains('assigned_users', Auth::user()->id)->orWhere('owner_id', Auth::user()->id);
            }
            $documents = $documents->orderBy('id', 'desc')->paginate(10);  
            return view('backend.archived_document.index', compact('documents'));
        }else{
            abort('404');
        }   
    }
    
    public function restore($id){
        try{
            $decrypt_id = Crypt::decrypt($id); 
            $document = Document::onlyTrashed()->findOrFail($decrypt_id); 
            $document->restore();
            $this->documentAuditService->CreateDocumentAudit(
                Auth::user()->id,
                $decrypt_id,
                $document->main_folder_id,
                $document->sub_folder_id,
                "restore" 
            ); 
            return redirect()->back()->with('success', 'Document restored successfully.');
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function PermanentDelete($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            $document = Document::onlyTrashed()->findOrFail($decrypt_id); 
            $document->forceDelete(); 
            return redirect()->back()->with('success', 'Document permanently deleted successfully.');
        }catch(\Exception $e){
            abort('404');
        }
    }
}
