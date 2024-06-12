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
                                        <input type="text" class="form-control" id="desig" placeholder="Owner Name"
                                            name="owner_name"required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" id="desig" placeholder="Owner Email"
                                            name="owner_email" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select class="form-control" name="user_type" required>
                                            <option value="2" @checked(true)>Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Create Password"
                                            name="password" required />
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
    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                timer: 5000,
                willClose: () => {
                    window.location.href = "{{ route('backend.hotels.index') }}";
                }
            });
        </script>
    @endif
@endsection
@endsection