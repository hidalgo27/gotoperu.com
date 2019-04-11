@extends('layouts.page.default')
@section('content')

    <section class="d-md-block pb-5">
        @include('layouts.page.header')
        {{--<div id="overlay">--}}
            {{--<video class="" id="hero-vid" poster="{{asset('images/slider/package-1.jpg')}}" autoplay loop muted>--}}
                {{--<source src="{{asset('videos/land.mp4')}}" />--}}
                {{--<source src="{{asset('media/video6.m4v')}}" type="video/mp4" />--}}
                {{--<source src="{{asset('media/video6.webm')}}" type="video/webm" />--}}
                {{--<source  src="{{asset('media/video6.ogv')}}" type="video/ogg" />--}}
            {{--</video>--}}
            {{--<div id="state" class=""><span class="fa fa-pause"></span></div>--}}
            {{--<img id="hero-pic" class="d-none" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">--}}
            {{----}}
        {{--</div>--}}

    </section>
    
    <section class="d-md-none">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col">
                    <img src="{{asset('images/banners/itinerary/GTP40.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white  pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="row my-3">
                        <div class="col">
                            <h1 class="text-secondary font-weight-bold">7 Day Peru & Machu Picchu from USA</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <form role="form" id="a_form">
                                {{csrf_field()}}
                                <div class="row">
                                    {{--<div class="col">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="c_number" class="font-weight-bold text-secondary">NUMBER OF NIGHTS:</label>--}}
                                            {{--<select class="form-control form-control-lg" id="c_number">--}}
                                                {{--<option>1</option>--}}
                                                {{--<option>2</option>--}}
                                                {{--<option>3</option>--}}
                                                {{--<option>4</option>--}}
                                                {{--<option>5</option>--}}
                                                {{--<option>6+</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="c_travelers" class="font-weight-bold text-secondary">TRAVELERS <span class="text-primary">*</span></label>
                                            <select class="form-control form-control-lg" id="c_travelers">
                                                <option value="0">Select...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6+">6+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                                <label for="a_name" class="font-weight-bold text-secondary">NAME <span class="text-primary">*</span></label>
                                            <input type="text" class="form-control form-control-lg" id="a_name" placeholder="Your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="a_email" class="font-weight-bold text-secondary">EMAIL <span class="text-primary">*</span></label>
                                            <input type="email" class="form-control form-control-lg" id="a_email" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4">
                                    <div class="col-6 text-center">
                                        <button class="btn btn-lg btn-block btn-g-yellow font-weight-normal text-white" id="a_send" type="button" onclick="availability()">Check Availability</button>
                                        <i class="fas fa-spinner text-primary fa-3x fa-spin d-none" id="loader2"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col">
                            <div class="alert alert-success d-none" role="alert" id="a_alert">
                                <h4 class="alert-heading">THANK YOU FOR CONTACT US!</h4>
                                <p>YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS. :).</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-5 mt-4">
                    <div class="card bg-light">
                        <div class="card-header bg-dark py-4">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="text-white">Vacation Summary</h4>
                                </div>
                            </div>
                        </div>
                        <div class="bg-info p-3 sticky-top">
                            <div class="row align-items-center">
                                <div class="col">

                                    @foreach($aeropuerto as $airports)

                                    @endforeach
                                    <h5 class="font-weight-bold text-white">Total Price</h5>
                                    <small>Price per person <span class="d-block">Including all taxes and fees</span></small>
                                </div>
                                <div class="col text-right">
                                    @foreach($precio_aero as $precio_aeros)
                                        <span class="h2 font-weight-bold text-white"><sup>$</sup>{{$precio_aeros->precio}}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3">
                            <div class="row">
                                <div class="col">
                                    <h5 class="font-weight-bold text-secondary">7 Day Peru & Machu Picchu from USA</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="m-0">Travelers</p>
                                    <b class="font-weight-bold" id="v_travel"><span>?</span></b>
                                </div>
                                <div class="col text-center">
                                    <p class="m-0">Number of nights</p>
                                    <b class="font-weight-bold" id="v_number"><span>6</span></b>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <div class="row align-items-end">
                                <div class="col">
                                    <h6 class="text-secondary">Departure Airport:</h6>
                                    <div class="">
                                        <p class="m-0 h5 font-weight-bold">{{strtoupper($airports->aeropuerto)}} ({{strtoupper($airports->codigo)}}) — Lima</p>
                                        <small class="text-secondary">
                                            {{strftime("%B %d, %Y", strtotime(str_replace('-','/', $precio_aeros->fecha)))}}
                                        </small>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <p>Included</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // $('#c_number').change(function(){
            //     $('#v_number span').remove();
            //     var s_number = $('#c_number').val();
            //     $('#v_number').append('<span>'+s_number+'</span>');
            // });
            $('#c_travelers').change(function(){
                $('#v_travel span').remove();
                var s_travelers = $('#c_travelers').val();
                $('#v_travel').append('<span>'+s_travelers+'</span>');
            });

        </script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
        <script>
            function availability(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#a_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


                var s_name = $('#a_name').val();
                var s_email = $('#a_email').val();

                // var s_number = $('#c_number').val();
                var s_travelers = $('#c_travelers option:selected').val();

                var s_aeropuerto = '{{$airports->aeropuerto}}';
                var s_fecha = '{{$precio_aeros->fecha}}';
                var s_precio = '{{$precio_aeros->precio}}';


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#a_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#a_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if (s_travelers == 0){
                    $('#c_travelers').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {
                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        // "txt_number" : s_number,
                        "txt_travelers" : s_travelers,
                        "txt_fecha" : s_fecha,
                        "txt_precio" : s_precio,
                        "txt_aeropuerto" : s_aeropuerto
                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('availability_inquire_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#a_send').removeClass('show');
                            $("#a_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            $('#a_form')[0].reset();
                            $('#a_send').removeClass('d-none');
                            $('#a_send').addClass('show');
                            $("#loader2").removeClass('show');
                            $("#loader2").addClass('d-none');
                            $('#a_alert').removeClass('d-none');
                            $("#a_alert").addClass('show');
                            // $("#a_alert b").html(response);
                            $("#a_alert").fadeIn('slow');
                            $("#a_send").removeAttr("disabled");
                        }
                    });
                } else{
                    $("#a_send").removeAttr("disabled");
                }
            }

            $('#d_date').datepicker({
                dateFormat: 'mm-dd-y',
                changeMonth: true,
                changeYear: true
            });

        </script>
    @endpush

@stop