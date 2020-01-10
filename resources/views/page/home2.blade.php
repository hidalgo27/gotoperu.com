@extends('layouts.page.default')

@section('content')
    <header class="d-none d-md-block">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>
        @include('layouts.page.header')
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">@lang('home.header_title')</h1>
                    <a href="#Inquire" class="btn btn-g-yellow btn-lg h2 font-weight-bold mt-3">@lang('home.float_button_button')</a>
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}

                    @if (App::getLocale() == "pt")
                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-5 mt-5">
                                <div class="bg-rgba-white-5 rounded shadow p-3">
                                    <h5 class="m-0 text-dark font-weight-bold">PARCELE SUA COMPRA <span class="text-primary">EM ATÉ</span></h5>
                                    <p class="display-2 font-weight-bold m-0 font-weight-bold text-primary">12x</p>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <img src="{{asset('images/logos/visa.png')}}" alt="logo visa" class="w-100 p-1">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/logos/mastercard.png')}}" alt="logo mastercard" class="w-100 p-1">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/logos/american_express.png')}}" alt="logo american express" class="w-100 p-1">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/logos/hipercard.png')}}" alt="logo hipercard" class="w-100 p-1">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/logos/elo.png')}}" alt="logo elo" class="w-100 p-1">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('images/logos/diners_club.png')}}" alt="logo diner club" class="w-100 p-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank" class="mx-2">
                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="https://twitter.com/GOTOPERUCOM" target="_blank" class="mx-2">
                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank" class="mx-2">
                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="https://www.instagram.com/go.to.peru/" target="_blank" class="mx-2">
                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom">
            <img src="{{asset('images/logos/logo-expedia.png')}}" alt="" width="180">
        </div>
    </header>

    @include('layouts.page.menu')


        <section class="bg-light py-3 d-none d-md-block contenido2">
            <div class="container-fluid">
                <div class="col">
                    <div class="row pb-3"><!--.row -->
                        <div class="col">
                            <img data-src="{{asset('images/logos/apavit.png')}}" data-srcset="{{asset('images/logos/apavit.png')}}" alt="logo apavit" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/apotur.png')}}" data-srcset="{{asset('images/logos/apotur.png')}}" alt="logo apotur" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/asta.png')}}" data-srcset="{{asset('images/logos/asta.png')}}" alt="logo asta" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/expedia.png')}}" data-srcset="{{asset('images/logos/expedia.png')}}" alt="logo expedia" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/facebook.png')}}" data-srcset="{{asset('images/logos/facebook.png')}}" alt="logo facebook" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/meetup.png')}}" data-srcset="{{asset('images/logos/meetup.png')}}" alt="logo meetup" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/new.png')}}" data-srcset="{{asset('images/logos/new.png')}}" alt="logo the new york times" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/peru.png')}}" data-srcset="{{asset('images/logos/peru.png')}}" alt="logo marca peru" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/prom-peru.png')}}" data-srcset="{{asset('images/logos/prom-peru.png')}}" alt="logo prom peru" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/tripadvisor.png')}}" data-srcset="{{asset('images/logos/tripadvisor.png')}}" alt="logo tripadvisor" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/yelp.png')}}" data-srcset="{{asset('images/logos/yelp.png')}}" alt="logo yelp" class="img-fluid lazy has-webp">
                        </div>
                        <div class="col">
                            <img data-src="{{asset('images/logos/youtube.png')}}" data-srcset="{{asset('images/logos/youtube.png')}}" alt="logo youtube" class="img-fluid lazy has-webp">
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
        </section>




        {{--<div id="aviso"><h2>Estás haciendo scroll sobre el contenido 2</h2></div>--}}


    @if (App::getLocale() == "pt")
        <div id="redes">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">
                        <a href="https://api.whatsapp.com/send?phone=51999200914" target="_blank" class="font-weight-bold text-white stretched-link">
                            +51 999200914
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (App::getLocale() == "es")
        <div id="redes">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">
                            <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">
                                +51 (1) 705-9774
                                <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif


        <section class="bg-light pb-sm-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="h6 font-weight-bold text-muted">@lang('home.h1')</h1>
                        <h2 class="display-4 d-none d-sm-block font-weight-bold text-g-yellow">@lang('home.h2_programs')</h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="lead font-weight-normal text-secondary m-0 d-none d-sm-block">@lang('home.h2_programs_p')</p>
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-white py-5">
            <div class="container">
{{--                <div class="row">--}}
{{--                    <div class="col text-left">--}}
{{--                        <h2 class="h2 font-weight-bold text-dark mb-3">@lang('home.h2_programs')</h2>--}}
{{--                        <p class="lead font-weight-normal text-secondary mb-5">@lang('home.h2_programs_p')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                {{--recom--}}
                @foreach($categoria_group as $categoria_groups)

                        <div class="row mb-4">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 nav-tabs-wrapper">
                                        <div class="nav nav-tabs dragscroll horizontal flex-sm-row p-0 @if ($categoria_groups->grupo == 1) {{'nav-category-goto-grey'}} @elseif ($categoria_groups->grupo == 2) {{'nav-category-goto-green'}} @elseif ($categoria_groups->grupo == 3) {{'nav-category-goto-yellow'}} @endif" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach($categorias->where('grupo', $categoria_groups->grupo)->sortByDesc('estado') as $categoria)
                                                <span class="flex-sm-fill cursor-pinter font-weight-bold text-sm-center rounded-0 nav-link @if ($categoria->estado == 1) {{'active'}} @endif" id="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}-tab" data-toggle="pill" href="#category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" role="tab" aria-controls="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" aria-selected="true">{{$categoria->nombre}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tab-content border border-top-0 rounded-bottom shadow-sm" id="v-pills-tabContent">
                                            @foreach($categorias->where('grupo', $categoria_groups->grupo) as $categoria)
                                            <div class="tab-pane fade show @if ($categoria->estado == 1) {{'active'}} @endif" id="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}" role="tabpanel" aria-labelledby="category-{{str_replace(' ', '-', strtolower($categoria->nombre))}}-tab">
                                                    <div class="row d-none d-md-block">
                                                        <div class="col">
                                                            <div class="position-relative">
{{--                                                                    <img src="{{asset('images/banners/category/recommended.jpg')}}" alt="" class="w-100">--}}
                                                                    <img alt="gotoperu" class="lazy w-100" src="{{asset('images/banners/category/'.$categoria->imagen_banner.'')}}">
                                                                <div class="position-absolute-bottom bg-rgba-dark-3 text-white p-2">
                                                                    <p class="m-0 font-weight-bold">{!! $categoria->descripcion !!}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row my-3 mx-0">
                                                    @foreach($paquetes_categoria->where('idcategoria', $categoria->id)->take(2) as $paquetes_categorias)
                                                        <div class="col-12 mb-4 col-sm-12 mb-sm-4 col-md-12 mb-md-4 mb-lg-0 col-lg-6">
                                                            <div class="bg-light shadow-sm rounded">
                                                                <div class="row align-items-center no-gutters">
                                                                    <div class="col-12 col-sm-7">
                                                                        <div class="position-relative">
                                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes_categorias->paquete->titulo)), $paquetes_categorias->paquete->duracion])}}">
                                                                                {{--<img src="{{asset('images/mapas/'.$cateorias_recommended->paquete->codigo.'.jpg')}}" alt="" class="w-100 rounded-left">--}}
{{--                                                                                <picture>--}}

{{--                                                                                    <source type="image/webp"--}}
{{--                                                                                            data-srcset="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                            data-sizes="100w">--}}
{{--                                                                                    <img alt="gotoperu" class="lazy w-100"--}}
{{--                                                                                         data-src="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                         data-srcset="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}"--}}
{{--                                                                                         data-sizes="100w">--}}
{{--                                                                                </picture>--}}

                                                                                <img src="{{asset('images/mapas/'.$paquetes_categorias->paquete->imagen.'')}}" alt="" class="w-100">
                                                                                <div class="position-absolute-bottom p-2 text-center">
                                                                                    <span class="small font-weight-bold badge badge-g-yellow shadow">{{$paquetes_categorias->categoria->nombre}}</span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-3 mt-sm-0 col-sm-5 text-center">
                                                                        <div class="px-3">
                                                                            <h2 class="h6 font-weight-bold">{{$paquetes_categorias->paquete->titulo}}</h2>
                                                                            <small class="text-muted font-weight-bold">{{$paquetes_categorias->paquete->duracion}} @lang('home.days')</small>

                                                                            @foreach($paquetes_categorias->paquete->precio_paquetes as $precio)
                                                                                @if($precio->estrellas == 2)
                                                                                    @if($precio->precio_d > 0)
                                                                                        {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                                        <div class="display-4 font-weight-bold"><sup>$</sup>{{$precio->precio_d}}</div>
                                                                                    @else
                                                                                        <span class="text-danger">@lang('home.inquire')</span>
                                                                                    @endif
                                                                                @endif
                                                                            @endforeach

                                                                            <a href="{{route('itinerary_path', [str_replace(' ','-',strtolower($paquetes_categorias->paquete->titulo)), $paquetes_categorias->paquete->duracion])}}" class="btn btn-g-yellow btn-block font-weight-bold">@lang('home.inquire_now')</a>
                                                                            {{--<a href="" class="btn btn-g-green font-weight-bold btn-block">Book Now</a>--}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('category_path')}}" class="btn btn-primary btn-lg font-weight-bold">@lang('home.see_more_categories')</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-yellow">@lang('home.video_testimonials')</h2>
                        <p class="lead font-weight-normal text-muted">@lang('home.video_testimonials_p')</p>
                    </div>
                </div>
                <div class="row slider-video-testimonio mt-4">
                    @foreach($testimonio_video as $testimonio_videos)
                        <div class="col">
                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                                <div class="position-relative">
                                    {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                             data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"
                                             data-sizes="100w">
                                    </picture>

                                    <div class="position-absolute-bottom text-white p-3 icon-play">
                                        <i class="fas fa-play fa-2x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('video_testimonials_path')}}" class="btn btn-primary btn-lg font-weight-bold">@lang('home.view_all_video_testimonials')</a>
                    </div>
                </div>
            </div>
        </section>

    <section class="d-none d-xl-block pb-5 bg-light">
        <div class="rounded-0 m-0">
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" target="_blank">

                                    {{--<img src="{{asset('images/icons/tripadvisor.png')}}" alt="" class="w-100">--}}

                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/tripadvisor.webp')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/tripadvisor.png')}}"
                                             data-srcset="{{asset('images/icons/tripadvisor.png')}}"
                                             data-sizes="100w">
                                    </picture>

                                    {{--                                    <img data-src="{{asset('images/icons/tripadvisor.png')}}" data-srcset="{{asset('images/icons/tripadvisor.png')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-1">--}}

                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_1')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">Jhon X2 feb 2019, USA</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" target="_blank">
                                    {{--<img src="{{asset('images/icons/yelp.png')}}" alt="" class="w-100">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/yelp.webp')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/yelp.png')}}"
                                             data-srcset="{{asset('images/icons/yelp.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_2')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">Boon C. Jan 2019 Tampa, FL</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <a href="https://www.trustpilot.com/review/gotoperu.com" target="_blank">
                                    {{--<img src="{{asset('images/icons/trust.png')}}" alt="" class="w-100">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/trust.png')}}"
                                                data-sizes="100w">
                                        <img alt="gotoperu" class="lazy w-100"
                                             data-src="{{asset('images/icons/trust.png')}}"
                                             data-srcset="{{asset('images/icons/trust.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-truncate">
                                <i class="fa fa-quote-left"></i>
                                <span class="small">@lang('home.testimonial_3')</span>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <small class="text-g-yellow font-weight-bold">jeanette Pan feb 2019, USA</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5867868-Has_anyone_booked_a_tour_with_GOTOPERU_www_gotoperu_org-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 1</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6509104-Gotoperu_Travel_Agency-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 2</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k5657518-GOTOPERU_online_tour_operator-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 3</a>
                        <a href="https://www.tripadvisor.com/ShowTopic-g294311-i818-k6934201-Trip_Report_Two_glorious_weeks_in_Peru_with_GOTOPERU_ORG-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 4</a>
                        <a href="https://www.tripadvisor.co.za/ShowTopic-g294311-i818-k7362487-o10-GotoPeru_or_David_Expeditions-Peru.html" target="_blank" class="btn btn-outline-g-green font-weight-bold btn-sm">TripAdvisor 5</a>
                    </div>
                </div>


            </div>
        </div>
    </section>




    <section class="bg-white py-5 inquire">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4 class="h1 font-weight-bold">@lang('home.out_team_h1')</h4>
                    <p class="lead font-weight-normal text-muted">@lang('home.our_team_p1')</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="swiper-container swiper-container-gallery">
                        <div class="swiper-wrapper">
                            @foreach($team as $teams)

                                <div class="swiper-slide">
                                    <div class="card">
                                        <a class="venobox position-relative" data-gall="myGallery" href="{{$teams->imagen_portada}}">
                                            <img src="{{$teams->imagen_portada}}" alt="image alt" class="card-img-top">
                                            <span class="position-absolute-top text-white">
                                    <i data-feather="image" stroke-width="1"></i>
                                </span>
                                        </a>
                                        <div class="card-body text-center">
                                            <a class="venobox position-relative" href="{{$teams->imagen_perfil}}">
                                                <img src="{{$teams->imagen_perfil}}" alt="image alt" class="avatar rounded-circle">
                                                <span class="position-absolute-bottom text-white">
                                        <i data-feather="image" stroke-width="2"></i>
                                    </span>
                                            </a>
                                            <h4 class="card-title">{{$teams->nombre}}</h4>
                                            <h6 class="card-subtitle mb-2 text-g-yellow font-weight-bold">{{$teams->cargo}}</h6>
                                            <p class="small">{{$teams->frase}}</p>
                                            <p class="font-weight-bold small text-secondary"><i data-feather="thumbs-up" stroke-width="2"></i> <b>Actividad Favorita:</b> {{$teams->actividad}}</p>
                                            <p class="small m-0"><i data-feather="mail" stroke-width="1"></i> {{$teams->email}}</p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <!-- Add Pagination -->
{{--                        <div class="swiper-pagination"></div>--}}
                    <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col text-center">
                    <a href="{{route('about_path')}}" class="btn btn-dark btn-lg font-weight-bold">Vea más sobre nosotros</a>
                </div>
            </div>
        </div>
    </section>

        <section class="d-none d-xl-block">
            <div class="jumbotron jumbotron-slider-1 rounded-0 m-0">
                <div class="container">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-9 text-white text-center rounded">
                            <div class="row">
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/assistances.webp')}}"
                                                data-sizes="100w">
                                        <img alt="assistances" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/assistances.png')}}"
                                             data-srcset="{{asset('images/icons/include/assistances.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.assistances')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/breakfast.png')}}" data-srcset="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/breakfast.webp')}}"
                                                data-sizes="100w">
                                        <img alt="breakfast" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/breakfast.png')}}"
                                             data-srcset="{{asset('images/icons/include/breakfast.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.breakfast')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/entrances.webp')}}"
                                                data-sizes="100w">
                                        <img alt="entrances" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/entrances.png')}}"
                                             data-srcset="{{asset('images/icons/include/entrances.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.entrances')</small>
                                </div>
                                <div class="col">
{{--                                    <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/flight.webp')}}"
                                                data-sizes="100w">
                                        <img alt="flight" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/flight.png')}}"
                                             data-srcset="{{asset('images/icons/include/flight.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.flight')</small>
                                </div>

                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/hotels.webp')}}"
                                                data-sizes="100w">
                                        <img alt="hotels" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/hotels.png')}}"
                                             data-srcset="{{asset('images/icons/include/hotels.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.hotels')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/tours.webp')}}"
                                                data-sizes="100w">
                                        <img alt="tours" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/tours.png')}}"
                                             data-srcset="{{asset('images/icons/include/tours.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.tours')</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100 lazy has-webp">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/icons/include/trains.webp')}}"
                                                data-sizes="100w">
                                        <img alt="trains" class="lazy w-100 shadow-sm rounded"
                                             data-src="{{asset('images/icons/include/trains.png')}}"
                                             data-srcset="{{asset('images/icons/include/trains.png')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <small>@lang('home.trains')</small>
                                </div>
                                <div class="col">
                                    <img data-src="{{asset('images/icons/include/transfers.png')}}" data-srcset="{{asset('images/icons/include/transfers.png')}}" alt="transfers" class="w-100 lazy has-webp">
                                    <small>@lang('home.transfers')</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.looking_travel_experience')</h2>
                        <p class="lead text-muted">@lang('home.looking_travel_experience_p')</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($categorias_block_1 as $categorias_block)
                    <div class="col-12 mb-3 col-sm-12 mb-sm-3 col-md">
                        <div class="header-img-category rounded">
                            <div class="position-relative">
                                <a href="{{route('category_show_path', str_replace(' ', '-', strtolower($categorias_block->nombre)))}}">
                                    {{--<img src="{{asset('images/category/home.jpg')}}" alt="" class="w-100 shadow-sm">--}}
                                    <picture>
                                        <source type="image/webp"
                                                data-srcset="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                                data-sizes="100w">
                                        <img alt="trains" class="lazy w-100 shadow-sm"
                                             data-src="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                             data-srcset="{{asset('images/category/'.$categorias_block->imagen.'')}}"
                                             data-sizes="100w">
                                    </picture>
                                    <div class="position-absolute-bottom text-white text-left">
                                        <h5 class="p-2 m-0 footer-title-category">{{ucwords(strtolower($categorias_block->nombre))}}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 col-sm-12 col-md">
                        <div class="row mb-3">
                            @foreach ($categorias_random as $categorias_randoms)
                            <div class="col-12 col-sm-6 mb-3 col-sm">
                                <div class="header-img-category rounded">
                                    <div class="position-relative">
                                        <a href="{{route('category_show_path', str_replace(' ', '-', strtolower($categorias_randoms->nombre)))}}">
                                            {{--<img src="{{asset('images/category/recommended.jpg')}}" alt="" class="w-100 shadow-sm">--}}
                                            <picture>
                                                <source type="image/webp"
                                                        data-srcset="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                        data-sizes="100w">
                                                <img alt="trains" class="lazy w-100 shadow-sm"
                                                     data-src="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                     data-srcset="{{asset('images/category/'.$categorias_randoms->imagen.'')}}"
                                                     data-sizes="100w">
                                            </picture>
                                            <div class="position-absolute-bottom text-white text-left">
                                                <h6 class="p-2 m-0 font-weight-normal footer-title-category">{{ucwords(strtolower($categorias_randoms->nombre))}}</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('category_path')}}" class="btn btn-g-yellow btn-lg font-weight-bold">@lang('home.view_all_category')</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="position-relative">
            <div class="offer py-5">
                <div class="container">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-white">@lang('home.why_with_gotoperu')</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.small_groups')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_assistance')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.book_now_option')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.cutting_middlemen')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_take_pride')</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">@lang('home.we_can_adapt')</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-white text-white text-center">
                            <p class="font-weight-light">@lang('home.since_2009')</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-white text-white text-center">
                            <a href="#" class="btn btn-lg btn-g-yellow font-weight-bold text-white">@lang('home.inquire_now')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light py-5 py-md-5">
            <div class="container">
                <div class="row d-none d-sm-inline-flex align-items-center">
                    <div class="col col-sm-12 col-md">
                        <div class="row no-gutters">
                            <div class="col">
                                {{--<img class="w-100 rounded-bottom lazy has-webp"--}}
                                     {{--data-src="{{asset('images/banner-home2.jpg')}}"--}}
                                     {{--data-srcset="{{asset('images/banner-home2.jpg')}}">--}}

                                <picture>
                                    <source type="image/webp"
                                            data-srcset="{{asset('images/banner-home2.webp')}}"
                                            data-sizes="100w">
                                    <img alt="trains" class="lazy w-100 shadow-sm"
                                         data-src="{{asset('images/banner-home2.jpg')}}"
                                         data-srcset="{{asset('images/banner-home2.jpg')}}"
                                         data-sizes="100w">
                                </picture>

                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                {{--<img class="w-100 rounded-bottom lazy has-webp"--}}
                                     {{--data-src="{{asset('images/banner-home3.jpg')}}"--}}
                                     {{--data-srcset="{{asset('images/banner-home3.jpg')}}">--}}
                                <picture>
                                    <source type="image/webp"
                                            data-srcset="{{asset('images/banner-home3.webp')}}"
                                            data-sizes="100w">
                                    <img alt="trains" class="lazy w-100 shadow-sm"
                                         data-src="{{asset('images/banner-home3.jpg')}}"
                                         data-srcset="{{asset('images/banner-home3.jpg')}}"
                                         data-sizes="100w">
                                </picture>


                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md">
                        <h2 class="text-secondary h1 font-weight-bold text-g-yellow"><strong>@lang('home.we_are_gotoperu')</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="text-dark">@lang('home.we_are_gotoperu_p_2')</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.headquarters')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.company_25_members')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.founded_2009')</li>
                            <li><i class="fa fa-check text-g-yellow"></i> @lang('home.offices_lima')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.destinations')</h2>
                        <p class="lead text-muted">@lang('home.destination_s_p')</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($destinos->take(3) as $destino)
                    <div class="col-12 mb-3 col-sm-6 mb-md-0 col-md">
                        <div class="header-img-category header-img-destinations rounded">
                            <div class="position-relative">
                                <a href="{{route('destinations_country_show_path', ['peru-travel', str_replace(' ','-', mb_strtolower($destino->nombre))])}}-tours">
{{--                                    <img src="{{asset('images/destinations/destinations/machu-picchu.jpg')}}" alt="" class="w-100 shadow-sm">--}}
{{--                                    <picture>--}}
{{--                                        <source type="image/webp"--}}
{{--                                                data-srcset="{{asset('images/destinations/'.$destino->imagen.'')}}"--}}
{{--                                                data-sizes="100w">--}}
{{--                                        <img alt="{{ucwords(strtolower($destino->nombre))}}" class="lazy w-100 shadow-sm"--}}
{{--                                             data-src="{{asset('images/destinations/'.$destino->imagen.'')}}"--}}
{{--                                             data-srcset="{{asset('images/destinations/'.$destino->imagen.'')}}"--}}
{{--                                             data-sizes="100w">--}}
{{--                                    </picture>--}}
                                    <img src="{{asset('images/destinations/'.$destino->imagen.'')}}" class="w-100 shadow-sm" alt="{{ucwords(strtolower($destino->nombre))}}">
                                    <div class="position-absolute-bottom text-white text-left mb-5 text-center">
                                        <h6 class="p-2 m-0 font-weight-bold footer-title-category">{{ucwords(strtolower($destino->nombre))}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{route('destinations_path')}}" class="btn btn-g-yellow btn-lg font-weight-bold">@lang('home.view_all_destinations')</a>
                    </div>
                </div>
            </div>
        </section>



{{--    <section class="bg-light pb-5 d-none d-sm-block">--}}
{{--        <div class="container-fluid">--}}

{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="row slider-top-home mx-4">--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/21.jpg')}}">--}}
{{--                                <img data-lazy="{{asset('images/slider-home/thumbnail/21.jpg')}}" class="w-100" />--}}
{{--                                --}}{{--<picture>--}}
{{--                                --}}{{--<source type="image/webp"--}}
{{--                                --}}{{--data-srcset="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
{{--                                --}}{{--data-sizes="100w">--}}
{{--                                --}}{{--<img alt="gotoperu" class="lazy w-100"--}}
{{--                                --}}{{--data-src="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
{{--                                --}}{{--data-srcset="{{asset('images/slider-home/thumbnail/21.jpg')}}"--}}
{{--                                --}}{{--data-sizes="100w">--}}
{{--                                --}}{{--</picture>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/22.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/22.jpg')}}" class="w-100" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/23.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/23.jpg')}}" class="w-100" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/24.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/24.jpg')}}" class="w-100" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/25.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/25.jpg')}}" class="w-100" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <a class="venobox w-100" data-gall="myGallery" href="{{asset('images/slider-home/26.jpg')}}"><img data-lazy="{{asset('images/slider-home/thumbnail/26.jpg')}}" class="w-100" /></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



        <section class="bg-light pt-5">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-bold text-g-dark">@lang('home.peru_authentic_experiences')</h2>
                        <a href="{{route('gallery_path')}}" class="font-weight-bold">@lang('home.see_our_publications')</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        {{--<h6 class="text-secondary"><strong><a href=""><i class="fab fa-instagram"></i></a> #gotoperu check out these #gotoperu photos from past travelers. After your trip, come back and share some of your owm!</strong></h6>--}}
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col p-0">
                        <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>

                    </div>
                </div>

            </div>
        </section>


        @include('layouts.page.form-quote')


        <section class="bg-light pb-5 ">
            <div class="container">
                <div class="row pt-5 pb-2">
                    <div class="col">
                        <h2 class="text-g-dark h4 font-weight-bold"><strong>@lang('home.certificates')</strong></h2>
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        <p class="font-weight-bold text-muted">@lang('home.certificates_p')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-none d-md-block">
                        <img data-src="{{asset('images/cuadro-01.png')}}" data-srcset="{{asset('images/cuadro-01.png')}}" alt="border" class="w-100 lazy has-webp">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-1.jpg')}}" data-srcset="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-1">
                                {{--<div class="modal fade" id="certificate-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-2.jpg')}}" data-srcset="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-2">
                                {{--<div class="modal fade" id="certificate-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                <img data-src="{{asset('images/certificates/certificate-3.jpg')}}" data-srcset="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="w-100 lazy has-webp" data-toggle="modal" data-target="#certificate-3">
                                {{--<div class="modal fade" id="certificate-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                {{--<div class="modal-body p-0">--}}
                                {{--<img src="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-1 d-none d-md-block">
                        <img data-src="{{asset('images/cuadro-02.png')}}" data-srcset="{{asset('images/cuadro-02.png')}}" alt="border" class="w-100 lazy has-webp">
                    </div>
                </div>

            </div>
        </section>
    <section class="bg-light">
        <div class="container">
            <div class="row pt-5 pb-2">
                <div class="col">
                    <h2 class="text-g-dark h4 font-weight-bold"><strong>GOTOPERU GROUP</strong></h2>
                </div>
            </div>
            <div class="row align-items-center py-3">
                <div class="col-6 col-md">
                    <img data-src="{{asset('images/logos/logo-gotoperu-footer.png')}}" data-srcset="{{asset('images/logos/logo-gotoperu-footer.png')}}" alt="logo gotoperu" class="img-fluid lazy has-webp">
                </div>
                <div class="col-6 col-md">
                    <a href="https://www.andesviagens.com/" target="_blank"><img data-src="{{asset('images/logos/logo-andes-footer.png')}}" data-srcset="{{asset('images/logos/logo-andes-footer.png')}}" alt="logo andes viagens" class="img-fluid lazy has-webp"></a>
                </div>
                <div class="col-6 col-md">
                    <a href="http://www.gotolatinamerica.com/" target="_blank"><img data-src="{{asset('images/logos/logo-latinamerica-footer.png')}}" data-srcset="{{asset('images/logos/logo-latinamerica-footer.png')}}" alt="logo gotolatinamerica" class="img-fluid lazy has-webp"></a>
                </div>
                <div class="col-6 col-md">
                    <a href="https://www.llama.tours/" target="_blank"><img data-src="{{asset('images/logos/logo-llama.png')}}" data-srcset="{{asset('images/logos/logo-llama.png')}}" alt="logo machupicchu galapagos" class="img-fluid lazy has-webp"></a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')

        <script>

            //venobox
            $(document).ready(function(){
                $('.venobox').venobox();
            });

            //slick
            $('.slider-top-home').slick({
                // dots: true,
                lazyLoad: 'ondemand',
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            lazyLoad: 'ondemand',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });

            $('.slider-video-testimonio').slick({
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 10000,
                arrows: true,
                dots: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            arrows: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            var swiper = new Swiper('.swiper-container-gallery', {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 50,
                    },
                }
            });

        </script>


    @endpush

@stop
