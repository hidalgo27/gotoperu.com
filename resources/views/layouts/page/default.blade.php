<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="Ihh0sYh7n0k-jfaQTWAlQUpg1fpT7aTD4Qf6k8gbD3Y" />
    <meta name="p:domain_verify" content="96cde57c8c54dbd171bf7de5d9564e89"/>
    {{--<title>Agencia de Viajes en Peru | Tours Machu Picchu</title>--}}
    {{--<meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">--}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link href="{{asset('images/icons/favicon/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body data-spy="scroll" data-target="#menu" class="position-relative">

{{--<section>--}}
    {{--<div class="container">--}}
        {{--<div class="row no-gutters">--}}
            {{--<div class="col-3">--}}
                {{--<a href="/"><img src="https://gotoperu.com/img/logos/logo-gotoperu.png" alt="" class="img-fluid mt-4"></a>--}}

            {{--</div>--}}
            {{--<div class="col-2">--}}
                {{--<img src="https://gotoperu.com/img/logos/asta-logo.png" alt="" class="img-fluid">--}}
            {{--</div>--}}
            {{--<div class="col-4 text-center">--}}
                {{--<h6 class="font-weight-bold mt-4">BEST TESTIMONIALS & LOCAL CONNECTIONS</h6>--}}
                {{--<a href="">(813) 454-9707</a> |--}}
                {{--<a href="https://m.me/GOTOPERUcom/" class="btn btn-primary btn-sm mb-2" target="_blank"><i class="fa fa-facebook"></i> Messenger</a> |--}}
                {{--<a href="https://api.whatsapp.com/send?phone=51992051190" class="btn btn-success mb-2 btn-sm" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp</a>--}}

                {{--<div class="row">--}}
                    {{--<div class="col">--}}
                        {{--<a href="" class="btn btn-g-green btn-sm d-none d-sm-inline-block"><i class="fa fa-commenting"></i> Chat</a>--}}
                        {{--<span class="mx-2">|</span>--}}
                        {{--<button type="button" class="btn btn-g-yellow btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#contant_m">--}}
                            {{--Design--}}
                        {{--</button>--}}
                        {{--<a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-facebook"></i></a>--}}
                        {{--<a href="https://twitter.com/GOTOPERUCOM" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-twitter"></i></a>--}}
                        {{--<a href="https://www.instagram.com/gotoperucom/" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-instagram"></i></a>--}}
                        {{--<a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-youtube-play"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col text-center">--}}
                {{--<button type="button" class="btn btn-link mt-4 font-weight-bold">(813) 454-9707</button>--}}
                {{--<button type="button" class="btn btn-g-dark mt-4">Contact Us</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm mt-1">
                <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="img-fluid"></a>
            </div>
            <div class="col-12 col-sm text-center pt-4 d-none d-lg-block">
                <i class="h4">... a <span class="text-g-yellow">new</span> adventure every day!</i>
            </div>
            <div class="col-12 col-sm text-right pt-4 d-none d-sm-block">
                <a href="tel:+2029963000" class="font-weight-bold mx-3">(202) 996-3000</a>
                <button type="button" class="btn btn-g-yellow" onclick="startOlark()">Chat</button>
                <button type="button" class="btn btn-g-green" data-toggle="modal" data-target="#modal-contact">Inquire Now</button>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><i>Email us at <a href="">info@gotoperu.com</a> or please fill the following form:</i></p>
                <form id="c_form">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="c_nombre">Name</label>
                        <input type="text" class="form-control" id="c_nombre" placeholder="Full name">
                    </div>

                    <div class="form-group">
                        <label for="c_email">Email</label>
                        <input type="email" class="form-control" id="c_email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="c_phone">Phone</label>
                        <input type="tel" class="form-control" id="c_phone" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <label for="c_comentario">Comentario</label>
                        <textarea id="c_comentario" class="form-control" cols="10" rows="3" placeholder="What can we do for you?"></textarea>
                    </div>

                    <div class="alert alert-success alert-dismissible fade d-none" id="c_alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>THANK YOU FOR CONTACT US</strong>, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)
                    </div>

                </form>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-g-green" id="c_send" type="button" onclick="contact()">Send
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
                <ul class="fa-ul pull-right d-none" id="loader3">
                    <li><i class="fa-li fa fa-spinner fa-spin"></i> <i>Sending...</i></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="sticky-top bg-g-dark mt-2">
    <div class="container">
        {{--<nav class="navbar navbar-expand-lg navbar-dark">--}}
            {{--<a class="navbar-brand" href="#">Navbar</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link text-g-yellow" href="#">OUR PICKS<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">TOURS PACKAGES</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown dropdown-large">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--DESTINATIONS--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-large" aria-labelledby="navbarDropdown">--}}
                            {{--<ul class="row">--}}
                                {{--<li class="col-sm-3">--}}
                                    {{--<ul>--}}
                                        {{--<li class="dropdown-header">Glyphicons</li>--}}
                                        {{--<li><a href="#">Available glyphs</a></li>--}}
                                        {{--<li class="disabled"><a href="#">How to use</a></li>--}}
                                        {{--<li><a href="#">Examples</a></li>--}}
                                        {{--<li class="dropdown-divider"></li>--}}
                                        {{--<li class="dropdown-header">Dropdowns</li>--}}
                                        {{--<li><a href="#">Example</a></li>--}}
                                        {{--<li><a href="#">Aligninment options</a></li>--}}
                                        {{--<li><a href="#">Headers</a></li>--}}
                                        {{--<li><a href="#">Disabled menu items</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="col-sm-3">--}}
                                    {{--<ul>--}}
                                        {{--<li class="dropdown-header">Button groups</li>--}}
                                        {{--<li><a href="#">Basic example</a></li>--}}
                                        {{--<li><a href="#">Button toolbar</a></li>--}}
                                        {{--<li><a href="#">Sizing</a></li>--}}
                                        {{--<li><a href="#">Nesting</a></li>--}}
                                        {{--<li><a href="#">Vertical variation</a></li>--}}
                                        {{--<li class="dropdown-divider"></li>--}}
                                        {{--<li class="dropdown-header">Button dropdowns</li>--}}
                                        {{--<li><a href="#">Single button dropdowns</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="col-sm-3">--}}
                                    {{--<ul>--}}
                                        {{--<li class="dropdown-header">Input groups</li>--}}
                                        {{--<li><a href="#">Basic example</a></li>--}}
                                        {{--<li><a href="#">Sizing</a></li>--}}
                                        {{--<li><a href="#">Checkboxes and radio addons</a></li>--}}
                                        {{--<li class="dropdown-divider"></li>--}}
                                        {{--<li class="dropdown-header">Navs</li>--}}
                                        {{--<li><a href="#">Tabs</a></li>--}}
                                        {{--<li><a href="#">Pills</a></li>--}}
                                        {{--<li><a href="#">Justified</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="col-sm-3">--}}
                                    {{--<ul>--}}
                                        {{--<li class="dropdown-header">Navbar</li>--}}
                                        {{--<li><a href="#">Default navbar</a></li>--}}
                                        {{--<li><a href="#">Buttons</a></li>--}}
                                        {{--<li><a href="#">Text</a></li>--}}
                                        {{--<li><a href="#">Non-nav links</a></li>--}}
                                        {{--<li><a href="#">Component alignment</a></li>--}}
                                        {{--<li><a href="#">Fixed to top</a></li>--}}
                                        {{--<li><a href="#">Fixed to bottom</a></li>--}}
                                        {{--<li><a href="#">Static top</a></li>--}}
                                        {{--<li><a href="#">Inverted navbar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">ABOUT US</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">GETTING TO PERU</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">TESTIMONIAL</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">FAQ</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">TRAVEL BLOG</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">TRAVEL AGENTS</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<form class="form-inline my-2 my-lg-0">--}}
                {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</nav>--}}

        <ul class="nav justify-content-center nav-pills nav-fill d-none d-sm-flex">
            <li class="nav-item">
                <a class="nav-link text-g-yellow" href="{{route('deals_path')}}">Travel Deals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('packages_path')}}">Tour Packages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('destinations_path')}}">Destinations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('about_path')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary d-none d-lg-inline-block" href="{{route('getting_path')}}">Getting to Peru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('testimonials_path')}}">Testimonials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('faq_path')}}">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary d-none d-lg-inline-block" href="#">Travel Agents</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--</li>--}}
        </ul>

        <nav class="navbar navbar-expand-lg navbar-g-dark bg-g-dark d-sm-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white"></i>
            </button>
            {{--<a class="navbar-brand btn btn-g-green" href="#" data-toggle="modal" data-target="#modal-contact">Inquire Now</a>--}}
            <a href="tel:+2029963000" class="font-weight-bold">(202)996-3000</a>
            <button type="button" class="btn btn-g-green" data-toggle="modal" data-target="#modal-contact">Inquire Now</button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-g-yellow" href="{{route('deals_path')}}">Travel Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('packages_path')}}">Tour Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('destinations_path')}}">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('about_path')}}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('getting_path')}}">Getting to Peru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('testimonials_path')}}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{route('faq_path')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Travel Agents</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

@yield('content')


<section class="d-none d-lg-block">
    <div class="jumbotron jumbotron-divider-1 rounded-0">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-9 text-white text-center rounded">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100">
                            <span>Assistances</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100">
                            <span>Breakfast</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100">
                            <span>Entrances</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100">
                            <span>Flight</span>
                        </div>

                        <div class="col">
                            <img src="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100">
                            <span>Hotels</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100">
                            <span>Tours</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100">
                            <span>Trains</span>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="w-100">
                            <span>Transfers</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row my-4">
            <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4>BOOKING PROCESS</h4>
                <!-- <div class="sec-title-div-4"></div> -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <img src="{{asset('images/icons/icon-contact.png')}}" alt="icon contact">
                <h6>Contact</h6>
                <p>Chat with us, give us a call <a href="tel:+2029963000">(202) 996-3000</a>, send us an <a href="mailto:info@gotoperu.com" class="btn-link">e-mail</a> or fill out our <a href="#" data-toggle="modal" data-target="#modal-contact" class="btn-link">online form</a>. Share with us your <strong>travel</strong> preferences! If you already have an outline, an idea, any questions… we will be more than happy to assist your needs.</p>
            </div><!-- /.col-md-4 col -->

            <div class="col-12 col-sm text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                <img src="{{asset('images/icons/icon-design.png')}}" alt="icon design">
                <h6>Design</h6>
                <p>We will craft out a first <strong>travel</strong> proposal according to the outline or idea that you shared with us. From then on we will customize it until you are satisfied with the planning! We will then send you a day by day itinerary and leave the rest to you!</p>
            </div><!-- /.col-md-4 col -->

            <div class="col-12 col-sm text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                <img src="{{asset('images/icons/icon-vacations.png')}}" alt="icon vacation">
                <h6><strong>Vacation</strong></h6>
                <p>Be ready for an unforgettable vacation to the land of the Incas, with promptly transfers at every point (airports, hotels, buses,trains) with knowledgable local Guides on each destination plus the best hotel locations and perks...GOTOPERU team will be always with you</p>
            </div><!-- /.col-md-4 col -->
        </div><!-- /.row -->
    </div>
</section>

<section class="my-5 pt-5 bg-light">
    <div class="container">

        <div class="row pb-5 justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-4">
                <img src="{{asset('images/logo-gotoperu.png')}}" alt="logo gotoperu" class="img-fluid">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/group.png')}}" alt="groups gotoperu" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Grupos de 6 a 14 pasajeros y/o paseos privados.
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/assistance.png')}}" alt="assistance" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Vivimos en el Peru, ofreciendo asistencia real las 24horas.
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/customize.png')}}" alt="customize" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Elija programas prearmados o personalize vuestras vacaciones
                    </div>
                </div>
            </div>

            {{--<div class="w-100 py-4"></div>--}}
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/location.png')}}" alt="location" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Costos menores al ser una operadora local
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/trip.png')}}" alt="trip" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Excelentes comentarios en Tripadvisor
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/departure.png')}}" alt="departure" class="img-fluid">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        Salidas Diarias para todos nuestros tours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">

        <div class="row pb-5 ">
            <div class="col text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <h4 class="">6 TOP FAQ</h4>
                <!-- <div class="sec-title-div-4"></div> -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">I WOULD LIKE A <strong>CUSTOMIZE PROGRAM</strong></h6>
                        <p>Absolutely we can design a program based on your travel preferences.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->

            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">ARE YOUR PROGRAMS UNDER GROUPS</h6>
                        <p>We offer groupal and private tours, we can quote both options.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->

            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">CAN YOU ALSO BOOK MY FLIGHTS</h6>
                        <p>Absolutely we can also quote and add the flights to the ground <strong>package</strong>.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->



            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">WHAT IS INCLUDED IN THE PUBLISHED PRICES</h6>
                        <p>All the hotels, all the tours &amp; excursions, all the entrances, all the breakfasts, transfers.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->


            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">WHERE ARE YOU BASED</h6>
                        <p>Our headquarters is located in cusco, with offices in the main cities of peru and opening a sales office at dc,usa on 2016.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->

            <div class="col-12 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                <div class="row">
                    <div class="col-1 d-none d-sm-block">
                        <i class="fa fa-angle-right fa-4x"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="text-g-yellow">HOW ABOUT THE DEPARTURES</h6>
                        <p>As local operator we have almost daily departures, even in Christas.</p>
                    </div>
                </div>
            </div><!-- /.col-md-6 col -->

        </div><!-- /.row -->

    </div>
</section>

<footer class="mt-5 bg-g-dark">
    <img src="{{asset('images/footer.jpg')}}" alt="footer gotoperu" class="w-100">
    <div class="container footer-logo">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu" class="w-100">
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8">
                <div class="alert bg-rgba-dark my-4 text-white text-center" role="alert">
                    The <strong class="text-g-yellow">ONLY Peruvian Travel Operator</strong> with direct Sales Offices in the USA
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Tour Packages</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('deals_path')}}" class="text-white">Travel Deals</a></li>
                    <li><a href="{{route('packages_path')}}" class="text-white">Travel Packages</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Tour Packages</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="{{route('destinations_path')}}" class="text-white">1-3 Days</a></li>--}}
                    {{--<li><a href="{{route('deals_path')}}" class="text-white">4-6 Days</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Destinations</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="https://gotoperu.com/destinations/peru-travel" class="text-white">Peru</a></li>
                    <li><a href="https://gotoperu.com/destinations/ecuador-travel" class="text-white">Ecuador</a></li>
                    <li><a href="https://gotoperu.com/destinations/bolivia-travel" class="text-white">Bolivia</a></li>
                    <li><a href="https://gotoperu.com/destinations/brasil-travel" class="text-white">Brasil</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Hotels</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li><a href="" class="text-white">2 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">3 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">4 Stars</a></li>--}}
                    {{--<li><a href="" class="text-white">5 Stars</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">About Us</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('about_path')}}" class="text-white">Social Responsibility</a></li>
                </ul>
            </div>
            {{--<div class="col-6 col-sm mb-3 text-white">--}}
                {{--<h3 class="h6 text-g-yellow">Offices</h3>--}}
                {{--<ul class="m-0 text-g-yellow list-unstyled">--}}
                    {{--<li>PERU: Av. Collasuyo 986 Cusco-Peru</li>--}}
                    {{--<li>USA: 1440 G St NW, Washington DC, 20005</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">FAQ</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="{{route('getting_path')}}" class="text-white">Getting To Peru</a></li>
                    <li><a href="{{route('faq_path')}}" class="text-white">Frequently Asked Questions</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Testimonials</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="#" class="text-white">Reviews</a></li>
                    <li><a href="{{route('testimonials_path')}}" class="text-white">Testmonials</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Contact Us</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="" class="text-white" data-toggle="modal" data-target="#modal-contact">Email</a></li>
                    <li><a href="tel:+2029963000">(202) 996-3000</a></li>
                    {{--<li><a href="" class="text-white">Address</a></li>--}}
                </ul>
            </div>
            <div class="col-6 col-sm mb-3 text-white">
                <h3 class="h6 text-g-yellow">Travel Agents</h3>
                <ul class="m-0 text-g-yellow list-unstyled">
                    <li><a href="#" class="text-white">Registration</a></li>
                </ul>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-12 col-sm mb-3">
                <h6 class="mt-2">GOTOPERU GROUP:</h6>
            </div>
            <div class="col-6 col-sm mb-3">
                <img src="{{asset('images/logos/logo-gotoperu-footer.png')}}" alt="logo gotoperu" class="img-fluid">
            </div>
            <div class="col-6 col-sm mb-3">
                <img src="{{asset('images/logos/logo-andes-footer.png')}}" alt="logo andes viagens" class="img-fluid">
            </div>
            <div class="col-6 col-sm mb-3">
                <img src="{{asset('images/logos/logo-latinamerica-footer.png')}}" alt="logo gotolatinamerica" class="img-fluid">
            </div>
            <div class="col-6 col-sm mb-3">
                <img src="{{asset('images/logos/logo-mapi-galapagos-footer.png')}}" alt="logo machupicchu galapagos" class="img-fluid">
            </div>
            <div class="col-12 col-sm text-center">
                <b>PERU LOCAL TIME: 7:38PM</b>
                <a href="{{asset('pdf/terms-conditions.pdf')}}" target="_blank" class="btn btn-link d-block">Services Terms & Conditions</a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center text-white">
                <small><i><b>PERU:</b> Av. Collasuyo 986 Cusco-Peru | <b>USA:</b> 1440 G St NW, Washington DC, 20005</i></small>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
@stack('scripts')
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "GotoPeru",
  "url" : "https://gotoperu.com/",
  "sameAs" : [
    "https://twitter.com/GOTOPERUCOM",
    "https://plus.google.com/+Gotoperu",
    "https://www.facebook.com/GOTOPERUcom/",
    "https://www.pinterest.com/gotoperucom/",
    "https://www.instagram.com/gotoperucom/",
    "https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com",
    "https://www.trustpilot.com/review/gotoperu.com",
    "https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg"
 ]
}
</script>
<script>
    //formilario contac
    function contact(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').val()
            }
        });

        $("#c_send").attr("disabled", true);

        var filter=/^[A-Za-z][A-Za-z0-9_.]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;


//                alert(s_destinations);

        var s_name = $('#c_nombre').val();
        var s_email = $('#c_email').val();
        var s_phone = $('#c_phone').val();
        var s_comentario = $('#c_comentario').val();


//                var s_comment = $('#d_comment').val();


        if (filter.test(s_email)){
            sendMail = "true";
        } else{
            $('#c_email').css("border-bottom", "2px solid #FF0000");
            sendMail = "false";
        }
        if (s_name.length == 0 ){
            $('#c_nombre').css("border-bottom", "2px solid #FF0000");
            var sendMail = "false";
        }

        if(sendMail == "true"){
            var datos = {


                "txt_name" : s_name,
                "txt_email" : s_email,
                "txt_phone" : s_phone,
                "txt_comentario" : s_comentario,
            };
            $.ajax({
                data:  datos,
                url:   "{{route('contact_path')}}",
                type:  'post',

                beforeSend: function () {

                    $('#c_send').removeClass('show');
                    $("#c_send").addClass('d-none');

                    $("#loader3").removeClass('d-none');
                    $("#loader3").addClass('show');
                },
                success:  function (response) {
                    $('#c_form')[0].reset();
                    $('#c_send').removeClass('d-none');
                    $('#c_send').addClass('show');
                    $("#loader3").removeClass('show');
                    $("#loader3").addClass('d-none');
                    $('#c_alert').removeClass('d-none');
                    $("#c_alert").addClass('show');
                    $("#c_alert b").html(response);
                    $("#c_alert").fadeIn('slow');
                    $("#c_send").removeAttr("disabled");
                }
            });
        } else{
            $("#c_send").removeAttr("disabled");
        }
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>