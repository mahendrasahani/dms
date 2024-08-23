@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">Edit Hotel Department</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{ route('backend.hotel_department.update', [$hotel_department->id]) }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                            required value="{{$hotel_department->name ?? ''}}" />
                                            @error('name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                     
                                    <div class="mb-3 col-md-6">
                                        <input type="number" class="form-control" id="desig" placeholder="Phone"
                                            name="phone"required value="{{$hotel_department->phone ?? ''}}" />
                                            @error('phone')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select name="head_department" required class="select2 js-programmatic form-control"
                                            style="width: 100%;">
                                            <option value="">--Select--</option>
                                            @if(count($head_departments) > 0)
                                                @foreach($head_departments as $h_department)
                                                    <option value="{{$h_department->id}}" {{$hotel_department->getUserHierarchie->head_department_id == $h_department->id ? 'selected':''}}>{{$h_department->name ?? ''}} - {{$h_department->getDepartmentType->name}}</option>
                                                @endforeach
                                            @endif 
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <select name="hotel" required class="select2 hotel form-control"
                                            style="width: 100%;">
                                            <option value="">--Select--</option>
                                            @if(count($hotels) > 0)
                                                @foreach($hotels as $hotel)
                                                    <option value="{{$hotel->id}}" {{$hotel_department->getUserHierarchie->hotel_id == $hotel->id ? 'selected':''}}>{{$hotel->name ?? ''}}</option>
                                                @endforeach
                                            @endif 
                                        </select>
                                    </div>

                                     
                             
                                     
                                  
                                    <div class="mb-3">
                                        <button class="btn btn-primary rounded-pill px-4 mt-3" type="submit">
                                            <i data-feather="send" class="feather-sm ms-2 fill-white"></i>
                                            Update
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
            placeholder: "Select Head Department",
        });
        $(".hotel").select2({
            placeholder: "Select Hotel",
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
