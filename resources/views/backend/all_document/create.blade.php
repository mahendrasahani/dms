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
                                        <input type="text" class="form-control" placeholder="Name" />
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <select name="role-type" id="" class="form-control">
                                                <option selected></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3m col-md-6">
                                        <input type="text" class="form-control" id="desig" placeholder="Category" />
                                    </div>
                                    <div class="mb-3m col-md-6">
                                        <div id="education_fields" class="mb-3"></div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3m col-md-6" style="margin-bottom: 20px;">
                                        <input type="text" class="form-control" id="desig" placeholder="Assign/share with roles"/>
                                    </div>
                                    <div class="mb-3m col-md-6">
                                        <input type="text" class="form-control" id="desig" placeholder="Assign/share with users" />
                                    </div>
                                    <div class="mb-3 form-group">
                                        <div class="controls">
                                          <input type="file" name="file" class="form-control" required />
                                        </div>
                                      </div>
                                    <div class="mb-3">
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
    
@endsection
