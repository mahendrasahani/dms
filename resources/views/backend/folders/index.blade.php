<style>
    .ro_ss{
       display: flex;
       flex-wrap: wrap;
     
    }
    .w_20{
        width: 18%;
        margin: .5rem 0;
    }
    .card{
        border: none !important;
    }
    .btn-info{
        background-color: #253a76 !important;
        border-color: #253a76 !important;
    }
    .selected .active{ 
    } 
</style>
@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('backend.folders.main_folder_list')}}" class="link">All Department</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$main_folder->name ?? ''}}</li>
                    </ol>
                </nav>
                    <h1 class="mb-0 fw-bold">{{$main_folder->name ?? ''}}</h1>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                    <button class="btn btn-info1 d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code5-1-modal"><i class="ri-add-line me-1"></i>Create Folder</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="ro_ss w-100"> 
                @if(count($sub_folder_list) == 0)
                <h2>Empty</h2>
                @endif 
                            @foreach ($sub_folder_list as $sub_folder)
                                 <div class="w_20 g-2">
                                        <div class="card-group my-1" id="folder_div">
                                            <div class="card">
                                                <div class="d-flex justify-content-center">
                                                    <!-- Folder Icon and Text -->
                                                    <div class="d-flex align-items-center flex-column gap-3" >
                                                        <span class=" btn-xl text-info btn-circle d-flex align-items-center our-folder">
                                                            <span>
                                                            <a href="{{ route('backend.folders.view_doc_list', [Crypt::encrypt($main_folder->id), Crypt::encrypt($sub_folder->id)]) }}">
                                                                <i class="fa fa-folder" style="color:#ffd60a !important; font-size: 5rem;"></i>
                                                            </a>
                                                           </span>
                                                        <div class="dropdown" style="margin-left: 10px; margin-top: -20px; ">
                                                            <a class=" btn-link" type="button" id="threeDotsMenu" data-bs-toggle="dropdown" aria-expanded="false"
                                                                style="font-size: 16px;">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                            </a> 
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="threeDotsMenu">
                                                                <li><a class="dropdown-item"
                                                                        href="{{route('backend_folder_permission.assign.direct', [Crypt::encrypt($main_folder->id), Crypt::encrypt($sub_folder->id)])}}">Permissions</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{route('backend.document.direct_upload', [Crypt::encrypt($main_folder->id), Crypt::encrypt($sub_folder->id)])}}">Upload
                                                                        File</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{route('backend.folders.delete_sub_folder', [Crypt::encrypt($main_folder->id), Crypt::encrypt($sub_folder->id)])}}">Delete
                                                                        Folder</a></li>
                                                            </ul> 
                                                        </div> 
                                                        </span> 

                                                        <a href="{{ route('backend.folders.view_doc_list', [Crypt::encrypt($main_folder->id), Crypt::encrypt($sub_folder->id)]) }}">
                                                            <h6 class="text-muted mb-0 fw-bold">{{ $sub_folder->name }}  ({{count($sub_folder->getDocument)}})</h6>
                                                        </a> 
                                                    </div> 
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                            @endforeach 
            </div>
        </div>
        <div class="card w-100">
    <div class="d-flex border-bottom title-part-padding align-items-center">
        <div class="ms-auto flex-shrink-0">
            <div id="view-code5-1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-bottom">
                            <h4 class="card-title">Create Folder</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body"> 
                                        <form method="POST" action="{{ route('backend.folders.store', [Crypt::encrypt($main_folder?->id)]) }}">
                                            @csrf    
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Folder Name" required name="folder_name" maxlength="30" />
                                                <label><i data-feather="folder" class="sun"></i>&nbsp;Folder Name</label>
                                            </div> 
                                            <div class="d-md-flex align-items-center my-2">
                                                <div class="mt-3 mt-md-0 ms-auto">
                                                    <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="send" class="feather-sm fill-white me-2"></i>
                                                            Create
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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
@endsection


@section('javascript-section')
<script>
    $(document).ready(function() {
        $('.select2 js-programmatic').select2(); 
        // $('#folder_div').on('contextmenu', function(event){
        //     event.preventDefault();
        //     alert('Right-click detected on the div!');
        // }); 
            // function FolderRightClick(event){
            //     // event.preventDefault();
            //     alert('Right-click detected on the div!');
            // }

    }); 
</script>
@if (Session::has('success'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            timer: 5000,
        });
    </script>
@elseif(Session::has('update'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ Session::get('update') }}",
            icon: "success",
            timer: 5000,
        });
    </script>
@elseif(Session::has('warning'))
    <script>
        Swal.fire({
            title: "Warning!",
            text: "{{ Session::get('warning') }}",
            icon: "warning",
            timer: 5000,
        });
    </script>
    @elseif(Session::has('error'))
    <script>
        Swal.fire({
            title: "Error!",
            text: "{{ Session::get('error') }}",
            icon: "error",
            timer: 5000,
        });
        
    </script>
     @elseif(Session::has('deleted'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ Session::get('deleted') }}",
            icon: "success",
            timer: 5000,
        }); 
    </script>
    @elseif(Session::has('in_used'))
    <script>
        Swal.fire({
            title: "Warning!",
            text: "{{ Session::get('in_used') }}",
            icon: "warning",
            timer: 5000,
        });
    </script>
@endif



@endsection
