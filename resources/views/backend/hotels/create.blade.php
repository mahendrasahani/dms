@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">Add Hotel</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{ route('backend.hotels.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Hotel Name"
                                            name="hotal_name" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Hotel Localtion/Address"
                                            name="hotel_location" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="Owner Name"
                                            name="name" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" id="email" placeholder="Owner Email"
                                            name="email" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" id="phone" placeholder="Owner phone"
                                            name="phone" required />
                                    </div>
                                     
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Password"
                                            name="password" required />
                                    </div>
                                    @error('password')
                                    <p style="color:red">{{$message}}</p>   
                                    @enderror
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Confirm Password"
                                            name="password_confirmation" required />
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary rounded-pill px-4 mt-3" type="submit">
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
 
@endsection
@endsection
