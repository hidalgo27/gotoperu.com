{{--<nav class="nav nav-pills nav-fill nav-goto navbar-expand-lg d-none d-md-flex" id="content-page">--}}
    {{--<a class="nav-item nav-link active" href="#">Active</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'packages') ? 'active' : '' }}" href="{{route('packages_path')}}">TOURS PACKAGES</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'destinations') ? 'active' : '' }}" href="{{route('destinations_path')}}">DESTINATIONS</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'about-us') ? 'active' : '' }}" href="{{route('about_path')}}">ABOUT US</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'frequently-asked-questions') ? 'active' : '' }}" href="{{route('faq_path')}}">FAQ</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal {{ Request::is( 'testimonials') ? 'active' : '' }}" href="{{route('testimonials_path')}}">TESTIMONIALS</a>--}}
    {{--<a class="nav-item nav-link text-g-dark font-weight-normal bg-g-yellow border-g-dark" href="#Inquire">INQUIRE</a>--}}
    {{--<a class="nav-item nav-link disabled" href="#">Disabled</a>--}}
{{--</nav>--}}

<section class="py-2 d-md-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{route('home_path')}}"><img data-src="{{asset('images/logos/logo-gotoperu-ave.png')}}" data-srcset="{{asset('images/logos/logo-gotoperu-ave.png')}}" alt="logo gotoperu" class="img-fluid lazy has-webp"></a>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark py-2 d-md-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="#Inquire" class="btn btn-block btn-g-yellow">INQUIRE NOW</a>
            </div>
            <div class="col">
                <a href="tel:+2029963000" class="mx-3 h4"><i class="fa fa-phone text-white"></i></a>
            </div>
            <div class="col">
                <a href="#" class="mx-3 h2"  data-toggle="modal" data-target="#modal-menu"><i class="fa fa-bars text-white"></i></a>
            </div>
        </div>
    </div>
</section>

