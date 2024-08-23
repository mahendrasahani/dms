@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <h1 class="mb-0 fw-bold">Add Hotel Department</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{ route('backend.hotel_department.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                            required value="{{ old('name') }}" />
                                            @error('name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required value="{{ old('email') }}" />
                                            @error('email')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="number" class="form-control" id="desig" placeholder="Phone"
                                            name="phone"required {{ old('phone') }} />
                                            @error('phone')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select name="head_department" id="head_department" required class="select2 js-programmatic form-control"
                                            style="width: 100%;">
                                            <option value="">--Select--</option>
                                            @if(count($heade_departments) > 0)
                                                @foreach($heade_departments as $h_department)
                                                    <option value="{{$h_department->id}}">{{$h_department->name ?? ''}} - {{$h_department->getDepartmentType->name}}</option>
                                                @endforeach
                                            @endif 
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <select name="hotel" required class="select2 hotel form-control"
                                            style="width: 100%;" id="hotel_list">
                                            <option value="">--Select--</option>
                                          
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
                                    @error('confirm_password')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
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
            placeholder: "Select Head Department",
        });
        $(".hotel").select2({
            placeholder: "Select Hotel",
        });
    </script>

     <script>
         $(document).on("change", "#head_department", async function(){
            let url = "{{route('backend.hotel_department.get_hotel_list')}}";
            let head_department = $(this).val(); 
            let response = await fetch(`${url}/?head_department=${head_department}`);
                let responseData = await response.json(); 
                let append_to_html = '<option value="">--Select Hotel--</option>'; 
                if (Array.isArray(responseData.hotel_list) && responseData.hotel_list.length > 0) { 
                    responseData.hotel_list.forEach(hotel => {
                        append_to_html += `<option value="${hotel.id}">${hotel.name}</option>`;
                    });
                } else { 
                }
                $("#hotel_list").html(append_to_html); 
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
