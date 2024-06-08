

@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4>
                <h1 class="mb-0 fw-bold">Login Audit</h1>
            </div>
            <div class="
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>IP Address</th>
                                        <th>Date & time</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td> $320,800</td>
                                        <td>$320,800</td>
                                        <td>-60.69754</td>
                                        <th>1</th>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        
                                        <td>-60.69754</td>
                                        <th>1</th>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        
                                        <td>-60.69754</td>
                                        <th>1</th>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        
                                        <td>-60.69754</td>
                                        <th>1</th>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        
                                        <td>-60.69754</td>
                                        <th>1</th>
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
                                        <th>Longitude</th>
                                        <th>status</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    <!-- <footer class="footer">2021© All Rights Reserved by Wrappixel</footer> -->
</div>
@endsection