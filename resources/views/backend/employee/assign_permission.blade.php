@extends('layouts/backend/main')
@section('main-section')

<div class="page-wrapper">
    <div class="page-titles">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center"> 
                <h1 class="mb-0 fw-bold">Assign Permissions</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="#" method="POST">
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="name" class="form-label">Name :</label>
                        </div>
                        <div class="col-sm-9">
                          <p>{{$employee->name ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="email" class="form-label">Email :</label>
                        </div>
                        <div class="col-sm-9">
               <p>{{$employee->email ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="phone" class="form-label">Phone :</label>
                        </div>
                        <div class="col-sm-9">
                           <p>{{$employee->phone ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="card mt-3">
            <div class="card-header header-btn">
                <button type="button" class="btn btn-link" id="checkAll">CHECK ALL</button>
                <button type="button" class="btn btn-link" id="checkNone">CHECK NONE</button>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="form-group row config-system">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Dashboard</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_checkbox" id="config_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                 
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access-logs">
                        <div class="col-md-4">
                            <label for="access_logs" class="form-label">Access Logs</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_checkbox" id="access_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                   <input type="checkbox" name="access_checkbox" id="access_checkbox">
                                    <label for="edit_checkbox" class="form-label">Edit</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_aud_trail">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Access Audit Trail</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="checkbox" name="config_checkbox" id="access_aud_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 config_tenants">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Configure Tenants</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_tenants_checkbox" id="config_tenants_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_tenants_checkbox" id="config_tenants_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="config_tenants_checkbox" id="config_tenants_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 config_roles">
                        <div class="col-md-4">
                            <label for="config_roles" class="form-label">Configure Roles</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_roles_checkbox" id="config_roles_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_roles_checkbox" id="config_roles_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="config_roles_checkbox" id="config_roles_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 config_groups">
                        <div class="col-md-4">
                            <label for="config_roles" class="form-label">Configure Groups</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_groups_checkbox" id="config_groups_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_groups_checkbox" id="config_groups_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="config_groups_checkbox" id="config_groups_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 config_users">
                        <div class="col-md-4">
                            <label for="config_roles" class="form-label">Configure Users</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_users_checkbox" id="config_users_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="config_users_checkbox" id="config_users_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="config_users_checkbox" id="config_users_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_calls">
                        <div class="col-md-4">
                            <label for="config_roles" class="form-label">Access Own Calls</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="play_checkbox" class="form-label">Playback</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="on_demand_checkbox" class="form-label">on-demand</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="categorize_checkbox" class="form-label">Categorize</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="add_notes_checkbox" class="form-label">Add-notes</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="confidential_flag_checkbox" class="form-label">Confidential flag</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="clear_confi_flag_checkbox" class="form-label">Clear Confi. flag</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_calls_checkbox" id="access_calls_checkbox">
                                     <label for="delete_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider-1 mt-3">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_calls">
                        <div class="col-md-4">
                            <label for="config_roles" class="form-label">Access Other Calls</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="play_checkbox" class="form-label">Playback</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="on_demand_checkbox" class="form-label">on-demand</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="live_monitor" class="form-label">Live Monitor</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="categorize_checkbox" class="form-label">Categorize</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="add_notes_checkbox" class="form-label">Add Notes</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="confidential_flag_checkbox" class="form-label">Confidential flag</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="clear_confi_flag_checkbox" class="form-label">Clear Confi. flag</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_calls_checkbox" id="access_other_calls_checkbox">
                                     <label for="delete_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider-2 mt-3">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_confi_calls">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Access Confidential Calls</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="checkbox" name="access_confi_calls_checkbox" id="access_confi_calls_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_public_categories">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Access Public Categories</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_public_cate_checkbox" id="access_public_cate_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_public_cate_checkbox" id="access_public_cate_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_public_cate_checkbox" id="access_public_cate_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_own_notes">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Access Own Notes</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_own_notes_checkbox" id="access_own_notes_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_own_notes_checkbox" id="access_own_notes_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_own_notes_checkbox" id="access_own_notes_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2 access_other_notes">
                        <div class="col-md-4">
                            <label for="config_system" class="form-label">Access Other Notes</label>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_notes_checkbox" id="access_other_notes_checkbox">
                                    <label for="view_checkbox" class="form-label">View</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_notes_checkbox" id="access_other_notes_checkbox">
                                     <label for="edit_checkbox" class="form-label">Edit</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="checkbox" name="access_other_notes_checkbox" id="access_other_notes_checkbox">
                                     <label for="edit_checkbox" class="form-label">Delete</label>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-4 btn-col">
                            <div class="row">
                                <div class="col-sm-2 check-btn">
                                    <button type="button" class="btn btn-dark check-all-btn">all</button>
                                    <p class="divider">|</p>
                                    <button type="button" class="btn btn-dark check-none-btn">none</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
        



@section('javascript-section')
<script>
    function checkAll(name) {
        const checkboxes = document.querySelectorAll(`input[name=${name}]`);
        checkboxes.forEach(checkbox => checkbox.checked = true);
    }

    function checkNone(name) {
        const checkboxes = document.querySelectorAll(`input[name=${name}]`);
        checkboxes.forEach(checkbox => checkbox.checked = false);
    }

    document.getElementById('checkAll').addEventListener('click', () => {
        const checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(checkbox => checkbox.checked = true);
    });

    document.getElementById('checkNone').addEventListener('click', () => {
        const checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(checkbox => checkbox.checked = false);
    });

    $(document).ready(function() {
            $('#checkAll').click(function() {
                $('input[type="checkbox"]').prop('checked', true);
            });
            $('#checkNone').click(function() {
                $('input[type="checkbox"]').prop('checked', false);
            });
            
            $('.check-all-btn').click(function() {
                $(this).closest('.form-group').find('input[type="checkbox"]').prop('checked', true);
            });
            $('.check-none-btn').click(function() {
                $(this).closest('.form-group').find('input[type="checkbox"]').prop('checked', false);
            });
        });
</script>
@endsection
@endsection