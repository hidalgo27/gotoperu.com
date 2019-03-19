@extends('layouts.admin.app')
@section('sidebar')
    @parent
    @include('layouts.admin.sidebar')
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb small font-weight-bold p-0 m-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">1. Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <div class="col-9">
            <div class="">
                <div class="">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_codigo">Code</label>
                                <input type="text" name="txt_codigo" class="form-control font-weight-bold" id="txt_codigo" placeholder="GTP3000">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_title_package">Title Package</label>
                                <input type="text" name="txt_title_package" class="form-control font-weight-bold" id="txt_title_package">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label class="font-weight-bold text-secondary small" for="txt_duration">Duration</label>
                                <input type="number" name="txt_duration" class="form-control font-weight-bold" id="txt_duration">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <textarea id="textarea-package"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6>Category</h6>
                    <hr>
                    <span data-feather="check"></span> Hola
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a href="" class="text-danger font-weight-bold small">Move to trash</a>
                        </div>
                        <div class="col">
                            <a href="" class="btn btn-sm font-weight-bold btn-primary btn-block">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4amx6h3rsnmj9whskr1vn3m6mpv7bi6qwwscvtbam4h0uic "></script>
    <script>
        tinymce.init({
            selector: 'textarea#textarea-package',
            height: 250,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
            ]
        });
    </script>
@endpush