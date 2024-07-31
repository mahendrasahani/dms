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
                            <form class="mt-4" method="POST" action="{{ route('backend.hotel.store') }}">
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
                                        <select name="head_department" required
                                            class="select2 js-programmatic-deparment form-control"
                                            style="width: 100%; height: 36px" required>
                                            <option></option>
                                            @if (count($head_departments) > 0)
                                                @foreach ($head_departments as $head_department)
                                                    <option value="{{ $head_department->id ?? '' }}">
                                                        {{ $head_department->name ?? '' }} -
                                                        {{ $head_department->getDepartment->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Password" name="password"
                                            required />
                                    </div>
                                    @error('password')
                                        <p style="color:red">{{ $message }}</p>
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
    <script>
        $(".js-programmatic-deparment").select2({
            placeholder: "Select an deparment",
        });
    </script>
@endsection
@endsection
