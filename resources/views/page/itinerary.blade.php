@extends('layouts.page.default')
@section('content')
    <section class="d-none d-lg-block">
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                @foreach($paquete_iti as $paquetes)
                    <h2 class="text-white my-5 h1"><strong>{{($paquetes->titulo)}} {{($paquetes->duracion)}} DAYS TOURS</strong></h2>
                    {{--<h2 class="text-white my-5 h1">Our excursions and packages depart 365 days a year</h2>--}}
                @endforeach
                {{--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>--}}
                {{--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>--}}
            </div>
        </div>
    </section>

    @include('layouts.page.included')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    {{--@foreach($paquete_iti as $paquetes)--}}
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green text-uppercase"><span class="d-block h5 text-secondary">Travel Packages:</span>{{strtolower($paquetes->titulo)}}</h1>
                    {{--@endforeach--}}
                    {{--<div class="alert alert-g-yellow" role="alert">--}}
                        {{--<h4>And even multi countries travel adventures involving Brasil, Ecuador , Argentina.</h4>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">

                    <div class="row my-4 d-sm-block d-md-block d-lg-none">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="d-block text-left">
                                        <span class="text-g-green h4 font-weight-bold align-bottom">{{$paquetes->duracion}} Dias</span>
                                    </div>
                                    {{--<p class="text-primary h4 font-weight-bold">10 Day</p>--}}
                                    <p class="h3 text-secondary"></p>
                                    <p class="h1 font-montserrat pt-2 m-0">
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                @if($precio->precio_d == 0)
                                                    <span class="text-danger">Inquire</span>
                                                @else
                                                    <small class="text-secondary h5">from</small>
                                                    <sup>$</sup>{{$precio->precio_d}}
                                                    <small>USD</small>
                                                @endif
                                            @endif
                                        @endforeach
                                    </p>
                                    <p class="text-secondary m-0">Package Code: {{$paquetes->codigo}}</p>
                                    <a href="#book-now" class="btn btn-g-yellow btn-block btn-lg btn-info mt-3 text-white">Inquire</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row position-relative">
                        <div class="col">
                            <ul id="navbar-example" class="nav nav-pills nav-fill bg-light rounded d-none d-sm-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="#Overview">Outline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Itinerary">Itinerary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Optionals">Optional</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Prices">Prices</a>
                                </li>

                            </ul>
                            <div data-spy="scroll" data-target="#navbar-example" data-offset="200" class="scrollspy-example">
                                <div id="Overview" class="pt-4 d-none d-sm-block">
                                    <h3 class="h3 py-2">Outline</h3>
                                    <div class="col my-4">
                                        <div class="row">
                                            <div class="col-3 text-center align-items-center  card-deck border bg-light m-0">
                                                <div class="card">
                                                    <h3>
                                                        <i class="fa fa-map-marker"></i>
                                                        Route
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="col border box-route-ininerary">
                                                @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                                    <p>
                                                        <strong>Day {{$itinerario->dia}}: </strong> {{ucwords(strtolower($itinerario->titulo))}}
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col">
                                                <h4>Included:</h4>
                                                @php echo $paquetes->incluye; @endphp
                                            </div>
                                            <div class="col">
                                                <h4>Not Included:</h4>
                                                @php echo $paquetes->noincluye; @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Itinerary" class="d-none d-sm-block">
                                    <h3 class="h3 py-5">Itinerary</h3>
                                    @php
                                        $i = 1;
                                        $num_des = count($paquetes->itinerario);
                                    @endphp
                                    @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                        <div class="timeline @php if($i == $num_des) echo 'timeline-f' @endphp">
                                            <div class="timeline-title">
                                                <span class="rounded-circle bg-g-green text-white py-4 font-weight-bold">DAY {{$itinerario->dia}}</span>
                                            </div>
                                            {{--<div class="col bg-dark">--}}
                                            {{--sdsdskl--}}
                                            {{--</div>--}}
                                            <div class="col">
                                                {{--<div class="col">--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum error esse eveniet, inventore maxime, modi nam nisi nulla saepe vitae voluptatem voluptatum! Corporis deserunt eos fugiat numquam quidem voluptas?--}}
                                                {{--</div>--}}
                                                <div class="timeline-content position-relative">
                                                    <div class="row">
                                                        <div class="timeline-point">
                                                            <i class="fa fa-circle-o"></i>
                                                        </div>
                                                        <div class="timeline-custom-col content-col ">
                                                            <div class="timeline-location-block">
                                                                <p class="location-name">{{ucwords(strtolower($itinerario->titulo))}} <i class="fa fa-map-marker icon-marker"></i></p>
                                                                <div class="description">
                                                                    @php echo $itinerario->descripcion @endphp
                                                                </div>
                                                            </div>
                                                            {{--<div class="timeline-custom-col">--}}
                                                            {{--<div class="timeline-image-block">--}}
                                                            {{--<img src="http://wp.swlabs.co/exploore/wp-content/uploads/2016/05/london.png" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                    @endforeach
                                </div>


                                <div id="Itinerary" class="d-sm-none">
                                    <h3 class="h3 py-5">Itinerary</h3>

                                    @foreach($paquetes->itinerario->sortBy('dia') as $itinerario)
                                        <h5 class="text-g-yellow my-3"><b>DAY {{$itinerario->dia}}:</b> {{ucwords(strtolower($itinerario->titulo))}}</h5>
                                        @php echo $itinerario->descripcion @endphp
                                    @endforeach
                                </div>


                                <div id="Optionals" class="pt-4">
                                    <h3 class="h3 py-2">Optional</h3>
                                    @php echo $paquetes->opcional; @endphp

                                </div>
                                <div id="Prices" class="pt-4">
                                    <h3 class="h3 pt-2">Prices</h3>
                                    <div class="card my-4 border-g-yellow">
                                        <p class="card-header bg-g-yellow">Price per person based on double accomodation</p>
                                        <div class="card-body p-0">
                                            <table class="table m-0 table-responsive">
                                                <thead class="thead-inverse">
                                                <tr>
                                                    <th>2 Estrelas</th>
                                                    <th>3 Estrelas</th>
                                                    <th>4 Estrelas</th>
                                                    <th>5 Estrelas</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                        @if($precio->precio_d > 0)
                                                            <td>
                                                                <sup>$</sup>{{$precio->precio_d}}
                                                            </td>
                                                        @else
                                                            <td>
                                                                Inquire
                                                            </td>
                                                        @endif
                                                    @endforeach

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col d-none d-sm-none d-md-none d-lg-inline">

                        <div class="card">
                            <div class="card-body text-center">


                                <div class="d-block text-left">
                                    <span class="text-g-green h4 font-weight-bold align-bottom">{{$paquetes->duracion}} Dias</span>
                                </div>
                                {{--<p class="text-primary h4 font-weight-bold">10 Day</p>--}}
                                <p class="h3 text-secondary"></p>
                                <p class="h1 font-montserrat pt-2 m-0">
                                    @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 2)
                                                @if($precio->precio_d == 0)
                                                    <span class="text-danger">Inquire</span>
                                                @else
                                                    <small class="text-secondary h5">from</small>
                                                    <sup>$</sup>{{$precio->precio_d}}
                                                    <small>USD</small>
                                                @endif
                                            @endif
                                        @endforeach
                                </p>
                                <p class="text-secondary m-0">Package Code: {{$paquetes->codigo}}</p>
                                <a href="#book-now" class="btn btn-g-yellow btn-block btn-lg btn-info mt-3 text-white">Inquire</a>

                            </div>
                        </div>

                        <div class="card bg-light my-4">
                            {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                            <div class="content-video-1 card-img-top">
                                <div class="content-area-3">
                                    <div class="position-relative">
                                        <img src="{{asset('images/video/prom-peru.jpg')}}" alt="video promperu" class="img-fluid">
                                        <div class="video-btn-1">
                                            <a href="https://www.youtube.com/embed/gGq_U1DYUCs" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<img src="{{asset('images/prom-peru-4.jpg')}}" alt="video" class="img-fluid card-img-top" >--}}
                            <div class="card-body">
                                <h4 class="card-title">Destinations</h4>
                                <div class="box-route-ininerary p-0">
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                        <p class="font-weight-bold text-secondary"><i class="fa fa-check"></i> {{ucwords(strtolower($paquete_destino->destinos->nombre))}}</p>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                            <div class="sticky-top sticky-top-50">
                                <img src="{{asset('images/maps/'.$paquetes->codigo.'.jpg')}}" alt="" class="img-fluid rounded">
                            </div>


                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 py-5 bg-light" id="book-now">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <span class="text-secondary font-weight-bold">TRAVEL PACKAGES</span>
                    <h2 class="text-g-green font-weight-bold">{{$paquetes->titulo}} {{$paquetes->duracion}} DIAS</h2>
                    {{--<h5 class="text-secondary">{{$paquetes->duracion}} Days</h5>--}}
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <form id="d_form" role="form">
                        {{csrf_field()}}
                        <h3 class="text-secondary mt-4">HOTEL QUALITY</h3>

                        <div class="row">
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-g-green btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Econômico"> Badget
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-g-green btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Turista"> Best Value
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-g-green btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Superior"> Superior
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="col-6 col-sm" data-toggle="buttons">
                                <label class="btn btn-outline-g-green btn-block">
                                    <input type="checkbox" autocomplete="off" name="accommodation[]" value="Luxo"> Luxury
                                    <div class="d-block text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <h3 class="text-secondary mt-4">NUMBER OF TRAVELERS</h3>

                        <div class="row no-gutters" data-toggle="buttons">
                            <label class="btn col btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="1" checked> 1 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col mx-2 btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="2"> 2 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="3"> 3 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col mx-2 btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="4"> 4 <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="5+"> 5+ <i class="fa fa-male"></i>
                            </label>
                            <label class="btn col ml-2 btn-outline-g-green">
                                <input type="radio" name="number" class="number" autocomplete="off" value="Undecided"><small>Undecided</small>
                            </label>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Traveling Date</h3>
                                <input type="text" class="form-control" id="d_date" placeholder="Fecha de Viaje">
                                <input type="hidden" id="d_package" value="{{$paquetes->codigo}}: {{$paquetes->titulo}} {{$paquetes->duracion}} DAYS">
                            </div>
                            <div class="col">
                                <h3 class="text-secondary mt-4">Phone Number</h3>
                                <input type="tel" class="form-control" id="d_tel" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Name*</h3>
                                <input type="text" class="form-control" id="d_name" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Email*</h3>
                                <input type="email" class="form-control" id="d_email" placeholder="Email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h3 class="text-secondary mt-4">Comments?</h3>
                                <textarea class="form-control" id="d_comment" rows="3" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col my-3">

                                <button class="btn btn-g-yellow btn-block btn-lg btn-next" id="d_send" type="button" onclick="inquire()">Send
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                                <ul class="fa-ul pull-right d-none" id="loader2">
                                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade d-none" id="d_alert" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
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
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true
            });

        </script>
    @endpush

@stop