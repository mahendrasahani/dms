@extends('layouts/backend/main')
@section('main-section')
<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item">
                      <a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a>
                    </li> 
                    <li class="breadcrumb-item active" aria-current="page">
                    All Department
                    </li>
                </ol>
            </nav>
                <h1 class="mb-0 fw-bold">All Departments</h1>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                <a href="{{route('backend.head_department.create')}}">
                <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-1-modal">
                    <i class="ri-add-line me-1"></i>
                    Add Department
                </button>
            </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                      
                                        <!-- <th style="align-item: end;">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    
                                    @if(count($head_users) > 0)
                                        @foreach($head_users as $head_user)
                                        <tr>
                                            <td>{{$count++}}</td>
                                        <td>
                                        <img src="{{$head_user->profile_image ?? url('public/assets/backend/assets/images/users/default_user.png')}}" style="height: 40px; border-radius: 21px; overflow: hidden;"> 
                                        </td>
                                        <td>{{$head_user->name ?? ''}}</td>
                                        <td>{{$head_user->phone ?? ''}}</td>
                                        <td>{{$head_user->email ?? ''}}</td>
                                        <td>{{$head_user->getDepartmentType->name ?? ''}}</td>
                                        <td>
                                        <a href="{{route('backend.assign_custom_permission', [Crypt::encrypt($head_user->id)])}}">Permission</a> |
                                        <a href="{{route('backend.assign_folder_permission.assign', [Crypt::encrypt($head_user->id)])}}">Folder Permission</a>
                                        </td>
                                     
                                      <td>
                                            <div class="button-container">
                                                <a href="{{route('backend.head_department.edit', [Crypt::encrypt($head_user->id)])}}">
                                                    <button class="editBtn">
                                                        <svg height="1em" viewBox="0 0 512 512">
                                                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                        </svg>
                                                    </button>
                                                </a> 
                                                @if(Auth::user()->role_type_id == 1)
                                                <a  href="{{route('backend.head_department.delete', [Crypt::encrypt($head_user->id)])}}">
                                                    <button class="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 14" class="svgIcon bin-top">
                                                            <g clip-path="url(#clip0_35_24)">
                                                                <path fill="black" d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_35_24">
                                                                    <rect fill="white" height="14" width="69"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 57" class="svgIcon bin-bottom">
                                                            <g clip-path="url(#clip0_35_22)">
                                                                <path fill="black" d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_35_22">
                                                                    <rect fill="white" height="57" width="69"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </button>
                                                </a>
                                                @endif
                                        </td> 
                                    </tr> 
                                @endforeach

                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        {{-- <div class="card w-100">
            <div class="d-flexborder-bottomtitle-part-paddingalign-items-center">
                <div class="ms-auto flex-shrink-0">
                    <div id="view-code5-1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-bottom">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Create Department</h4>
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Category Name" required name="role_name" />
                                                        <label><i data-feather="user" class="sun"></i>&nbsp;Department Name</label>
                                                    </div>
                                                    <div class="d-md-flex align-items-center">
                                                        <div class="mt-3 mt-md-0 ms-auto">
                                                            <button type="submit"
                                                                class="btn  btn-info font-weight-medium rounded-pillc px-4">
                                                                <div class="d-flex align-items-center">
                                                                    <i data-feather="send" class="feather-sm fill-white me-2"></i>
                                                                    Submit
                                                                </div>
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
                    </div>
                </div>
            </div>
        </div>  --}}
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
            });
        </script>
    @elseif(Session::has('update'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ Session::get('update') }}",
                icon: "success",
                timer: 5000,
            });
        </script>
    @elseif(Session::has('warning'))
        <script>
            Swal.fire({
                title: "Warning!",
                text: "{{ Session::get('warning') }}",
                icon: "warning",
                timer: 5000,
            });
        </script>
    @elseif(Session::has('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "{{ Session::get('error') }}",
                icon: "error",
                timer: 5000,
            });
        </script>
    @elseif(Session::has('already_in_use'))
        <script>
            Swal.fire({
                title: "Warning!",
                text: "{{ Session::get('already_in_use') }}",
                icon: "warning"
            });
        </script>
    @elseif(Session::has('deleted'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ Session::get('deleted') }}",
                icon: "success"
            });
        </script>
    @endif



 
@endsection
@endsection