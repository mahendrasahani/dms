@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h4 class="text-muted mb-0 fw-normal">Welcome {{ Auth::user()->name ?? '' }}</h4>
                    <h1 class="mb-0 fw-bold">Dashboard</h1>
                </div>
                <div
                    class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              ">
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
            <!-- row -->
            <div class="row">
                <div class="col-lg-4">
                    <div
                        class="
                  card
                  welcome-card2
                  overflow-hidden
                  bg-light-info
                  border-0
                ">
                        <div class="card-body">
                            <div class="d-flex align-items-start position-relative">
                                <div>
                                    <h4 class="fw-bold">Earnings</h4>
                                    <h2 class="text-primary">$63,438.78</h2>
                                </div>
                                <div class="ms-auto">
                                    <span
                                        class="
                          btn btn-lg btn-primary btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
                                        <i data-feather="dollar-sign"></i>
                                    </span>
                                </div>
                            </div>
                            <a href="#" class="btn btn-info position-relative mt-2">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <span
                                    class="
                        btn btn-xl btn-light-info
                        text-info
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                    <i data-feather="users"></i>
                                </span>
                                <h3 class="mt-3 pt-1 mb-0">
                                    39,354
                                    <span class="fs-2 ms-1 text-danger font-weight-medium">-9%</span>
                                </h3>
                                <h6 class="text-muted mb-0 fw-normal">Customers</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <span
                                    class="
                        btn btn-xl btn-light-warning
                        text-warning
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                    <i data-feather="package"></i>
                                </span>
                                <h3 class="mt-3 pt-1 mb-0">
                                    4396
                                    <span class="fs-2 ms-1 text-success font-weight-medium">+23%</span>
                                </h3>
                                <h6 class="text-muted mb-0 fw-normal">Products</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <span
                                    class="
                        btn btn-xl btn-light-danger
                        text-danger
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                    <i data-feather="bar-chart"></i>
                                </span>
                                <h3 class="mt-3 pt-1 mb-0 d-flex align-items-center">
                                    423,39
                                    <span class="fs-2 ms-1 text-success font-weight-medium">+38%</span>
                                </h3>
                                <h6 class="text-muted mb-0 fw-normal">Sales</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <span
                                    class="
                        btn btn-xl btn-light-success
                        text-success
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      ">
                                    <i data-feather="refresh-cw"></i>
                                </span>
                                <h3 class="mt-3 pt-1 mb-0">
                                    835
                                    <span class="fs-2 ms-1 text-danger font-weight-medium">-12%</span>
                                </h3>
                                <h6 class="text-muted mb-0 fw-normal">Refunds</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-md-8">
                    <table id="" class="table table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>User Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- column -->
                <div class="col-md-4">
                    <!-- earnings card -->
                    <table id="" class="table table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Hotel Loaction</th>
                                <th>Owner Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Taj</td>
                                <td>New Delhi</td>
                                <td>Anil Kumar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="footer">2021© All Rights Reserved by Wrappixel</footer>
    @endsection
