{{--<nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-md-flex sticky-top contenido2" id="content-page">--}}
    {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'packages') ? 'active' : '' }}" href="{{route('packages_path')}}">TOURS PACKAGES</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal bg-success" href="{{route('complete_path')}}"><span class="text-white">AIR & LAND</span></a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'destinations') ? 'active' : '' }}" href="{{route('destinations_path')}}">DESTINATIONS</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'about-us') ? 'active' : '' }}" href="{{route('about_path')}}">ABOUT US</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'frequently-asked-questions') ? 'active' : '' }}" href="{{route('faq_path')}}">FAQ</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'testimonials') ? 'active' : '' }}" href="{{route('testimonials_path')}}">TESTIMONIALS</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal bg-g-yellow" href="#Inquire">INQUIRE</a>--}}
    {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
{{--</nav>--}}

<section class="bg-dark sticky-top py-2 d-md-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="#Inquire" class="btn btn-block btn-g-yellow">INQUIRE NOW</a>
            </div>
            <div class="col">
                @if (App::getLocale() == "en")
                    <a href="tel:+2029963000" class="mx-3 h4"><i class="fa fa-phone text-white"></i></a>
                @endif
                    @if (App::getLocale() == "pt")
                        <a href="https://api.whatsapp.com/send?phone=+551141302800" target="_blank" class="stretched-link">
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                        </a>
                    @endif
                    @if (App::getLocale() == "es")
                        <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="stretched-link">
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                        </a>
                    @endif
            </div>
            <div class="col">
                <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars text-white"></i></a>
            </div>
        </div>
    </div>
</section>
<section class="py-2 d-md-none bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-ave.png')}}" src="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="" class="w-100"></a>
            </div>
        </div>
        <hr>

    </div>
    <img src="{{asset('images/guia-gotoperu.jpg')}}" alt="" class="w-100">
</section>