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
                  <li class="breadcrumb-item" aria-current="page"><a href="{{route('backend.folders.index', [$main_folde_id])}}" class="link">{{$main_folder}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$sub_folder}}</li>
                </ol>
              </nav>
                <h1 class="mb-0 fw-bold">{{$main_folder}} > {{$sub_folder}}</h1>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                 <a href="{{route('backend.document.direct_upload', [$main_folde_id, $sub_folder_id])}}">
                <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-1-modal">
                    <i class="ri-add-line me-1"></i>
                    Upload New
                </button>
            </a>
            </div>  
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4>All Document</h4> 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Title</th>    
                                        <th>File Type</th>    
                                        <th>Department</th>
                                        <th>Main Folder</th>
                                        <th>Sub Folder</th>
                                        <th>Created at</th>
                                        <!-- <th>Start Time</th>
                                        <th>End Time</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($documents as $document)
                                       
                                        <tr>
                                            <td><a href="{{route('backend.document.view', [Crypt::encrypt($document->doc_file)])}}">{{$document->document_title ?? 'No Title'}}</a></td> 
                                            <td>{{ strtoupper(pathinfo($document->doc_file, PATHINFO_EXTENSION)) }}</td> 
                                            <td>{{$document->getDepartmentType->name ?? ''}}</td>
                                            <td>{{$document->getMainFolder->name ?? ''}}</td>
                                            <td>{{$document->getSubFolder->name ?? ''}}</td>
                                            <td>{{Carbon\Carbon::parse($document->created_at)->format('d-m-Y')}}</td> 
                                            <td>
                                                <div class="dropown dropstart d-flex justify-content-around" style="cursor: pointer;">
                                                            <span>
                                                                <a href="{{route('backend.document.view', [Crypt::encrypt($document->doc_file)])}}">
                                                                    <i class="far fa-eye" class="feather-sm"></i>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="{{route('backend.document.edit', [Crypt::encrypt($document->id)])}}">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                            </span>
                                                            <!-- <span>
                                                                <a href="{{route('backend.document.comment', [Crypt::encrypt($document->id)])}}">
                                                                    <i class="far fa-comment"></i>
                                                                </a>
                                                            </span> -->
                                                            <span>
                                                                <a href="{{route('backend.document.document_access', [Crypt::encrypt($document->id)])}}">
                                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                                </a>
                                                            </span>

                                                            <span>
                                                                <a href="{{route('backend.create_publicly_shared_url', [Crypt::encrypt($document->id)])}}">
                                                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                                </a>
                                                            </span> 
                                                            <span>
                                                                <a href="{{route('backend.document.upload_new_file', [Crypt::encrypt($document->id)])}}">
                                                                <i class="fa fa-upload" aria-hidden="true"></i>
                                                                </a>
                                                            </span>
                                                            <!-- <span>
                                                                <a href="">
                                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                                </a>
                                                            </span> -->
                                                            <span>
                                                                <a href="{{route('admin.task.create', [Crypt::encrypt($document->id)])}}">
                                                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                </a>
                                                            </span>
                                                            <span>
                                                                <a href="{{route('backend.document.delete', [Crypt::encrypt($document->id)])}}">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                            </span>
                                                           

                                                    <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">    
                                                        <li><a class="dropdown-item" href="">View</a></li>
                                                        <li><a class="dropdown-item" href="">Comment</a></li>
                                                        <li><a class="dropdown-item" href="#">Download</a></li>
                                                    </ul> -->
                                                </div>
                                            </td>
                                        </tr>  
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
