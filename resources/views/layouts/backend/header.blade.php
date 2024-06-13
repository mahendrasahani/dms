<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DMS</title>
    <link rel="stylesheet" href="{{ url('public/assets/backend/assets/libs/apexcharts/dist/apexcharts.css') }}" />
    <link href="{{ url('public/assets/backend/assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
    <link href="{{ url('public/assets/backend/assets/libs/fullcalendar/dist/fullcalendar.min.css') }}"rel="stylesheet" />
    <link rel="canonical" href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="{{ url('public/assets/backend/assets/extra-libs/taskboard/css/lobilist.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assets/backend/assets/extra-libs/taskboard/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/backend/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" />
    <link href="{{ url('public/assets/backend/dist/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ url('public/assets/backend/dist/css/custom.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/backend/assets/libs/dropzone/dist/min/dropzone.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/backend/assets/libs/select2/dist/css/select2.min.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#fec80e" stroke-width="2"></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#fec80e" stroke-width="2"></path>
            <path id="teabag" fill="#fec80e" fill-rule="evenodd" clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
            </path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" stroke="#fec80e"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#fec80e"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ri-close-line ri-menu-2-line fs-6"></i></a>
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <b class="logo-icon">
                            <img src="{{ url('public/assets/backend/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <img src="{{ url('public/assets/backend/assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="{{ url('public/assets/backend/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                            <img src="{{ url('public/assets/backend/assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ri-more-line fs-6"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-md-block" href="javascript:void(0)"><i
                                    data-feather="menu"></i></a>
                        </li>
                        <!-- search -->
                        <li class="nav-item search-box">
                            <a class="nav-link" href="javascript:void(0)">
                                <i data-feather="search"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control border-0" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i data-feather="x-circle" class="feather-sm text-muted"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link nav-sidebar" href="javascript:void(0)">
                                <i data-feather="shopping-cart"></i>
                            </a>
                        </li> --}}

                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="message-square"></i>
                                <div class="notify">
                                    <span class="point bg-warning"></span>
                                </div>
                            </a>
                            <div class=" dropdown-menu mailbox dropdown-menu-end dropdown-menu-animate-up "
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="rounded-top p-30 pb-2 d-flex align-items-center">
                                            <h3 class="card-title mb-0">Messages</h3>
                                            <span class="badge bg-primary ms-3">5 new</span>
                                        </div>
                                    </li>
                                    <li class="p-30 pt-0">
                                        <div class="message-center message-body position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class=" message-item px-2 d-flex align-items-center border-bottom py-3 ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="assets/images/users/1.jpg" alt="user"
                                                        class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0  mt-1 fs-4 font-weight-medium ">
                                                        Roman Joined the Team!
                                                    </h5>
                                                    <span
                                                        class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">Congratulate
                                                        him</span>
                                                    <span
                                                        class="  fs-2 text-nowrap  d-block  subtext  text-muted ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class=" message-item px-2 d-flex align-items-center border-bottom py-3 ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="assets/images/users/2.jpg" alt="user"
                                                        class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class="  message-title mb-0  mt-1 fs-4 font-weight-medium ">
                                                        New message received
                                                    </h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">Salma
                                                        sent you new message</span>
                                                    <span class=" fs-2 text-nowrap d-block subtext text-muted ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class=" message-item px-2 d-flex align-items-center border-bottom py-3 ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="assets/images/users/4.jpg" alt="user"
                                                        class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle busy"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0 mt-1 fs-4 font-weight-medium ">
                                                        New Payment received
                                                    </h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">Check
                                                        your earnings</span>
                                                    <span class=" fs-2 text-nowrap d-block subtext text-muted ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class=" message-item px-2 d-flex align-items-center py-3 ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="assets/images/users/5.jpg" alt="user"
                                                        class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle away"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0 mt-1 fs-4 font-weight-medium ">
                                                        Jolly completed tasks
                                                    </h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">Assign
                                                        her new tasks</span>
                                                    <span class=" fs-2 text-nowrap d-block subtext text-muted ">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class=" message-item px-2 d-flex align-items-center py-3 ">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="assets/images/users/1.jpg" alt="user"
                                                        class="rounded-circle w-100" />
                                                    <span class="profile-status rounded-circle online"></span>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0 mt-1 fs-4 font-weight-medium ">
                                                        Payment deducted
                                                    </h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">$230
                                                        deducted from account</span>
                                                    <span class=" fs-2 text-nowrap d-block subtext text-muted ">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mt-4">
                                            <a class="btn btn-info text-white" href="javascript:void(0);">
                                                See all messages
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="notify">
                                    <span class="point bg-primary"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="rounded-top p-30 pb-2 d-flex align-items-center">
                                            <h3 class="card-title mb-0">Notifications</h3>
                                            <span class="badge bg-warning ms-3">5 new</span>
                                        </div>
                                    </li>
                                    <li class="p-30 pt-0">
                                        <div class="message-center message-body position-relative">
                                            <a href="javascript:void(0)"
                                                class="message-item px-2 d-flex align-items-center py-3">
                                                <span class="user-img position-relative d-inline-block">
                                                    <img src="{{ url('public/assets/backend/assets/images/users/4.jpg')}}" alt="user"
                                                        class="rounded-circle w-100" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class="message-title mb-0 mt-1 fs-4 font-weight-medium "> Jolly completed tasks</h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted">Assign her new tasks</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class=" message-item px-2 d-flex align-items-center py-3">
                                                <span class="btn btn-light-danger text-danger btn-circle">
                                                    <i data-feather="credit-card" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0 mt-1 fs-4 font-weight-medium ">Payment deducted</h5>
                                                    <span class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted">$230 deducted from account</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mt-4">
                                            <a class="btn btn-info text-white" href="javascript:void(0);">
                                                See all notifications
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown profile-dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center"  href="{{route('backend.user_profile.index')}}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ url('public/assets/backend/assets/images/users/user.jpg') }}" alt="user" width="30" class="profile-pic rounded-circle" />
                                <div class="d-none d-md-flex">
                                    <span class="ms-2">Hi,
                                        <span class="text-dark fw-bold">{{Auth::user()->name}}</span></span>
                                    <span>
                                        <i data-feather="chevron-down" class="feather-sm"></i>
                                    </span>
                                </div>
                            </a>
                            <div class=" dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up ">
                                <ul class="list-style-none">
                                    <li class="p-30 pb-2">
                                        <div class="rounded-top d-flex align-items-center">
                                            <h3 class="card-title mb-0">User Profile</h3>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="link py-0">
                                                    <i data-feather="x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flexalign-items-centermt-4pt-3pb-4border-bottom">
                                            <img src="{{ url('public/assets/backend/assets/images/users/user.jpg')}}" alt="user" width="90" class="rounded-circle" />
                                            <div class="ms-4">
                                                <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                                @php
                                                $user = Auth::user()->role_type_id;
                                                @endphp
                                                @if($user === 1)
                                                <span class="text-muted">Super Admin </span>
                                                @elseif ($user === 2)
                                                <span class="text-muted"> Admin </span>
                                                @elseif ($user === 3)
                                                <span class="text-muted"> Employee </span>
                                                @elseif ($user === 4)
                                                <span class="text-muted"> Staff </span>
                                                @endif
                                                <p class="text-muted mb-0 mt-1">
                                                    <i data-feather="mail" class="feather-sm me-1"></i>
                                                    {{Auth::user()->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-30 pt-0">
                                        <div class="message-center message-body position-relative"
                                            style="height: 210px">
                                            <a href="{{route('backend.user_profile.index')}}"
                                                class=" message-item px-2 d-flex align-items-center border-bottom py-3">
                                                <span class="btn btn-light-info btn-rounded-lg text-info">
                                                    <i data-feather="dollar-sign" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class=" message-title mb-0 mt-1 fs-4 font-weight-medium">
                                                        My Profile
                                                    </h5>
                                                    <span
                                                        class=" fs-3 text-nowrap d-block time text-truncate fw-normal mt-1 text-muted ">Account
                                                        Settings</span>
                                                </div>
                                            </a>
                                            {{-- <a href="javascript:void(0)"
                                                class=" message-item px-2 d-flex align-items-center border-bottom py-3">
                                                <span class="btn btn-light-success btn-rounded-lgtext-success ">
                                                    <i data-feather="shield" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5
                                                        class="message-title mb-0mt-1 fs-4 font-weight-medium d-flex align-items-center ">
                                                        My Inbox
                                                        <span class="mt-n2 ms-1"><i
                                                                class="mdi mdi-checkbox-blank-circlefs-1text-success"></i></span>
                                                    </h5>
                                                    <span
                                                        class="fs-3text-nowrapd-blocktimetext-truncatefw-normalmt-1text-muted">Messages
                                                        & Emails</span>
                                                </div>
                                            </a> --}}
                                            {{-- <a href="javascript:void(0)"
                                                class="message-itempx-2d-flexalign-items-centerborder-bottompy-3">
                                                <span class="btn btn-light-danger btn-rounded-lgtext-danger">
                                                    <i data-feather="credit-card" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class="message-titlemb-0mt-1fs-4font-weight-medium">
                                                        My Tasks
                                                    </h5>
                                                    <span
                                                        class="fs-3text-nowrapd-blocktimetext-truncatefw-normalmt-1text-muted">To-do
                                                        and Daily Tasks</span>
                                                </div>
                                            </a>
                                            <div class="mt-4">
                                                <a href="javascript:void(0)"
                                                    class="text-darkfs-3font-weight-mediumhover-primary">
                                                    Account Settings
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="text-darkfs-3font-weight-mediumhover-primary">
                                                    Frequently Asked Questions
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="text-darkfs-3font-weight-mediumhover-primary">
                                                    Pricing
                                                </a>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="mt-4">
                                            <a class="btn btn-info text-white" href="">
                                                Logout
                                            </a>
                                        </div> --}}
                                        {{-- <li class="nav-item" id="login_logout_btn"> --}}
                                            @if(Auth::check())
                                                <form method="POST" action="{{ route('logout') }}">
                                                      @csrf
                                                      <div class="btn btn-info text-white">
                                                        <input type="submit" class="nav-link" value="LOGOUT" style="border:none; background:transparent">
                                                      </div>
                                                </form>
                                             @else
                                            <a class="nav-link" href="#" id="login_modal"><i class="fa-regular fa-circle-user"></i>LOGIN</a>
                                          @endif 
                                          {{-- </li> --}}
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        {{-- For Super Admin  --}}
                        @if ($user == 1)
                            
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false">
                                <i data-feather="pie-chart"></i><span class="hide-menu">Dashboards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('backend.main_category.index')}}" class="sidebar-link  waves-effect waves-dark"><i class="ri-layout-top-2-line"></i>
                                <span class="hide-menu">All Main Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('backend.sub_category.index')}}" class="sidebar-link  waves-effect waves-dark"><i class="ri-layout-right-2-line"></i>
                                <span class="hide-menu">All Sub Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('backend.all_document.index')}}" aria-expanded="false">
                                <i class=" fas fa-file-alt"></i>
                                <span class="hide-menu">All Document</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark"href="{{route('backend.hotels.index')}}" aria-expanded="false">
                                <i data-feather="home"></i>
                                <span class="hide-menu">Hotels</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('backend.login_audit.index')}}" aria-expanded="false">
                                <i data-feather="user-check"></i>
                                <span class="hide-menu">Login Audits</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('backend.employee.index')}}" aria-expanded="false"><i data-feather="users"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('backend.create_role.index')}}" aria-expanded="false">
                                <i data-feather="target"></i>
                                <span class="hide-menu">Create Role</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('backend.database_entry.index')}}" aria-expanded="false"><i data-feather="users"></i>
                                <span class="hide-menu">Entry</span>
                            </a>
                        </li>
                        @elseif ($user == 2)


                        {{-- For Admin --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false">
                                <i data-feather="pie-chart"></i><span class="hide-menu">Dashboards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('backend.create_role.index')}}" aria-expanded="false">
                                <i data-feather="target"></i>
                                <span class="hide-menu">Create Role</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="{{route('backend.login_audit.index')}}" aria-expanded="false">
                                <i data-feather="user-check"></i>
                                <span class="hide-menu">Login Audits</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{route('backend.employee.index')}}" aria-expanded="false"><i data-feather="users"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
