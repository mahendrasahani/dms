@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item">
                    <a href="index.html" class="link"
                      ><i class="ri-home-3-line fs-5"></i
                    ></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Task
                  </li>
                </ol>
              </nav>
                <h1 class="mb-0 fw-bold">Task</h1>
            </div> 
            <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                 <a href="{{route('admin.task.create_new_task')}}">
                <button class="btn btn-info d-flex align-items-center ms-2">
                    <i class="ri-add-line me-1"></i>
                    New Task
                </button>
            </a>
            </div>
        </div>


    </div>
    <div class="container-fluid"> 
        <div class="row"> 
            @if(Auth::user()->role_type_id != 1)
            <form method="GET" action="{{route('admin.task.index')}}" class="d-flex">
            <div class="col-md-6">
            <select name="task_type" required class="js-programmatic form-control"  style="width: 100%; height: 36px">
                    <option value=" ">All</option>  
                    <option value="1" {{isset($_GET['task_type']) && $_GET['task_type'] == 1 ? 'selected':''}}>Assigned To Me</option>  
                    <option value="2" {{isset($_GET['task_type']) && $_GET['task_type'] == 2 ? 'selected':''}}>Assigned By Me</option>  
                    </select>
            </div>
            <div class="col-md-6">
                <input class="btn btn-primary" type="submit" value="Apply">
            </div>
            </form>
            @endif
            @if(count($tasks) > 0)
            <div class="col-12">
            
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4>All Task</h4>
                    </div> 
                    <div class="card-body"> 
                        <div class="table-responsive"> 
                            <table id="" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Title</th>    
                                        <th>Type</th>    
                                        <th>Assign Date</th>
                                        <th>Start Date</th>
                                        <th>End Date</th> 
                                         <th>Status</th>
                                        <th>Assign By</th> 
                                        <th>Assign To</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($tasks) > 0) 
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td><a href="{{route('admin.task.view_doc', [Crypt::encrypt($task->id)])}}">{{$task->getDocument?->document_title ?? 'No Title'}}</a></td> 
                                            <td>{{ strtoupper(pathinfo($task->document_name, PATHINFO_EXTENSION)) }}</td>
                                            <td>{{Carbon\Carbon::parse($task->assign_date)->format('d M, Y h:i A')}}</td>
                                            <td>
                                            @if($task->start_date != NULL)
                                            {{Carbon\Carbon::parse($task->start_date)->format('d M, Y')}}
                                            @else
                                            -
                                            @endif
                                        </td>
                                            <td>
                                            @if($task->end_date != NULL)
                                            {{Carbon\Carbon::parse($task->end_date)->format('d M, Y')}}
                                            @else
                                            -
                                            @endif
                                            </td> 
                                            <td>{{strtoupper($task->current_status)}}</td>
                                            <td>{{$task->getAssignedBy?->name}}</td>
                                            <td>{{$task->getAssignedTo?->name}}</td>
                                            <td>
                                                <div class="dropown dropstart d-flex justify-content-around" style="cursor: pointer;">
                                                    <span><a href="{{route('admin.task.view', [Crypt::encrypt($task->id)])}}"><i class="far fa-eye" class="feather-sm"></i></a></span>
                                                    <span><a href="{{route('admin.task.edit', [Crypt::encrypt($task->id)])}}"><i class="fas fa-pencil-alt"></i></a></span>      
                                                    <!-- <span><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></span> -->
                                                </div>
                                            </td>
                                        </tr>  
                                        @endforeach
                                        @endif
                                </tbody>
                            </table>
                            {{$tasks->links('pagination::bootstrap-5')}} 
                        </div>
                    </div>
                </div>
            </div>
            @else
            <h3>No Task Available</h3>
            @endif
        </div>
         
    </div>
</div>

<script>
        @if(Session::has('updated'))
            Swal.fire({
                title: "Success!",
                text: "{{Session::get('updated')}}",
                icon: "success"
            });
        @endif
    </script>

@endsection
