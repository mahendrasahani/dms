@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('backend.team_member.index')}}" class="link">Team Member</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
                    <h1 class="mb-0 fw-bold">Add Team Member</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" method="POST" action="{{ route('backend.team_member.update', [Crypt::encrypt($team_member->id)]) }}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <lable>Enter First Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter First Name" name="f_name" id="f_name"
                                            required value="{{ $team_member->first_name}}" />
                                            @error('f_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <lable>Enter Last Name</lable>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="l_name" id="l_name"
                                            required value="{{ $team_member->last_name}}" />
                                            @error('l_name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required value="{{ $team_member->email }}" disabled/>
                                            @error('email')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Phone</lable>
                                        <input type="number" class="form-control" id="desig" placeholder="Phone"
                                            name="phone" required value="{{ $team_member->phone }}" />
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
                                            @foreach($head_departments as $head_dep)
                                            <option value="{{$head_dep->id}}" {{$team_member->head_department_id == $head_dep->id ? "selected" : ""}}>{{$head_dep->first_name .' '. $head_dep->last_name}}</option>
                                            @endforeach

                                            @elseif(Auth::user()->role_type_id == 2 || Auth::user()->role_type_id == 5)
                                            <option value="{{$team_member->getHead?->id}}" selected>{{$team_member->getHead?->first_name .' '. $team_member->getHead?->last_name}}</option>
                                            @endif
                                        </select>
                                        @error('head_department')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Unit</lable>
                                        <select name="hotel" required class="select2 hotel form-control"
                                            style="width: 100%;" id="unit" onchange="getManagerList();">  
                                            @if(Auth::user()->role_type_id == 1 || Auth::user()->role_type_id == 2)
                                            <option value="">--Select--</option>  
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}" {{$team_member->unit_id == $unit->id ? "selected":""}}>{{$unit->name}}</option>
                                            @endforeach
                                            @else
                                            <option value="{{$team_member->getUnit?->id}}">{{$team_member->getUnit?->name}}</option>
                                            @endif
                                        </select>
                                        @error('hotel')
                                            <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Manager</lable>
                                        <select name="manager" class="select2 hotel form-control"
                                            style="width: 100%;" id="manager" onchange="getTeamLeaderList();">
                                            @if(Auth::user()->role_type_id == 1 || Auth::user()->role_type_id == 2)
                                            <option value="">--Select--</option>  
                                            @foreach($managers as $manager)
                                                <option value="{{$manager->id}}" {{$manager->id == $team_member->manager_id ? "selected":""}}>{{$manager->first_name .' '. $manager->last_name}}</option>
                                            @endforeach 
                                            @else
                                            <option value="{{Auth::user()->id}}">{{$team_member->getManager?->first_name .' '. $team_member->getManager?->last_name}}</option>
                                            @endif
                                        </select>
                                        @error('manager')
                                            <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div> 
                                    <div class="mb-3 col-md-6">
                                    <lable>Team Leader</lable>
                                        <select name="team_leader" class="select2 hotel form-control"
                                            style="width: 100%;" id="team_leader">
                                            <option value="">--Select Team Leader--</option> 
                                            @foreach($team_leaders as $team_leader)
                                            <option value="{{$team_leader->id}}" {{$team_leader->id == $team_member->getTeamLeader?->id ? "selected":""}}>{{$team_leader->first_name .' '. $team_leader->last_name}}</option>
                                            @endforeach 
                                        </select>
                                        @error('team_leader')
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
            let append_to_html1 = '<option value="">--Select Manager--</option>';
            let append_to_html2 = '<option value="">--Select Team Leader--</option>';
            if(responseData.status == "success"){
                console.log(responseData);
                responseData.manager_list.forEach(element => { 
                    append_to_html1 += `<option value="${element.id}">${element.name}</option>`;
                });
                $("#manager").html(append_to_html1);

                responseData.team_leader_list.forEach(element => { 
                    append_to_html2 += `<option value="${element.id}">${element.name}</option>`;
                });
                $("#team_leader").html(append_to_html2); 
            } 
        }

        async function getTeamLeaderList(){
            let manager_id = $("#manager").val();
            let url = "{{route('backend.get_team_leader_list')}}";
            let response = await fetch(`${url}?manager_id=${manager_id}`);
            let responseData = await response.json();
            let append_to_html = '<option value="">--Select Team Leader--</option>';
            if(responseData.status == "success"){
                responseData.team_leader_list.forEach(element => {
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                });
                $("#team_leader").html(append_to_html);
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
