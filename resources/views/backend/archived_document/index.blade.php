@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="" class="link">Archived Document</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">{{$main_folder->name ?? ''}}</li> -->
                </ol>
            </nav>
                <h1 class="mb-0 fw-bold">Archived Document</h1>
            </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4>Archived Document</h4> 
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Title</th>    
                                        <th>Department</th>
                                        <th>Main Folder</th>
                                        <th>Sub Folder</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($documents as $document)
                                    <tr>
                                         <td><a href="{{route('backend.document.view', [Crypt::encrypt($document->doc_file)])}}">{{$document->document_title ?? 'No Title'}}</a></td> 
                                        <td>{{$document->getDepartmentType->name ?? ''}}</td> 
                                        <td>{{$document->getMainFolder->name ?? ''}}</td> 
                                        <td>{{$document->getSubFolder->name ?? ''}}</td> 
                                        <td>
                                            <div class="dropdown dropstart"> 
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                     <!-- <li><a class="dropdown-item" href="{{route('backend.document.view', [Crypt::encrypt($document->doc_file)])}}">View</a></li>  -->
                                                     <li><a class="dropdown-item" href="{{route('backend.document.restore', [Crypt::encrypt($document->id)])}}">Restore</a></li> 
                                                     <li><a class="dropdown-item" href="{{route('backend.document.permanent_delete', [Crypt::encrypt($document->id)])}}">Delete Permanent</a></li> 
                                                    <li><a class="dropdown-item" href="{{route('backend.document.download', [Crypt::encrypt($document->id)])}}">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{$documents->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('javascript-section')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-link').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default link behavior

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with the deletion
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    // Add your deletion logic here
                    // For example, you can submit a form or make an AJAX request to delete the item
                }
            });
        });
    });
</script>


@if(Session::has('success'))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{Session::get('success')}}",
            icon: "success"
        });
    </script>
@endif
@endsection

@endsection
