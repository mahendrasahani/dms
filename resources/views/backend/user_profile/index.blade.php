
@extends('layouts/backend/main')
@section('main-section')


<div class="page-wrapper">
    <div class="page-titles">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12 align-self-center">
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
                    <img src="{{ url('public/assets/backend/assets/images/users/user.jpg')}}" class="rounded-circle" width="150" />
                    {{-- <input type="file" accept="image/*" class="file_upload"> --}}
                </div>
                <h4 class="mt-2">Hanna Gover</h4>
                <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                {{-- <div class="row text-center justify-content-md-center">
                  <div class="col-4">
                    <a
                      href="javascript:void(0)"
                      class="link d-flex align-items-center"
                      ><i class="me-1 ri-user-line"></i>
                      <font class="font-weight-medium">254</font></a
                    >
                  </div>
                  <div class="col-4">
                    <a
                      href="javascript:void(0)"
                      class="link d-flex align-items-center"
                      ><i class="ri-image-line me-1"></i>
                      <font class="font-weight-medium">54</font></a
                    >
                  </div>
                </div> --}}
              </center>
            </div>
            <div>
              <hr />
            </div>
            <div class="card-body">
              <small class="text-muted">Email address </small>
              <h6>hannagover@gmail.com</h6>
              <small class="text-muted pt-4 db">Phone</small>
              <h6>+91 654 784 547</h6>
              <small class="text-muted pt-4 db">Address</small>
              <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
              {{-- <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border: 0" allowfullscreen ></iframe>
              </div> --}}
              <small class="text-muted pt-4 db">Social Profile</small>
              <br />
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-facebook-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button>
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-twitter-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button>
              <button class="btn btn-circle btn-secondary">
                <i class=" ri-youtube-line fs-6 d-flex align-items-center justify-content-center " ></i>
              </button>
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
                  <form class="form-horizontal form-material">
                    <div class="mb-3">
                      <label class="col-md-12">Full Name</label>
                      <div class="col-md-12">
                        <input type="text" placeholder="Your Name" class="form-control form-control-line" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="example-email" class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input type="email" placeholder="Email" class="form-control form-control-line" name="example-email" id="example-email" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-md-12">Password</label>
                      <div class="col-md-12">
                        <input type="password" value="" class="form-control form-control-line" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-md-12">Phone No</label>
                      <div class="col-md-12">
                        <input type="text" placeholder="Your Phone No." class="form-control form-control-line" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-md-12">Message</label>
                      <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line" ></textarea>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="col-sm-12">Select Country</label>
                      <div class="col-sm-12">
                        <select class="form-control form-control-line">
                          <option>London</option>
                          <option>India</option>
                          <option>Usa</option>
                          <option>Canada</option>
                          <option>Thailand</option>
                        </select>
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