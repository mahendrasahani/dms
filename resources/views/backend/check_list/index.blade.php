@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Check List</h1>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                    <div class="col-md-6 mt-2">
                        <select name="status" id=""class="select2 js-programmatic "
                            style="width: 100%; height: 36px">
                            <option value="0" selected>Select Department</option>
                            <option value="0">IT Department</option>
                            <option value="0">HR Department</option>
                            <option value="0">Accounts</option>
                        </select>
                    </div>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-1">
                        <input type="checkbox" class="form-check-input me-2 field-checkbox" id="field-checkbox">
                        <label class="col-sm-2 col-form-label">IPBX</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 cctv-checkbox">
                    <h3 class="mb-0">CCTV</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mt-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">Camera Installation</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">Camera</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">NVR Encoder Installation</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">Wiring</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">Camera Display Screen</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">24 Port POE Switch</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cctv_field-checkbox">
                        <label class="col-sm-2 col-form-label">8 TB surveillance Hdd</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 sound-checkbox">
                    <h3 class="mb-0">Sound System</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 sound_field-checkbox">
                        <label class="col-sm-2 col-form-label">Speaker Installation</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 sound_field-checkbox">
                        <label class="col-sm-2 col-form-label">Amplifier Installation</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 sound_field-checkbox">
                        <label class="col-sm-2 col-form-label">Volume Installation</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 sound_field-checkbox">
                        <label class="col-sm-2 col-form-label">Pen Drive</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 sound_field-checkbox">
                        <label class="col-sm-2 col-form-label">Racks</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 it-checkbox">
                    <h3 class="mb-0">IT HARDWARE</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Laptop</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Desktop</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Colour Printer</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Laser Printers All In One</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Online UPS For CCTV,IPBX</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 it_field-checkbox">
                        <label class="col-sm-2 col-form-label">Pos Printers</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 network-checkbox">
                    <h3 class="mb-0">Networking</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 network_field-checkbox">
                        <label class="col-sm-2 col-form-label">Network Switches 24ports</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 network_field-checkbox">
                        <label class="col-sm-2 col-form-label">Network Rack</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 network_field-checkbox">
                        <label class="col-sm-2 col-form-label">Patch Panel </label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 network_field-checkbox">
                        <label class="col-sm-2 col-form-label">Patch Chords</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 network_field-checkbox">
                        <label class="col-sm-2 col-form-label">Io Point Termination On Each Floor & Office</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 software-checkbox">
                    <h3 class="mb-0">Software</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 software_field-checkbox">
                        <label class="col-sm-2 col-form-label">Hotel Management Cloud Base Software Cygnett Cloud</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 software_field-checkbox">
                        <label class="col-sm-2 col-form-label">Cygnett Cloud PMS Installtion</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 software_field-checkbox">
                        <label class="col-sm-2 col-form-label">Anti Virus Software As Per user Quick Heal</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 software_field-checkbox">
                        <label class="col-sm-2 col-form-label">Windows & Ms Office</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 lised-checkbox">
                    <h3 class="mb-0">Lised Line</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 lised_field-checkbox">
                        <label class="col-sm-2 col-form-label">Lised Line</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 lised_field-checkbox">
                        <label class="col-sm-2 col-form-label">Wi-fi Hotspot Service Provider</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 lised_field-checkbox">
                        <label class="col-sm-2 col-form-label">Wi Fi Service Provider</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 brodband-checkbox">
                    <h3 class="mb-0">Broadband</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 brodband_field-checkbox">
                        <label class="col-sm-2 col-form-label">Isp For Broadband</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 attendance-checkbox">
                    <h3 class="mb-0">Attendance Systen</h3>
                </div>

                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 attendance_field-checkbox">
                        <label class="col-sm-2 col-form-label">Wiring For Attendance System</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 attendance_field-checkbox">
                        <label class="col-sm-2 col-form-label">Attendance System</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 cable-checkbox">
                    <h3 class="mb-0">Cable TV</h3>
                </div>
                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cable_field-checkbox">
                        <label class="col-sm-2 col-form-label">Setuptop box</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 cable_field-checkbox">
                        <label class="col-sm-2 col-form-label">connection in all rooms</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div> 

                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 paSystem-checkbox">
                    <h3 class="mb-0">PA System</h3>
                </div>
                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 paSystem_field-checkbox">
                        <label class="col-sm-2 col-form-label">Mic Amplifire</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 paSystem_field-checkbox">
                        <label class="col-sm-2 col-form-label">Wiring For Hooter</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
 
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 mail-checkbox">
                    <h3 class="mb-0">E-Mail For All Department</h3>
                </div>
                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 mail_field-checkbox">
                        <label class="col-sm-2 col-form-label">G-suite Cygnett Email I'd as per user</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="d-flex align-items-center mt-3">
                    <input type="checkbox" class="form-check-input me-2 security-checkbox">
                    <h3 class="mb-0">Computer Security </h3>
                </div>
                <div class="section-container">
                    <div class="d-flex align-items-center mb-3 label-2">
                        <input type="checkbox" class="form-check-input me-2 security_field-checkbox">
                        <label class="col-sm-2 col-form-label">Firwall</label>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_model" id="make_model"
                                        placeholder="Make Model" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="make_and_manufacture"
                                        id="make_and_manufacture" placeholder="Make and manufactur" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="unit_location" id="unit_location"
                                        placeholder="Unit Location" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="number" class="form-control" name="qty" id="qty"
                                        placeholder="Qty" disabled>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <select name="status" id=""class="select2 js-programmatic form-control"
                                        style="width: 100%; height: 36px" disabled>
                                        <option value="0" selected>Select Status</option>
                                        <option value="1">New</option>
                                        <option value="2">Processing</option>
                                        <option value="3">Complete</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <input type="text" class="form-control" name="remark" id="remark"
                                        placeholder="Remarks" disabled>
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
        $(document).ready(function() {
            $('.select2 js-programmatic').select2();
        });
    </script>
@endsection
@endsection
