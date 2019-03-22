@extends('layouts.admin.app')
@section('sidebar')
    @parent
    @include('layouts.admin.sidebar')
@endsection
@section('content')
    @if (session('status'))
        <div class="toast bg-primary fixed-top" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000" style="left: auto; top: 55px; right: 10px;">
            <div class="toast-header">
                <span data-feather="alert-circle" class="text-success mr-2"></span>
                <strong class="mr-auto">Itinerary</strong>
                <small>
                    @php
                        date_default_timezone_set('America/Lima');
                        echo date ("l m Y");
                    @endphp
                </small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body font-weight-bold text-white">
                {{ session('status') }}
            </div>
        </div>
    @endif
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
    @foreach($itinerary as $itinerario)
    <form action="{{route('admin_itinerary_update_path', $itinerario->id)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label class="font-weight-bold text-secondary small" for="txt_codigo">Code</label>
                    <input type="text" name="txt_codigo" class="form-control font-weight-bold" id="txt_codigo" placeholder="" value="{{$itinerario->codigo}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="font-weight-bold text-secondary small" for="txt_title">Title Package</label>
                    <input type="text" name="txt_title" class="form-control font-weight-bold" id="txt_title" value="{{$itinerario->titulo}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">Short</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_short">{{$itinerario->resumen}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">Extended</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_extended">{{$itinerario->descripcion}}</textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col text-center">
                {{--<a href="" class="btn btn-primary font-weight-bold">Update Package</a>--}}
                <button type="submit" class="btn btn-primary font-weight-bold">Create itinerary</button>
            </div>
        </div>
    </form>
    @endforeach
@endsection
@push('scripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4amx6h3rsnmj9whskr1vn3m6mpv7bi6qwwscvtbam4h0uic "></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.textarea-package',
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
        $(document).ready(function(){
            $('.toast').toast('show');
        });
    </script>
@endpush