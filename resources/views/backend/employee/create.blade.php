@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">Add Employee</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{route('backend.employee.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="User Name" name="user_name" required value=""/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="email" class="form-control" placeholder="User Email" name="user_email" required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="number" class="form-control" id="desig" placeholder="User Phone" name="user_phone"required />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select class="form-control" name="role_type_id" required>
                                            <option disabled selected>Select Role Type</option>
                                            @foreach ($roles as $roles)
                                            <option value="{{$roles->id}}">{{$roles->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Create Password" name="password" required />
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
                    window.location.href = "{{ route('backend.employee.index') }}";
                }
            });
        </script>
    @endif
@endsection
@endsection
