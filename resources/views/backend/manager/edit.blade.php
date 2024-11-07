@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('backend.manager.index')}}" class="link">Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
                    <h1 class="mb-0 fw-bold">Add Manager</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{route('backend.manager.update', [Crypt::encrypt($manager->id)])}}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <lable>First Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter First Name" name="f_name" id="f_name" value="{{$manager->first_name ?? ''}}" required
                                        oninput="capitalizeEachWord(this)"/>
                                            @error('f_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <lable>Last Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="l_name" id="l_name" value="{{$manager->last_name ?? ''}}" required
                                        oninput="capitalizeEachWord(this)"/>
                                            @error('l_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$manager->email ?? ''}}" required disabled/>
                                        @error('email')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Phone</lable>
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" value="{{$manager->phone ?? ''}}" required
                                        maxlength="10" 
                                            minlength="10" 
                                            pattern="\d{10}" 
                                            oninput="validatePhone(this)"/>
                                            <span style="font-size:11px; color:gray;">Phone number should be 10 digits without country code.</span>
                                        @error('phone')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div> 

                                    <div class="mb-3 col-md-6">
                                    <lable>Head Department</lable>
                                        <select name="head_department" class="select2 form-control"
                                            style="width: 100%;" id="head_department" onchange="getUnitList();">
                                            @if(Auth::user()->role_type_id == 1) 
                                            <option value="">--Select--</option>
                                            @foreach($head_departments as $head_department)
                                            <option value="{{$head_department->id}}" {{$head_department->id == $manager->head_department_id ? "selected":""}}>{{$head_department->name ?? ''}}</option>
                                            @endforeach
                                            @elseif(Auth::user()->role_type_id == 2)
                                            <option value="{{$manager->getHead?->id}}">{{$manager->getHead?->name}}</option>
                                            @endif
                                        </select>
                                        @error('head_department')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Hotel</lable>
                                        <select name="hotel" class="select2 form-control" style="width: 100%;" id="hotel">
                                            <option value="">--Select--</option>
                                            @foreach($head_units as $head_unit)
                                                <option value="{{$head_unit->id ?? ''}}" {{$manager->unit_id == $head_unit->id ? "selected":""}}>{{$head_unit->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                        @error('hotel')
                                        <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>
 
                                    <div class="mb-3 col-md-6">
                                        <label>Enter password if you want to change</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" placeholder="New Password" name="password" />
                                            <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                                <i class="fas fa-eye" id="togglePasswordIcon"></i>
                                            </span>
                                        </div>
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
        async function getUnitList(){
            let department_id = $("#head_department").val(); 
            let url = "{{route('backend.get_unit_ist')}}";
            let response = await fetch(`${url}?department_id=${department_id}`);
            let responseData = await response.json();
            let append_to_html = '<option value="">--Select Unit--</option>'; 
            if(responseData.status == "success"){
                responseData.unit_list.forEach(element => { 
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                }); 
                $("#hotel").html(append_to_html);
            }
        } 

         async function getManagerList(){
            let head_id = $("#department_head").val(); 
            let unit_id = $("#unit").val(); 
            let url = "{{route('backend.get_manager_ist')}}"; 
            let response = await fetch(`${url}?unit_id=${unit_id}&department_head=${head_id}`);
            let responseData = await response.json();
            console.log(responseData);  
            let append_to_html = '<option value="">--Select Manager--</option>';
            if(responseData.status == "success"){
                responseData.manager_list.forEach(element => { 
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                });
                $("#manager").html(append_to_html);
            } 
        }
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
