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
                                        <lable>Name</lable>
                                        <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                            required value="{{$team_leader->name}}" />
                                            @error('name')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Email</lable>
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required value="{{ $team_leader->email }}" />
                                            @error('email')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Phone</lable>
                                        <input type="number" class="form-control" id="desig" placeholder="Phone"
                                            name="phone" required value="{{ $team_leader->phone }}" />
                                            @error('phone')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div> 

                                    <div class="mb-3 col-md-6">
                                    <lable>Head Department</lable>
                                        <select name="head_department" required class="select2 hotel form-control"
                                            style="width: 100%;" id="head_department">
                                            <option value="">--Select--</option>
                                            @foreach($heade_departments as $head_department)
                                            <option value="{{$head_department->id}}" {{$head_department->id == $team_leader->getUserHierarchie->head_department_id ? 'selected':''}}>{{$head_department->getDepartmentType->name}}</option>
                                            @endforeach 
                                        </select>
                                        @error('head_department')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Hotel</lable>
                                        <select name="hotel" required class="select2 hotel form-control"
                                            style="width: 100%;" id="hotel"> 
                                            @foreach($hotels as $hotel)
                                            <option value="{{$hotel->id}}" {{$hotel->id == $team_leader->getUserHierarchie->hotel_id ? 'selected':''}}>{{$hotel->name}}</option>
                                            @endforeach 
                                        </select>
                                        @error('hotel')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Hotel Department</lable>
                                        <select name="hotel_department" required class="select2 hotel form-control"
                                            style="width: 100%;" id="hotel_department"> 
                                            @foreach($hotel_departments as $hotel_department)
                                            <option value="{{$hotel_department->id}}" {{$hotel_department->id == $team_leader->getUserHierarchie->hotel_department_id ? 'selected':''}}>{{$hotel_department->name}}</option>
                                            @endforeach 
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                    <lable>Manager</lable>
                                        <select name="manager" required class="select2 hotel form-control"
                                            style="width: 100%;" id="manager"> 
                                            @foreach($h_managers as $h_manager)
                                            <option value="{{$h_manager->id}}" {{$hotel_department->id == $team_leader->getUserHierarchie->manager_id ? 'selected':''}}>{{$h_manager->name}}</option>
                                            @endforeach 
                                        </select>
                                        @error('manager')
                                            <p style="color:red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <lable>Enter password if you want to change</lable>
                                        <input type="text" class="form-control" id="New_pasword" placeholder="New Password"  name="new_pasword"/>
                                        @error('new_pasword')
                                            <p style="color:red;">{{$message}}</p>
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
         $(document).on("change", "#head_department", async function(){
            let url = "{{route('backend.manager.get_hotel_list')}}";
            let head_department_id = $(this).val();
            let response = await fetch(`${url}/?head_department_id=${head_department_id}`);
            let resposeData = await response.json(); 
            let append_to_html = '<option value="">--Select Hotel--</option>'; 
            if(resposeData.status == "success"){  
                resposeData.hotel_list.forEach(element => { 
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                }); 
                $("#hotel").html(append_to_html); 
           }
         });
    </script>

    <script>
        $(document).on("change", "#hotel", async function(){
            let url = "{{route('backend.manager.get_hotel_department_list')}}";
            let hotel_id = $(this).val();
            let response = await fetch(`${url}/?hotel_id=${hotel_id}`);
            let resposeData = await response.json();
            let append_to_html = '<option value="">--Select Hotel--</option>'; 
            if(resposeData.status == "success"){  
                resposeData.hotel_department_list.forEach(element => { 
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                }); 
                $("#hotel_department").html(append_to_html); 
           } 
        });
    </script>

    <script>
        $(document).on("change", "#hotel_department", async function(){
            let url = "{{route('backend.get_manager_list')}}";
            let hotel_department_id = $(this).val();
            console.log(hotel_department_id);
            let response = await fetch(`${url}/?hotel_department_id=${hotel_department_id}`);
            let resposeData = await response.json(); 
            let append_to_html = '<option value="">--Select Hotel--</option>'; 
            if(resposeData.status == "success"){  
                resposeData.manager_list.forEach(element => { 
                    append_to_html += `<option value="${element.id}">${element.name}</option>`;
                }); 
                $("#manager").html(append_to_html); 
           } 
        });
    </script>


    <script> 
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
