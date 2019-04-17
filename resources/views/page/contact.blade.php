@extends('layouts.page.default')
@section('content')

    {{--<section class="mb-4">--}}
    {{--<img src="https://gotoperu.com/img/slider/testimonials.jpg" alt="" class="w-100">--}}
    {{--</section>--}}

    <section class="header-video d-none d-md-block">
        @include('layouts.page.header')
        <div id="overlay" class="overlay-img">
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
            {{--<source src="{{asset('media/video6.mp4')}}" />--}}
            {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
            {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
            {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}

            <img src="{{asset('images/contact2.jpg')}}" alt="" id="hero-vid" class="banner-itinerary">
{{--            @include('layouts.page.menu-custom')--}}

        </div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row content-header-row align-items-center">

                    <div class="col">

                        <div class="row my-3 justify-content-center text-white font-weight-bold h2">
                            Contact Us
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <a href="#content-page" class="text-white">
                                    <i data-feather="chevron-down" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.page.menu')
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/testimonials.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white m-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{Breadcrumbs::render('contact')}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="font-weight-bold text-g-green text-center"><strong>Thank you for your interest in GOTOPERU</strong></h1>
                    <p class="lead text-center font-weight-normal">Please fill out this form and a Travel Advisor will contact you as soon as possible. Your personal and contact information will remain confidential and will be used solely in accordance with our Privacy Policy.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2 class="text-secondary h5"><strong>Contact form:</strong></h2>
                    <form class="card bg-light mb-4" id="c_form" role="form">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm col-md-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="c_name" placeholder="FULL NAME" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                </div>
                                                <input type="email" class="form-control" id="c_email" placeholder="Email address" aria-label="Phone" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-12 col-sm col-md-12 col-lg-6">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>PHONE</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="tel" class="form-control" id="c_phone" placeholder="PHONE NUMBER" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">

                                    <div class="row">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>CITY</strong></h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="c_city" placeholder="CITY" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-12 col-sm col-md-12 col-lg-6">

                                    <div class="row">
                                        <div class="col">
                                            <h2 class="text-secondary h5"><strong>ABOUT YOU?</strong></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="exampleFormControlSelect1"><i class="fa fa-question-circle"></i></span>
                                                </div>
                                                <select class="form-control" id="c_about">
                                                    <option class="Travel Inquire"> Travel Inquire</option>
                                                    <option value="Travel Agents">Travel Agent</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="form-group mt-4">
                                <h2 class="text-secondary h5"><strong>WRITE YOUR MESSAGE</strong></h2>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                    </div>
                                    <textarea class="form-control" id="c_comment" aria-label="With textarea"></textarea>
                                </div>
                            </div>

                            <div class="row justify-content-center py-4">
                                <div class="col-6 text-center">
                                    <button type="button" class="btn btn-primary btn-block btn-lg" onclick="contactus()" id="c_submit">Send</button>
                                    <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="c_load"></i>

                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center d-none" id="c_alert">
                                <div class="col-10">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <b><strong>THANK YOU</strong> for contacting us, a <strong>GOTOPERU</strong> representative will contact you shortly. </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="text-secondary h5"><strong>Or also you can contact us:</strong></h2>
                    <ul class="card p-0 sticky-top sticky-top-50">
                        <div class="card-body">
                            <p class="pb-3 mb-3 border-bottom"><i class="fa fa-map-marker-alt"></i> Av. Sol 948, Cusco - Cusco</p>
                            <p class="pb-3 mb-3 border-bottom"><i class="fa fa-phone"></i> <strong>PERU:</strong> +51 (084) 206931 Headquarters</p>
                            <p class="pb-3 mb-3 border-bottom"><i class="fa fa-phone"></i> <b>Worldwide:</b> (202) 996-3000 USA number</p>
                            <p class="pb-3 mb-3 border-bottom"><i class="fa fa-envelope"></i> info@gotoperu.com</p>
                            <i class="mb-0 text-g-yellow">Director : Paul Catano : paul@gotoperu.com</i>
                        </div>
                        {{--<li><i class="fa fa-page4"> Av. Collasuyo 896</i></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.page.form-quote')
    <script>
        //formulario design
        function contactus(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').val()
                }
            });

            $("#c_submit").attr("disabled", true);

            var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


            var s_name = $("#c_name").val();
            var s_email = $("#c_email").val();
            var s_phone = $("#c_phone").val();
            var s_city = $('#c_city').val();
            var s_about = $('#c_about').val();
            var s_comment = $('#c_comment').val();


            if (filter.test(s_email)){
                sendMail = "true";
            } else{
                $('#c_email').css("border-bottom", "2px solid #FF0000");
                sendMail = "false";
            }
            if (s_name.length == 0 ){
                $('#c_name').css("border-bottom", "2px solid #FF0000");
                var sendMail = "false";
            }

            if(sendMail == "true"){
                var datos = {
                    "txt_name" : s_name,
                    "txt_email" : s_email,
                    "txt_phone" : s_phone,
                    "txt_city" : s_city,
                    "txt_about" : s_about,
                    "txt_comment" : s_comment

                };
                $.ajax({
                    data:  datos,
                    url:   "{{route('contact_s_path')}}",
                    type:  'post',

                    beforeSend: function () {

                        // $('#de_send').removeClass('show');
                        $("#c_submit").addClass('d-none');
                        $("#c_load").removeClass('d-none');
                    },
                    success:  function (response) {
                        $('#c_form')[0].reset();
                        $('#c_submit').removeClass('d-none');
                        $("#c_load").addClass('d-none');
                        $('#c_alert').removeClass('d-none');
                        // $("#h_alert b").html(response);
                        $("#c_alert").fadeIn('slow');
                        $("#c_submit").removeAttr("disabled");
                    }
                });
            } else{
                $("#c_submit").removeAttr("disabled");
            }
        }
    </script>
@stop