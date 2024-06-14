
@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <h1 class="mb-0 fw-bold">All Document</h1>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                 <a href="{{route('backend.document.create')}}">
                <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-1-modal">
                    <i class="ri-add-line me-1"></i>
                    Add New Document
                </button>
            </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4>All Document</h4>
                        <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Search By Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Name" require="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Search By Category </label>
                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Category"  require="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefaultUsername">Search By Created Date</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationDefaultUsername" placeholder="Created Date" aria-describedby="inputGroupPrepend2" require="" >
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Main Category</th>
                                        <th>Sub Category</th>
                                        <th>Storage</th>
                                        <th>Created Date</th>
                                        <th>Expired Date </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td> 2011/07/25 </td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>

                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>

                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>

                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>

                                        <td>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>IP Address</th>
                                        <th>Date & time</th>
                                        <th>Latitude</th>
                                        <th>
                                            <div class="dropdown dropstart">
                                                <a href="#" class="link" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" class="feather-sm"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Comment</a></li>
                                                    <li><a class="dropdown-item" href="#">Download</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card w-100">
            <div class="d-flexborder-bottomtitle-part-paddingalign-items-center">
                <div class="ms-auto flex-shrink-0">
                    <button class="btn btn-light-primary text-primary rounded-pill text-decoration-none btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-1-modal">
                        <i data-feather="code" class="feather-sm fill-white"></i>
                    </button>
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
                                                <h4 class="card-title">Add Main Category</h4>
                                                <form>
                                                    <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" placeholder="Category Name" require=""/>
                                                            <label><i data-feather="user" class="feather-sm text-dark fill-white me-2"></i>Category Name</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control" placeholder="Discription" />
                                                            <label><i data-feather="mail" class="feather-sm text-dark fill-white me-2"></i>Discription</label>
                                                        </div>
                                                    <div class="d-md-flex align-items-center">
                                                        <div class="mt-3 mt-md-0 ms-auto">
                                                            <button type="submit" class="btn  btn-info font-weight-medium rounded-pillc px-4">
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
        </div> --}}
    </div>
</div>
@endsection