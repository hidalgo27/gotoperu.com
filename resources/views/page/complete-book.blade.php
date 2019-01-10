@extends('layouts.page.default')
@section('content')

    <section class="d-none d-md-block pb-5">
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
                <div class="col-7">
                    <div class="row my-3">
                        <div class="col">
                            <h1 class="text-secondary font-weight-bold">7- or 10-Day Peru Guided Tour with Hotels and Air from Kaypi Peru Tours</h1>
                            <h6 class="text-secondary">3 NIGHTS | 2 PEOPLE</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="airport" class="h5 text-secondary">NUMBER OF NIGHTS:</label>
                                            <select class="form-control form-control-lg" id="airport">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="airport" class="h5 text-secondary">TRAVELERS:</label>
                                            <select class="form-control form-control-lg" id="airport">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="airport" class="h5 text-secondary">Departure Airport:</label>
                                            <select class="form-control form-control-lg" id="airport">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="airport" class="h5 text-secondary">Departure MONTH:</label>
                                            <select class="form-control form-control-lg" id="airport">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold text-secondary">EMAIL</label>
                                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center my-4">
                                    <div class="col-6">
                                        <button class="btn btn-lg btn-block btn-g-yellow font-weight-normal text-white" id="d_send" type="button" onclick="design()">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col mt-4">
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
                                    <h5 class="font-weight-bold text-white">Total Price</h5>
                                    <small>Avg price per person: $631.54 <span class="d-block">Including all taxes and fees</span></small>
                                </div>
                                <div class="col text-right">
                                    <span class="h2 font-weight-bold text-white"><sup>$</sup>1263</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3">
                            <div class="row">
                                <div class="col">
                                    <h5 class="font-weight-bold text-secondary">Explore Cartagena City</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <p class="m-0">Travelers</p>
                                    <b class="font-weight-bold">6</b>
                                </div>
                                <div class="col text-center">
                                    <p class="m-0">Number of nights</p>
                                    <b class="font-weight-bold">3</b>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 bg-white">
                            <div class="row align-items-end">
                                <div class="col">
                                    <h6 class="text-secondary">Departure Airport:</h6>
                                    <div class="">
                                        <p class="m-0 h5 font-weight-bold">MIA — CTG</p>
                                        <small class="text-secondary">Thu, Oct 25</small>
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
            function inquire(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').val()
                    }
                });

                $("#d_send").attr("disabled", true);

                var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;



                var s_accommodation = document.getElementsByName('accommodation[]');
                var $accommodation = "";
                for (var i = 0, l = s_accommodation.length; i < l; i++) {
                    if (s_accommodation[i].checked) {
                        $accommodation += s_accommodation[i].value+' , ';
                    }
                }
                s_accommodation = $accommodation.substring(0,$accommodation.length-3);


                var s_number = $(".number:checked").val();

                var s_date = $('#d_date').val();
                var s_tel = $('#d_tel').val();
                var s_name = $('#d_name').val();
                var s_email = $('#d_email').val();
                var s_package = $('#d_package').val();


                var s_comment = $('#d_comment').val();


                if (filter.test(s_email)){
                    sendMail = "true";
                } else{
                    $('#d_email').css("border-bottom", "2px solid #FF0000");
                    sendMail = "false";
                }
                if (s_name.length == 0 ){
                    $('#d_name').css("border-bottom", "2px solid #FF0000");
                    var sendMail = "false";
                }

                if(sendMail == "true"){
                    var datos = {

                        "txt_accommodation" : s_accommodation,
                        "txt_number" : s_number,

                        "txt_date" : s_date,
                        "txt_tel" : s_tel,
                        "txt_name" : s_name,
                        "txt_email" : s_email,
                        "txt_package" : s_package,
                        "txt_comment" : s_comment

                    };
                    $.ajax({
                        data:  datos,
                        url:   "{{route('inquire_path')}}",
                        type:  'post',

                        beforeSend: function () {

                            $('#d_send').removeClass('show');
                            $("#d_send").addClass('d-none');

                            $("#loader2").removeClass('d-none');
                            $("#loader2").addClass('show');
                        },
                        success:  function (response) {
                            $('#d_form')[0].reset();
                            $('#d_send').removeClass('d-none');
                            $('#d_send').addClass('show');
                            $("#loader2").removeClass('show');
                            $("#loader2").addClass('d-none');
                            $('#d_alert').removeClass('d-none');
                            $("#d_alert").addClass('show');
                            $("#d_alert b").html(response);
                            $("#d_alert").fadeIn('slow');
                            $("#d_send").removeAttr("disabled");
                        }
                    });
                } else{
                    $("#d_send").removeAttr("disabled");
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