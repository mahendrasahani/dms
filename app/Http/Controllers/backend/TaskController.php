<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\TaskAssignMail;
use App\Models\backend\Document;
use App\Models\backend\DocumentComment;
use App\Models\backend\Notification;
use App\Models\backend\Task;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Crypt;
use Illuminate\Http\Request;
use Mail;
use Session;

class TaskController extends Controller
{ 
    public function UpdateNotification($user_id, $title, $notification, $notification_for, $task_id,
        $document_id, $read_status, $url, $icon=""){
            Notification::create([
                "user_id" => $user_id,
                "title" =>  $title,
                "notification" => $notification,
                "notification_for" => $notification_for,
                "task_id" => $task_id,
                "document_id" => $document_id,
                "url" => $url,
                "icon" => $icon,
                "read_status" => $read_status,
                "status" => 1,
            ]);
            return true;
    }

    public function index(){
        $tasks = Task::with(['getDocument', 'getAssignedTo', 'getAssignedBy', 'getAssignedTo']);
        if(Auth::user()->role_type_id != 1){
        if(isset($_GET['task_type']) && $_GET['task_type'] == 1){
                $tasks = $tasks->where('assigned_to', Auth::user()->id);
            }else if(isset($_GET['task_type']) && $_GET['task_type'] == 2){
                $tasks = $tasks->where('assigned_by', Auth::user()->id);
            }else{
                $tasks = $tasks->where('assigned_to', Auth::user()->id)
                ->orWhere('assigned_by', Auth::user()->id);
            }
        }
        $tasks = $tasks->get();  
        return view('backend.task.index', compact('tasks'));
    }

    public function create($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            $document = Document::where('id', $decrypt_id)->first(); 
        $users = User::select('*');
        if(Auth::user()->role_type_id != 1){
            if(Auth::user()->role_type_id == 2){
                $user = $users->whereHas('getUserHierarchie', function($query){
                    $query = $query->where('head_department_id', Auth::user()->id);
                });
            }else if(Auth::user()->role_type_id == 3){
                $user = $users->whereHas('getUserHierarchie', function($query){
                    $query = $query->where('hotel_id', Auth::user()->id);
                });
            }else if(Auth::user()->role_type_id == 4){
                $user = $users->whereHas('getUserHierarchie', function($query){
                    $query = $query->where('hoted_department_id', Auth::user()->id);
                });
            }else if(Auth::user()->role_type_id == 5){
                $user = $users->whereHas('getUserHierarchie', function($query){
                    $query = $query->where('manager_id', Auth::user()->id);
                });
            }else if(Auth::user()->role_type_id == 6){
                $user = $users->whereHas('getUserHierarchie', function($query){
                    $query = $query->where('team_leader_id', Auth::user()->id);
                });
            } 
        }  
        $users = $users->get();  
        return view('backend.task.create', compact('users', 'document'));
            }catch(\Exception $e){
                abort('404');
            }
    }
    public function store(Request $request){
        $validate = $request->validate([
            "user" => ["required"],
            "start_date" => ["required"],
            "end_date" => ["required"]
        ]);
        $current_date = Carbon::now();
        $user = User::where('id', $request->user)->first();
        $document = Document::where('id', $request->document_id)->first();
        $task = Task::create([
            "document_id" => $document->id,
            "assign_date" => $current_date,
            "doc_uploaded_by" => $document->owner_id,
            "assigned_by" => Auth::user()->id,
            "assigned_to" => $user->id,
            "main_folder_id" => $document->main_folder_id,
            "sub_folder_id" => $document->sub_folder_id,
            "document_name" => $document->doc_file,
            "ducument_url" => $document->doc_path,
            "start_date" => $request->start_date, 
            "end_date" => $request->end_date, 
            "current_status" => 'pending',
        ]);
        $this->UpdateNotification(Auth::user()->id, "New Task Assigned", 
                "New Task Assigned", $user->id, 
                $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task->id)]), '<i class="fa fa-tasks" aria-hidden="true"></i>');  

        $task_assign_data = [
            "assign_by" => Auth::user()->name,
            "document_title" => $document->document_title ?? "No Title",
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "task_url" => route('admin.task.view', [Crypt::encrypt($task->id)])
        ]; 
        Mail::to($user->email)->send(new TaskAssignMail($task_assign_data));
        Session::flash('success', 'Task has been assigned successfully!');
        return redirect()->back();
    }

    public function edit($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            $task = Task::with(['getDocument', 'getAssignedTo', 'getAssignedBy', 'getAssignedTo'])->where('id', $decrypt_id)->first(); 
            return view('backend.task.edit', compact('task'));
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function update(Request $request){
        $validate = $request->validate([
            "task_id" => ["required"],
            "current_status" => ["required"]
        ]);
        Task::where('id', $request->task_id)->update([
            "current_status" => $request->current_status
        ]); 
        return redirect()->route('admin.task.index')->with("updated", "Task has been updated.");
    }

    public function viewDoc($id){
        try{
            $decrypt_id = Crypt::decrypt($id);
            $task = Document::where('id', $decrypt_id)->first();
            return view('backend.task.viewDoc', compact('task'));
        }catch(\Exception $e){
            abort('404');
        }
    }

    public function view($id){ 
        try{

            $decrypt_id = Crypt::decrypt($id);
            $task = Task::with(['getDocument', 'getAssignedTo', 'getAssignedBy', 'getAssignedTo'])->where('id', $decrypt_id)->first(); 
            $comments = DocumentComment::with(['getUser:id,name,email',
            'getReplys', 'getReplys.getUser:id,name,email'])
            ->where('task_id', $decrypt_id)->where('parent_id', NULL)->get();
            return view('backend.task.view', compact('task', 'comments'));
            }catch(\Exception $e){
                abort('404');
            }
    }

    public function TaskComment(Request $request){
        $validate = $request->validate([
            "comment" => ["required"]
        ]);
        $comment = $request->comment;
        $task_id = $request->task_id;
        $document_id = $request->document_id;
        DocumentComment::create([
            "task_id" => $task_id,
            "document_id" => $document_id,
            "user_id" => Auth::user()->id,
            "comment" => $comment,
            "publish_status" => 1,
            "status" => 1
        ]);  
        $task = Task::where('id', $task_id)->first();
        if(Auth::user()->id == $task->assigned_by){ 
            $this->UpdateNotification(Auth::user()->id, "New Comment", 
            Auth::user()->name ." Commented", $task->assigned_to, 
            $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-comment" aria-hidden="true"></i>');
        }else{
            $this->UpdateNotification(Auth::user()->id, "New Comment", 
            Auth::user()->name ." Commented", $task->assigned_by, 
            $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-comment" aria-hidden="true"></i>'); 
        } 
        return redirect()->back();  
    }

    public function ReplyOnComment(Request $request){
        $validate = $request->validate([
            "reply" => ["required"]
        ]); 
        $reply = $request->reply;
        $doc_id = $request->document_id;
        $task_id = $request->task_id;
        $parent_id = $request->parent_id; 
       $reply =  DocumentComment::create([
            "task_id" => $task_id,
            "document_id" => $doc_id,
            "user_id" => Auth::user()->id,
            "parent_id" => $parent_id,
            "comment" => $reply,
            "publish_status" => 1,
            "status" => 1
        ]);
        $comment = DocumentComment::where('id', $reply->parent_id)->first();
        $task = Task::where('id', $task_id)->first();
        if(Auth::user()->id == $task->assigned_by){
            if($comment->user_id == Auth::user()->id){
                $this->UpdateNotification(Auth::user()->id, "New Reply", 
                Auth::user()->name ." Reply on His Comment", $task->assigned_to, 
                $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-reply" aria-hidden="true"></i>'); 
            }else{
                $this->UpdateNotification(Auth::user()->id, "New Reply", 
                Auth::user()->name ." Reply on Your Comment", $task->assigned_to, 
                $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-reply" aria-hidden="true"></i>'); 
            }
        }else{
            if($comment->user_id == Auth::user()->id){
                $this->UpdateNotification(Auth::user()->id, "New Reply", 
                Auth::user()->name ." Reply on His Comment", $task->assigned_by, 
                $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-reply" aria-hidden="true"></i>'); 
            }else{
                $this->UpdateNotification(Auth::user()->id, "New Reply", 
                Auth::user()->name ." Reply on Your Comment", $task->assigned_by, 
                $task->id, $task->document_id, 0, route('admin.task.view', [Crypt::encrypt($task_id)]), '<i class="fa fa-reply" aria-hidden="true"></i>'); 
            }
        }
        return redirect()->back(); 
    }
 
}