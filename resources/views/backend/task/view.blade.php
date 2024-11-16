@extends('layouts/backend/main')
@section('main-section')


<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #ffffff;
    
    } 
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color:#0bb2fb;
        border: 1px solid #0bb2fb;
    } 
    .js-example-basic-multiple {
        width: 100%; 
        box-sizing: border-box; 
    } 
    .js-example-basic-multiple option {
        white-space: nowrap; 
    } 
</style>
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">View Task</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="border-bottom title-part-padding">
                    <h4><a href="{{route('admin.task.view_doc', [Crypt::encrypt($task->id)])}}">{{$task->getDocument?->document_title ?? 'No Title'}}</a></h4>
                    </div>
                        <div class="card-body">
                                 <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <lable>Assigned To</lable>
                                    <input type="text" value="{{$task->getAssignedTo?->name}}" class="form-control"  style="width: 100%; height: 36px" disabled>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Assigned By</lable>
                                    <input type="text" value="{{$task->getAssignedBy?->name}}" class="form-control"  style="width: 100%; height: 36px" disabled>
                                    </div>
                                    </div> 

                                    <div class="row"> 
                                    <div class="col-md-6 mt-3">
                                    <lable>Start Date</lable>
                                        <input type="text" class="form-control" disabled value="{{Carbon\Carbon::parse($task->start_date)->format('d M, Y')}}"/>
                                    </div>  
                                    <div class="col-md-6 mt-3">
                                    <lable>End Date</lable>
                                        <input type="text" class="form-control" disabled value="{{Carbon\Carbon::parse($task->end_date)->format('d M, Y')}}"/>
                                    </div>  
                                </div>
                                <div class="row"> 
                                <div class="mb-3 col-md-6">
                                    <lable>Current Status</lable> 
                                    <input type="text" class="form-control" disabled value="{{strtoupper($task->current_status)}}"/>
                                </div>  
                                <div class="mb-3 col-md-6">
                                    <br>
                                    <lable>Description</lable> 
                                   <p>{{$task->description ?? ''}}</p>
                                </div> 
                                </div> 

                <div class="row">
                <div class="col-lg-12 col-md-12 col-12 mx-auto">
                    <div class="card"> 
                        <div class="card-body">
                            <h5 class="card-title mb-3">Add a Comment</h5>
                            <form id="addCommentForm" method="POST" action="{{route('admin.task.comment')}}">
                            @csrf
                            <input type="hidden" value="{{$task->id}}" name="task_id">
                            <input type="hidden" value="{{$task->document_id}}" name="document_id"> 
                            <div class="mb-3">
                                    <label for="commentText" class="form-label">Comment</label>
                                    <textarea class="form-control" id="commentText" name="comment" rows="3" placeholder="Your comment" required></textarea>
                                    @error('comment')
                                        <p Style="color:red;">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">All Comments</h5>
                            <ul class="list-group" id="commentsList">
                                @foreach($comments as $comment)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>{{$comment->getUser->name}}</strong>
                                            <small class="text-muted">{{$comment->getUser->email}} {{Carbon\Carbon::parse($comment->created_at)->format('d M, Y')}}</small>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                        <div>
                                            <!-- <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> -->
                                            <button class="btn btn-primary btn-sm ms-2 reply-button">Reply</button>
                                        </div>
                                    </div>
                                    <div class="mt-3 reply-form" style="display: none;">
                                        <h6>Reply to {{$comment->getUser->name}}</h6>
                                        <form method="POST" action="{{route('admin.task.comment.reply')}}">
                                            @csrf
                                            <input type="hidden" name="parent_id" value="{{$comment->id}}">
                                            <input type="hidden" value="{{$task->id}}" name="task_id">
                                            <input type="hidden" value="{{$task->document_id}}" name="document_id"> 
                                            <div class="mb-3">
                                                <textarea class="form-control" rows="2" placeholder="Your reply" name="reply" required></textarea>
                                                @error('reply')
                                                <p style="color:red;">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                                        </form>
                                    </div>
                                    <div class="mt-3 replies" style="display: none;">
                                        <h6>Replies</h6>
                                        <ul class="list-group">
                                            @if(count($comment->getReplys) > 0) 
                                            @foreach($comment->getReplys as $reply) 
                                            <li class="list-group-item">
                                            {{$reply->getUser->name}} {{$reply->getUser->email}} {{Carbon\Carbon::parse($reply->created_at)->format('d M, Y')}}
                                            <br>
                                            {{$reply->comment}}</li> 
                                            @endforeach
                                            @else
                                            <li class="list-group-item">No Replies</li> 
                                            @endif
                                        </ul>
                                    </div>
                                    <button class="btn btn-secondary btn-sm mt-2 show-replies-button">Show Replies</button>
                                </li>
                                @endforeach
                                 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@section('javascript-section')
    <script>
        $("#department").select2({
            placeholder: "Select Department",
        });  
    </script>
     
     <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle reply form
                document.querySelectorAll('.reply-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const replyForm = this.closest('li').querySelector('.reply-form');
                        replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
                    });
                });

                // Toggle replies
                document.querySelectorAll('.show-replies-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const replies = this.closest('li').querySelector('.replies');
                        replies.style.display = replies.style.display === 'none' ? 'block' : 'none';
                        this.textContent = replies.style.display === 'none' ? 'Show Replies' : 'Hide Replies';
                    });
                });
            });
        </script>


@endsection
@endsection
