@extends('layouts/backend/main')
@section('main-section')


<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #ffffff;
    
    } 
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color:#0bb2fb;
        border: 1px solid #0bb2fb;
    } 
    .js-example-basic-multiple {
        width: 100%; 
        box-sizing: border-box; 
    } 
    .js-example-basic-multiple option {
        white-space: nowrap; 
    } 
</style>
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="link"><i class="ri-home-3-line fs-5"></i></a></li> 
                    <li class="breadcrumb-item active" aria-current="page">Add Document</li>
                </ol>
            </nav>
                    <h1 class="mb-0 fw-bold">Add Document</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mt-4" action="{{route('backend.document.direct_upload_store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="m_id" value="{{$decrypt_m_id}}"/>
                                <input type="hidden" name="s_id" value="{{$decrypt_s_id}}"/>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <lable>Document Title</lable>
                                        <input type="text" class="form-control" name="document_title" id="document_title" placeholder="Document Title" />
                                    </div>
                                       
                                    <div class="col-md-6 mt-3">
                                        <input type="file" name="document" id="document" class="form-control" required accept=".pdf,.png,.doc,.docx,.xls,.xlsx,.xlsm,.pptx,.gif,.jpg"/>
                                        @error('document')
                                            <p style="color:red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- <div class="mt-3 check-box">
                                        <input class="form-check-input" type="checkbox" id="check1" name="option1"
                                            value="something">
                                        <label class="form-check-label">Can Download?</label>
                                    </div> -->
                                    <div class="mt-3">
                                        <button
                                            class=" btn rounded-pill px-4 btn-light-success text-success font-weight-medium waves-effect waves-light "
                                            type="submit">
                                            <i data-feather="send" class="feather-sm ms-2 fill-white"></i>
                                            Upload
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
 

@section('javascript-section')
    <script>
        $("#department").select2({
            placeholder: "Select Department",
        }); 
        $("#sub_folder").select2({
            placeholder: "Select Folder",
        }); 
    </script>
    <script>
        $(document).on("change", "#department", async function(){
            let html_to_append = '<option value=""></option>';
            let department_id = $(this).val();
            let url = "{{route('api.get_sub_folder_list')}}";
            let response = await fetch(`${url}/?department_id=${department_id}`);
            let responseData = await response.json(); 
           if(responseData.status === 'success'){
            responseData.folders.forEach(element => {
                html_to_append += `<option value="${element.id}">${element.name}</option>`;
            });
            $(sub_folder).html(html_to_append);
           }
        })
    </script>

    <!-- <script>
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script> -->
@endsection
@endsection
