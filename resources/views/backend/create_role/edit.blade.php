@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="border-bottom title-part-padding">
                            <h4 class="mb-0">Edit Main Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('backend.create_role.update',[$role_name->id])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefault02">Role Name</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="role_name"
                                            placeholder="Last name" value="{{$role_name->name}}" require />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <button class="btn btn-primary rounded-pill px-4 mt-3" type="submit">
                                            Submit
                                        </button>
                                        <a href="{{ route('backend.create_role.index') }}"
                                            class="btn btn-danger rounded-pill px-4 mt-3">Cancle</a>
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
