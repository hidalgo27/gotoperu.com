{{--<div id="title" class="text-white">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row align-items-center justify-content-between my-2">--}}
            {{--<div class="col-3">--}}
                {{--<a href="{{route('home_path')}}">--}}
                    {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                    {{--<img class="w-100 lazy has-webp"--}}
                         {{--data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"--}}
                         {{--data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col text-center">--}}
                {{--<h5 class="font-weight-light"><b class="font-weight-bold">GO</b> with the Peruvian experts</h5>--}}
            {{--</div>--}}
            {{--<div class="col-3 text-right">--}}
                {{--<a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5">(202) 996-3000</a>--}}
                {{--<a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div id="title" class="text-white">
    <div class="container-fluid">

        @if (App::getLocale() == "es")
        <div class="row align-items-center text-center small">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="nav-tabs-wrapper sticky-top">
                            <ul id="menu" class="nav nav-pills nav-tabs dragscroll horizontal d-sm-flex nav-itinerary">
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+56225814909"><img src="{{asset('images/icons/chile.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Chile"> +56 225814909</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+523341625836"><img src="{{asset('images/icons/mexico.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="México"> +52 3341625836</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+5713819310"><img src="{{asset('images/icons/colombia.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Colombia"> +57 1 3819310</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+541151990581"><img src="{{asset('images/icons/argentina.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Argentina"> +54 11 5199-0581</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+5184206931"><img src="{{asset('images/icons/peru.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Perú"> +51 84 206931</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white font-weight-bold rounded-0" href="tel:+5078365248"><img src="{{asset('images/icons/panama.png')}}" alt="" width="22" data-toggle="tooltip" data-placement="top" title="Panamá"> +507 836-5248</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row align-items-center justify-content-between my-2">
            <div class="col-3 col-md-4 col-lg-4 col-xl-3">
                <a href="{{route('home_path')}}">
                    {{--<img src="{{asset('images/logos/logo-gotoperu-ave-w.webp')}}" alt="" class="img-fluid">--}}
                    <img class="w-100 lazy has-webp"
                         data-src="{{asset('images/logos/logo-gotoperu-ave-w.png')}}"
                         data-srcset="{{asset('images/logos/logo-gotoperu-ave-w.png')}}" alt="logo gotoperu">
                </a>
            </div>
            <div class="col d-md-none d-lg-inline col-lg col-xl text-center">
                @if (App::getLocale() == "pt")
                <h5 class="font-weight-light"><img src="{{asset('images/icons/brasil.png')}}" width="30"  alt="brazil"> <img src="{{asset('images/icons/peru.png')}}" width="30"  alt="peru"> @lang('home.header_slogan')</h5>
                @endif
            </div>
            <div class="col-3 col-md-6 col-lg-3 col-xl-3 text-right">
                <a href="tel:+2029963000" class="mx-3 text-g-yellow font-weight-bold h5"><img src="{{asset('images/icons/peru.png')}}" alt="" width="25" data-toggle="tooltip" data-placement="top" title="Perú"> +55 (11) 31982239</a>
                <a href="#" class="text-white"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars fa-2x"></i></a>
            </div>
        </div>
    </div>
</div>