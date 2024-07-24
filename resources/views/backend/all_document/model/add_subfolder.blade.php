<style>
    .modal {
    z-index: 1050; /* Default Bootstrap z-index for modals */
}

.select2-dropdown {
    z-index: 2000 !important; /* Higher than the modal z-index */
}
</style>
<div class="card w-100">
    <div class="d-flex border-bottom title-part-padding align-items-center">
        <div class="ms-auto flex-shrink-0">
            <div id="view-code5-1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-bottom">
                            <h4 class="card-title">Create Folder</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="POST" action="{{ route('backend.all_document.folders.store') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" placeholder="Folder Name" required name="folder_name" />
                                                <label><i data-feather="folder" class="sun"></i>&nbsp;Folder Name</label>
                                            </div>
                                            <div class="">
                                                <label>Select Folder Name</label>
                                                <select name="department_id" class="select2 js-programmatic form-control" style="width: 100%; height: 36px" required>
                                                    <option value="null" selected>--Select--</option>
                                                    @if (count($departments) > 0)
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}" data-id="{{ $department->id }}">{{ $department->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="d-md-flex align-items-center my-2">
                                                <div class="mt-3 mt-md-0 ms-auto">
                                                    <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
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
</div>

