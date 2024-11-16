@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('backend.team_leader.index')}}" class="link">Team Leader</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
                    <h1 class="mb-0 fw-bold">Edit Team Leader</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{ route('backend.team_leader.update', [Crypt::encrypt($team_leader->id)]) }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <lable>Enter First Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter First Name" name="f_name" id="f_name"
                                            value="{{$team_leader->first_name}}" />
                                            @error('f_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <lable>Enter Last Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="l_name" id="flname"
                                            value="{{$team_leader->last_name}}" />
                                            @error('l_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            value="{{ $team_leader->email }}" disabled/>
                                            @error('email')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Phone</lable>
                                        <input type="number" class="form-control" id="desig" placeholder="Phone"
                                            name="phone" value="{{ $team_leader->phone }}" />
                                            @error('phone')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div> 

                                    <div class="mb-3 col-md-6">
                                    <lable>Head Department</lable>
                                        <select name="head_department" class="select2 hotel form-control"
                                            style="width: 100%;" id="head_department" onchange="getManagerList();">
                                            @if(Auth::user()->role_type_id == 1)
                                            <option value="">--Select--</option>
                                            @foreach($department_heads as $head)
                                            <option value="{{$head->id}}" {{$head->id == $team_leader->getHead?->id ? 'selected':''}}>{{$head->first_name.' '.$head->last_name}}</option>
                                            @endforeach
                                            @elseif(Auth::user()->role_type_id == 2 || Auth::user()->role_type_id == 5)
                                            <option value="{{$team_leader->getHead?->id}}" selected>{{$team_leader->getHead?->first_name .' '. $team_leader->getHead?->last_name}}</option>
                                            @endif
                                        </select>
                                        @error('head_department')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div> 
                                    <div class="mb-3 col-md-6">
                                    <lable>Unit</lable>
                                        <select name="hotel" class="select2 hotel form-control"
                                            style="width: 100%;" id="unit" onchange="getManagerList();"> 
                                            @if(Auth::user()->role_type_id == 1 || Auth::user()->role_type_id == 2)
                                            <option value="">--Select--</option>
                                             @foreach ($units as $unit)
                                                <option value="{{$unit->id}}" {{$unit->id == $team_leader->unit_id ? "selected":""}}>{{$unit->name}}</option>
                                             @endforeach
                                             @else
                                             <option value="{{$team_leader->getUnit?->id}}" {{$team_leader->getUnit?->id == $team_leader->unit_id ? "selected":""}}>{{$team_leader->getUnit?->name}}</option>
                                             @endif
                                        </select>
                                        @error('hotel')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div> 
                                    <div class="mb-3 col-md-6">
                                    <lable>Manager</lable>

                                        <select name="manager" class="select2 hotel form-control"
                                            style="width: 100%;" id="manager">  
                                            @if(Auth::user()->role_type_id  == 1 || Auth::user()->role_type_id == 2)
                                            <option value="">--Select--</option>
                                            @if($managers != '' && $managers != NULL)
                                            @foreach($managers as $manager)
                                            <option value="{{$manager?->id}}" {{$manager->id == $team_leader->manager_id ? "selected":""}}>{{$manager?->first_name.' '.$manager?->last_name}}</option>
                                            @endforeach
                                            @endif 
                                            @else
                                            <option value="{{$team_leader->getManager?->id}}" {{$team_leader->getManager->id == $team_leader->manager_id ? "selected":""}}>{{$team_leader->getManager?->first_name.' '.$team_leader->getManager?->last_name}}</option>

                                            @endif
                                        </select>
                                        @error('manager')
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
                    $("#unit").html(append_to_html);
                }
            }

            async function getManagerList(){
            let head_id = $("#head_department").val(); 
            let unit_id = $("#unit").val(); 
            let url = "{{route('backend.get_manager_ist')}}"; 
            let response = await fetch(`${url}?unit_id=${unit_id}&department_head=${head_id}`);
            let responseData = await response.json(); 
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
