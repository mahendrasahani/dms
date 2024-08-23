@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">Add Document</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <lable>Document Title</lable>
                                        <input type="text" class="form-control" name="document_title" id="document_title" placeholder="Document Title" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <lable>Main Category</lable>
                                            <select name="role-type" id="main_category" name="main_category" class="select2 js-programmatic-main-category form-control" style="width: 100%; height: 36px">
                                                @foreach ($data['main_categories'] as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3m col-md-6"> 
                                    <lable>Sub Category</lable>
                                        <select name="categories" id="sub_category" name="sub_category" class="select2 js-programmatic-sub-category form-control" style="width: 100%; height: 36px">
                                            @foreach ($data['sub_categories'] as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>  
                                     
                                    <div class="col-md-6 mt-3">
                                        <select name="assign_user" id="" class="select2 js-programmatic-user form-control" style="width: 100%; height: 36px">
                                            @foreach ($data['users'] as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="start_date" class="form-label">Start Date</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control mb-3"
                                                            placeholder="Start Date">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="start_time" class="form-label">Start Time</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="time" class="form-control" placeholder="Start Time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="end_date" class="form-label">End Date</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" name="end-date"
                                                            id="end-date">
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <label for="end_time" class="form-label">End Time</label>
                                                    </div>
                                                    <div class="col-md-8 mt-3">
                                                        <input type="time" class="form-control" name="end-time"
                                                            id="emd-time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <input type="file" name="file" class="form-control" required />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <select name="status" id="status" class="select2 js-programmatic-status form-control"
                                            style="width: 100%; height: 36px">
                                            <option></option>
                                            <option value="0">Select Status</option>
                                            <option value="1">New</option>
                                            <option value="2">Process</option>
                                            <option value="3">Complete</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 check-box">
                                        <input class="form-check-input" type="checkbox" id="check1" name="option1"
                                            value="something">
                                        <label class="form-check-label">Can Download?</label>
                                    </div>
                                    <div class="mt-3">
                                        <button
                                            class=" btn rounded-pill px-4 btn-light-success text-success font-weight-medium waves-effect waves-light "
                                            type="submit">
                                            <i data-feather="send" class="feather-sm ms-2 fill-white"></i>
                                            Submit
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


@section('javascript-section')
    <script>
        $(".js-programmatic-user").select2({
            placeholder: "Select an user",
        });

        $(".js-programmatic-main-category").select2({
            placeholder: "Select main category",
        });

        $(".js-programmatic-sub-category").select2({
            placeholder: "Select sub category",
        });
        $(".js-programmatic-status").select2({
            placeholder: "Select status",
        });
    </script>
@endsection
@endsection
