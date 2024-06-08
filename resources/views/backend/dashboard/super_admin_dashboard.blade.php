@extends('layouts/backend/main')
@section('main-section')
  

<div class="page-wrapper">
  <div class="page-titles">
    <div class="row">
      <div class="col-lg-8 col-md-6 col-12 align-self-center">
        <!-- <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4> -->
        <h1 class="mb-0 fw-bold">Dashboard</h1>
      </div>
      <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
        <select class="form-select theme-select border-0" aria-label="Default select example">
          <option value="1">Today 23 March</option>
          <option value="2">Today 24 March</option>
          <option value="3">Today 25 March</option>
        </select>
        <a href="javascript:void(0)" class="btn btn-info d-flex align-items-center ms-2">
          <i class="ri-add-line me-1"></i>
          Add New
        </a>
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
<!-- ============================================================= -->
<!-- customizer Panel -->
<!-- ============================================================= -->
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
      {{-- <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
        <ul class="mailbox list-style-none mt-3">
          <li>
            <div class="message-center chat-scroll position-relative">
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle online"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                </div>
              </a>
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle busy"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                </div>
              </a>
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle away"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                </div>
              </a>
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle offline"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                </div>
              </a>
              <!-- Message -->
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/5.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle offline"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                </div>
              </a>
              <!-- Message -->
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/6.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle offline"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                </div>
              </a>
              <!-- Message -->
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/7.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle offline"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                </div>
              </a>
              <!-- Message -->
              <!-- Message -->
              <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                <span class="user-img position-relative d-inline-block">
                  <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle w-100" />
                  <span class="profile-status rounded-circle offline"></span>
                </span>
                <div class="w-75 d-inline-block v-middle ps-3">
                  <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                  <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                  <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                </div>
              </a>
              <!-- Message -->
            </div>
          </li>
        </ul>
      </div>
      <!-- End Tab 2 -->
      <!-- Tab 3 -->
      <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <h6 class="mt-3 mb-3">Activity Timeline</h6>
        <div class="steamline">
          <div class="sl-item">
            <div class="sl-left bg-light-success text-success">
              <i data-feather="user" class="feather-sm fill-white"></i>
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">
                Meeting today <span class="sl-date"> 5pm</span>
              </div>
              <div class="desc">you can write anything</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left bg-light-info text-info">
              <i data-feather="camera" class="feather-sm fill-white"></i>
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">Send documents to Clark</div>
              <div class="desc">Lorem Ipsum is simply</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left">
              <img class="rounded-circle" alt="user" src="assets/images/users/2.jpg" />
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">
                Go to the Doctor <span class="sl-date">5 minutes ago</span>
              </div>
              <div class="desc">Contrary to popular belief</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left">
              <img class="rounded-circle" alt="user" src="assets/images/users/1.jpg" />
            </div>
            <div class="sl-right">
              <div>
                <a href="javascript:void(0)">Stephen</a>
                <span class="sl-date">5 minutes ago</span>
              </div>
              <div class="desc">Approve meeting with tiger</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left bg-light-primary text-primary">
              <i data-feather="user" class="feather-sm fill-white"></i>
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">
                Meeting today <span class="sl-date"> 5pm</span>
              </div>
              <div class="desc">you can write anything</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left bg-light-info text-info">
              <i data-feather="send" class="feather-sm fill-white"></i>
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">Send documents to Clark</div>
              <div class="desc">Lorem Ipsum is simply</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left">
              <img class="rounded-circle" alt="user" src="assets/images/users/4.jpg" />
            </div>
            <div class="sl-right">
              <div class="font-weight-medium">
                Go to the Doctor <span class="sl-date">5 minutes ago</span>
              </div>
              <div class="desc">Contrary to popular belief</div>
            </div>
          </div>
          <div class="sl-item">
            <div class="sl-left">
              <img class="rounded-circle" alt="user" src="assets/images/users/6.jpg" />
            </div>
            <div class="sl-right">
              <div>
                <a href="javascript:void(0)">Stephen</a>
                <span class="sl-date">5 minutes ago</span>
              </div>
              <div class="desc">Approve meeting with tiger</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Tab 3 --> --}}
    </div>
  </div>
</aside>
<div class="chat-windows"></div>
@endsection