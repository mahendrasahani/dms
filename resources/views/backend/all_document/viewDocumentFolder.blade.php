@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Folders</h1>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">

                    <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code5-1-modal">
                        <i class="ri-add-line me-1"></i>
                        Add Folder
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($departments as $department)
                    <div class="col-lg-3">
                        <div class="card-group">
                            <div class="card">

                                <div class="card-body">
                                    <span
                                        class=" btn btn-xl btn-light-info text-info btn-circle d-flex align-items-center justify-content-center ">
                                        <a href="{{ route('backend.document.folderView', ['id' => $department->id]) }}">
                                            <i class="fa-regular fa-folder"></i>
                                        </a>
                                    </span>
                                    <h3 class="mt-3 pt-1 mb-0">
                                        {{count($department->folders) > 0 ? count($department->folders) : null}}
                                    </h3>
                                    <h6 class="text-muted mb-0 fw-bold">{{ $department->name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       @include('backend.all_document.model.add_subfolder')
    @endsection


@section('javascript-section')
<script>
    $(document).ready(function() {
        $('.select2 js-programmatic').select2();
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
@endif



@endsection
