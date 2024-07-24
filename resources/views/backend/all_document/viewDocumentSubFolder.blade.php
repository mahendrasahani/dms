@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Folders</h1>
                    <h3 class="my-2 fw-bold"> {{$folder->name}}</h3>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($folder->folders as $value)
                    <div class="col-lg-3">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <span
                                        class=" btn btn-xl btn-light-info text-info btn-circle d-flex align-items-center justify-content-center ">
                                        <a href="#">
                                            <i class="fa-regular fa-folder"></i>
                                        </a>
                                    </span>
                                    <h6 class="text-muted mt-3 pt-1 mb-0 fw-bold">{{ $value->folder_name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
