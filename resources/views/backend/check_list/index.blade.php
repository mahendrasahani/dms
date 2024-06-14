@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <h1 class="mb-0 fw-bold">Check List</h1>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                 <a href="{{route('backend.all_document.create')}}">
                <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-1-modal">
                    <i class="ri-add-line me-1"></i>
                    Add New List
                </button>
                 </a>
            </div>
        </div>
    </div>
<div class="card-body">
    <form>
        <div class="d-flex align-items-center mb-3">
            <input type="checkbox" class="form-check-input me-2 heading-checkbox" id="heading-checkbox ">
            <h3 class="mb-0">Epabx</h3>
        </div>
        <div class="section-container">
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">PRI Line Connection / SIP</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model"  disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                </div>
                <div class="col-md-4 mt-2">
                    <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                </div>
                <div class="col-md-4 mt-2">
                    <select name="status" id="status"class="form-control"  disabled>
                        <option value="0" selected>Select Status</option>
                        <option value="1">Done</option>
                        <option value="2">Processing</option>
                    </select>
                </div>
            </div>
        </div>
        

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">IPBX</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Epabx Main Unit Installation</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Epabx Main 400 Pair Mdf Installation</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Epabx Extension Testing At Each Floor</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Digital Phones</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Guest Room Handsets</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Guest Bath-Room Handsets</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div> 
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Epabx Points</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Office Phone </label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Extenssion List And Programing </label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center mt-3">
        <input type="checkbox" class="form-check-input me-2 heading-checkbox" id="heading-checkbox ">
        <h3 class="mb-0">Cctv</h3>
    </div>
    <div class="section-container">
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Camera Installation</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model"  disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                </div>
                <div class="col-md-4 mt-2">
                    <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                </div>
                <div class="col-md-4 mt-2">
                    <select name="status" id="status"class="form-control"  disabled>
                        <option value="0" selected>Select Status</option>
                        <option value="1">Done</option>
                        <option value="2">Processing</option>
                    </select>
                </div>
            </div>
        </div>
        

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Camera</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">NVR Encoder Installation</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Wiring</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">Camera Display Screen</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">24 Port POE Switch</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3 label-1">
            <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
            <label class="col-sm-2 col-form-label">8 TB surveillance Hdd</label>
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_model" id="make_model" placeholder="Make Model" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="make_and_manufacture" id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="unit_location" id="unit_location" placeholder="Unit Location" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" disabled>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select name="status" id="status"class="form-control" disabled>
                            <option value="0" selected>Select Status</option>
                            <option value="1">Done</option>
                            <option value="2">Processing</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>    
</div>  
</div>

@section('javascript-section')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headingCheckbox = document.querySelector('.heading-checkbox');
        const allCheckboxes = document.querySelectorAll('.form-check-input:not(.heading-checkbox)');

        headingCheckbox.addEventListener('change', function() {
            allCheckboxes.forEach(checkbox => {
                checkbox.checked = headingCheckbox.checked;
            });
        });

        allCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                headingCheckbox.checked = Array.from(allCheckboxes).every(cb => cb.checked);
            });
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        const mainCheckbox = document.querySelector('.heading-checkbox');
        const fieldCheckboxes = document.querySelectorAll('.field-checkbox');
        mainCheckbox.addEventListener('change', function () {
            fieldCheckboxes.forEach(checkbox => {
                checkbox.checked = mainCheckbox.checked;
                toggleFields(checkbox, mainCheckbox.checked);
            });
        });

        fieldCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function () {
                toggleFields(checkbox, checkbox.checked);
                console.log(`Field checkbox ${index + 1} state changed:`, checkbox.checked);
            });
        });

        function toggleFields(checkbox, isChecked) {
            const row = checkbox.closest('.label-1');
            const inputs = row.querySelectorAll('input:not(.field-checkbox), select');
            inputs.forEach(input => {
                input.disabled = !isChecked;
            });
        }
    });
</script>


@endsection
@endsection