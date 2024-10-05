@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('backend.head_department.index')}}" class="link">Head Department</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Add Head Department</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{route('backend.head_department.update', [Crypt::encrypt($head_department->id) ])}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <lable>Name</lable>
                                        <input type="text" class="form-control" placeholder="User Name" name="name" value="{{$head_department->name}}"/>
                                        @error('name')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="email" class="form-control" placeholder="User Email" name="email" value="{{$head_department->email}}"/>
                                        @error('email')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Phone</lable>
                                        <input type="number" class="form-control" id="desig" placeholder="User Phone" name="phone" value="{{$head_department->phone}}"/>
                                        @error('phone')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <lable>Department</lable>
                                        <select name="department" required class="select2 js-programmatic form-control"  style="width: 100%; height: 36px">
                                            <option></option>
                                            @foreach ($head_department_type as $department)
                                            <option value="{{$department->id}}" {{$department->id == $head_department->department_type_id ? 'selected':''}}>{{$department->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                     @error('department')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    </div>
 
                                    <div class="mb-3 col-md-6">
                                    <lable>Enter password if you want to change</lable>
                                        <input type="text" class="form-control" id="desig" placeholder="New Password" name="password"  />
                                        @error('password')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
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
    $(".js-programmatic").select2({
        placeholder: "Select Department",
    });
</script>
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
