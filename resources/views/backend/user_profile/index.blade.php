
@extends('layouts/backend/main')
@section('main-section')


<div class="page-wrapper">
    <div class="page-titles">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 d-flex align-items-center">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
          <h1 class="mb-0 fw-bold">Profile Page</h1>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
          <div class="card">
            <div class="card-body">
              <center class="mt-4">
                <div class="image_upload">
                  @if($user->profile_image == NULL)
                    <img src="{{ url('public/assets/backend/assets/images/users/default_user.png')}}" class="rounded-circle" width="150" />
                  @else
                  <img src="{{ url('public/assets/backend/assets/images/upload/profile_image')}}/{{Auth::user()->profile_image}}" class="rounded-circle" width="150" />
                  @endif
                  </div>
                <h4 class="mt-2">{{$user->name}}</h4>
                <h6 class="card-subtitle">{{$user->roleType->name}}</h6>
              </center>
            </div>
            <div>
              <hr />
            </div>
            <div class="card-body">
              <small class="text-muted">Email address</small>
              <h6>{{$user->email}}</h6>
              <small class="text-muted pt-4 db">Phone</small>
              <h6>{{$user->phone}}</h6>  
              <!-- <small class="text-muted pt-4 db">Social Profile</small>
              <br />
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-facebook-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button>
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-twitter-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button>
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-youtube-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button> -->
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
          <div class="card overflow-hidden">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-timeline-tab" data-bs-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Setting</a >
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="card-body">
                  <form class="form-horizontal form-material" action="{{route('backend.user_profile.update')}}" enctype="multipart/form-data" method="POST">
                  @csrf  
                  <div class="mb-3">
                      <label class="col-md-12">Full Name</label>
                      <div class="col-md-12">
                        <input type="text" name="name" placeholder="Your Name" class="form-control form-control-line" value="{{$user->name}}" required/>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="example-email" class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input type="email" name="email" placeholder="Email" class="form-control form-control-line" name="email"  value="{{$user->email}}" required/>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-md-12">Phone No</label>
                      <div class="col-md-12">
                        <input type="text" name="phone" placeholder="Your Phone No." class="form-control form-control-line" value="{{$user->phone}}" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-md-12">Enter password if you want to change</label>
                      <div class="col-md-12">
                        <input type="text" name="new_password" class="form-control form-control-line" placeholder="New Password"/>
                      </div>
                    </div>
                    
                    <div class="mb-3">
                      <label class="col-md-12">Profile Image</label>
                      <div class="col-md-12">
                      <input type="file" accept="image/*" class="file_upload" name="profile_image"> 
                      </div>
                    </div>
                     
                     
                    <div class="mb-3">
                      <div class="col-sm-12">
                        <button class="btn btn-success">
                          Update Profile
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



@endsection