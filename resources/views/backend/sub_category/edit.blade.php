
@extends('layouts/backend/main')
@section('main-section')


<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="mb-0">Edit Sub Category</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Category ID</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Id" value="" require disabled/>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Category Name</label>
                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Sub Category Name" value="" require />
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Main Category Name</label>
                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Main Category Name" value="" require />
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefaultUsername">Description</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Description" aria-describedby="inputGroupPrepend2" require value="Description" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <button class="btn btn-primary rounded-pill px-4 mt-3" type="submit">
                                        Submit
                                    </button>
                                    <a href="{{route('backend.sub_category.index')}}" class="btn btn-danger rounded-pill px-4 mt-3" >
                                            Cancle
                                    </a>
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