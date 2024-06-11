@extends('layouts/backend/main')
@section('main-section')
  

<div class="page-wrapper">
  <div class="page-titles">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <!-- <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4> -->
        <h1 class="mb-0 fw-bold">Dashboard</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="border-bottom title-part-padding">
            <h4 class="mb-0">Pie Chart</h4>
          </div>
          <div class="card-body">
            <div>
              <canvas id="pie-chart" height="150"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="card">
          <div class="">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-body calender-sidebar">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BEGIN MODAL -->
    <div class="modal" id="my-event">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h4 class="modal-title"><strong>Add Event</strong></h4>
            <button type="button" class="btn-close close-dialog" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-dialog waves-effect" data-bs-dismiss="modal" aria-label="Close">
              Close
            </button>
            <button type="button" class="btn btn-success save-event waves-effect waves-light">
              Create event
            </button>
            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-dismiss="modal">
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-backdrop bckdrop hide"></div>
    <!-- Modal Add Category -->
    <div class="modal none-border" id="add-new-event">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center">
            <h4 class="modal-title"><strong>Add</strong> a category</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label">Category Name</label>
                  <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                </div>
                <div class="col-md-6">
                  <label class="control-label">Choose Category Color</label>
                  <select class="form-select form-white" data-placeholder="Choose a color..." name="category-color">
                    <option value="success">Success</option>
                    <option value="danger">Danger</option>
                    <option value="info">Info</option>
                    <option value="primary">Primary</option>
                    <option value="warning">Warning</option>
                    <option value="inverse">Inverse</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="
                      btn btn-danger
                      waves-effect waves-light
                      save-category
                    " data-bs-dismiss="modal">
              Save
            </button>
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL -->
  </div>
  {{-- <footer class="footer">2021© All Rights Reserved by Wrappixel</footer> --}}
</div>
</div>
<aside class="nav-customizer" id="shopping-cart">
  <div class="nav-customizer-body">
    <div class="rounded-top d-flex p-30 bg-white pb-3 align-items-center">
      <h3 class="card-title mb-0">Shopping Cart</h3>
      <div class="ms-auto">
        <a href="javascript:void(0)" class="nav-sidebar text-muted py-0">
          <i data-feather="x-circle"></i>
        </a>
      </div>
    </div>
    <!-- items -->
    <div class="p-30 pt-0 bg-white scrollable position-relative" style="height: calc(100vh - 245px)">
      <ul class="list-style-none">
        <li class="py-4 border-bottom">
          <div class="d-flex align-items-center">
            <div>
              <img src="assets/images/product/s-prd1.jpg" class="btn-rounded-lg" alt="product" />
            </div>
            <div class="ms-3 ps-1">
              <h5 class="mb-0">Supreme toys cooker</h5>
              <span class="text-muted fs-3">Kitchenware Item</span>
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$250</h5>
                <!-- widget -->
                <div class="shopping-widget ms-2">
                  <div class="form-group mb-0 pt-1">
                    <input type="text" value="1" name="qtyspin1" id="qtyspin1" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                  </div>
                  <div class="decrease-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                      <i data-feather="minus" class="feather-xs"></i>
                    </button>
                  </div>
                  <div class="increase-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                      <i data-feather="plus" class="feather-xs"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="py-4 border-bottom">
          <div class="d-flex align-items-center">
            <div>
              <img src="assets/images/product/s-prd2.jpg" class="btn-rounded-lg" alt="product" />
            </div>
            <div class="ms-3 ps-1">
              <h5 class="mb-0">Supreme toys cooker</h5>
              <span class="text-muted fs-3">Kitchenware Item</span>
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$250</h5>
                <!-- widget -->
                <div class="shopping-widget ms-2">
                  <div class="form-group mb-0 pt-1">
                    <input type="text" value="1" name="qtyspin2" id="qtyspin2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                  </div>
                  <div class="decrease-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                      <i data-feather="minus" class="feather-xs"></i>
                    </button>
                  </div>
                  <div class="increase-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                      <i data-feather="plus" class="feather-xs"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="py-4 border-bottom">
          <div class="d-flex align-items-center">
            <div>
              <img src="assets/images/product/s-prd3.jpg" class="btn-rounded-lg" alt="product" />
            </div>
            <div class="ms-3 ps-1">
              <h5 class="mb-0">Supreme toys cooker</h5>
              <span class="text-muted fs-3">Kitchenware Item</span>
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$250</h5>
                <!-- widget -->
                <div class="shopping-widget ms-2">
                  <div class="form-group mb-0 pt-1">
                    <input type="text" value="1" name="qtyspin3" id="qtyspin3" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                  </div>
                  <div class="decrease-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                      <i data-feather="minus" class="feather-xs"></i>
                    </button>
                  </div>
                  <div class="increase-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                      <i data-feather="plus" class="feather-xs"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="py-4 border-bottom">
          <div class="d-flex align-items-center">
            <div>
              <img src="assets/images/product/s-prd4.jpg" class="btn-rounded-lg" alt="product" />
            </div>
            <div class="ms-3 ps-1">
              <h5 class="mb-0">Supreme toys cooker</h5>
              <span class="text-muted fs-3">Kitchenware Item</span>
              <div class="d-flex align-items-center">
                <h5 class="mb-0">$250</h5>
                <!-- widget -->
                <div class="shopping-widget ms-2">
                  <div class="form-group mb-0 pt-1">
                    <input type="text" value="1" name="qtyspin" id="qtyspin" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                  </div>
                  <div class="decrease-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                      <i data-feather="minus" class="feather-xs"></i>
                    </button>
                  </div>
                  <div class="increase-btn">
                    <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                      <i data-feather="plus" class="feather-xs"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="p-30 bg-white">
      <div class="d-flex align-items-center py-2">
        <span class="text-muted fs-3">Sub Total</span>
        <div class="ms-auto">
          <span class="text-dark font-weight-medium fs-3">$2530</span>
        </div>
      </div>
      <div class="d-flex align-items-center py-2">
        <span class="text-muted fs-3">Total</span>
        <div class="ms-auto">
          <span class="text-dark font-weight-medium fs-3">$6830</span>
        </div>
      </div>
      <a class="btn btn-info text-white w-100 d-block" href="javascript:void(0);">
        Place order
      </a>
    </div>
  </div>
</aside>

<aside class="customizer">
  <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin ri-settings-3-line fs-7"></i></a>
  <div class="customizer-body">
    <ul class="nav customizer-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="ri-timer-line fs-6"></i></a>
      </li> --}}
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <!-- Tab 1 -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="p-3 border-bottom">
          <!-- Sidebar -->
          <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
          <div class="form-check mt-3">
            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
            <label class="form-check-label" for="theme-view">
              <span>Dark Theme</span>
            </label>
          </div>
          <div class="form-check mt-2">
            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar" />
            <label class="form-check-label" for="collapssidebar">
              <span>Collapse Sidebar</span>
            </label>
          </div>
          <div class="form-check mt-2">
            <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
            <label class="form-check-label" for="sidebar-position">
              <span>Fixed Sidebar</span>
            </label>
          </div>
          <div class="form-check mt-2">
            <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
            <label class="form-check-label" for="header-position">
              <span>Fixed Header</span>
            </label>
          </div>
          <div class="form-check mt-2">
            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
            <label class="form-check-label" for="boxed-layout">
              <span>Boxed Layout</span>
            </label>
          </div>
        </div>
        {{-- <div class="p-3 border-bottom">
          <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
          <ul class="theme-color m-0 p-0">
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
            </li>
          </ul>
        </div> --}}
        {{-- <div class="p-3 border-bottom">
          <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
          <ul class="theme-color m-0 p-0">
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
            </li>
          </ul>
        </div>
        <div class="p-3 border-bottom">
          <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
          <ul class="theme-color m-0 p-0">
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
            </li>
            <li class="theme-item list-inline-item me-1">
              <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
  </div>
</aside>
<div class="chat-windows"></div>
@endsection