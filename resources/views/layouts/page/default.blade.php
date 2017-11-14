<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agencia de Viajes en Peru | Tours Machu Picchu</title>
    <meta name="description" content="Paquetes de viaje a Perú con un auténtico operador peruano, oficinas en Lima, Cusco, Arequipa y Puno. Ofrecemos salidas diarias a Machu Picchu.">

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body>

<section>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-3">
                <img src="https://gotoperu.com/img/logos/logo-gotoperu.png" alt="" class="img-fluid mt-4">
            </div>
            <div class="col-2">
                <img src="https://gotoperu.com/img/logos/asta-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-4 text-center">
                <h6 class="font-weight-bold mt-4">BEST TESTIMONIALS & LOCAL CONNECTIONS</h6>
                {{--<a href="">(813) 454-9707</a> |--}}
                {{--<a href="https://m.me/GOTOPERUcom/" class="btn btn-primary btn-sm mb-2" target="_blank"><i class="fa fa-facebook"></i> Messenger</a> |--}}
                {{--<a href="https://api.whatsapp.com/send?phone=51992051190" class="btn btn-success mb-2 btn-sm" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp</a>--}}

                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-g-green btn-sm d-none d-sm-inline-block"><i class="fa fa-commenting"></i> Chat</a>
                        <span class="mx-2">|</span>
                        <button type="button" class="btn btn-g-yellow btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#contant_m">
                            Design
                        </button>
                        <a href="https://www.facebook.com/GOTOPERUcom/" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/GOTOPERUCOM" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/gotoperucom/" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCpfUdQBRjnSEbh6Gu3Uh_Mg" class="d-inline text-dark mx-1" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-link mt-4 font-weight-bold">(813) 454-9707</button>
                <button type="button" class="btn btn-g-dark mt-4">Contact Us</button>
            </div>
        </div>
    </div>
</section>



<section class="sticky-top bg-g-dark mt-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            {{--<a class="navbar-brand" href="#">Navbar</a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-g-yellow" href="#">OUR PICKS<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TOURS PACKAGES</a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            DESTINATIONS
                        </a>
                        <div class="dropdown-menu dropdown-menu-large" aria-labelledby="navbarDropdown">
                            <ul class="row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Glyphicons</li>
                                        <li><a href="#">Available glyphs</a></li>
                                        <li class="disabled"><a href="#">How to use</a></li>
                                        <li><a href="#">Examples</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-header">Dropdowns</li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Aligninment options</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Disabled menu items</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Button groups</li>
                                        <li><a href="#">Basic example</a></li>
                                        <li><a href="#">Button toolbar</a></li>
                                        <li><a href="#">Sizing</a></li>
                                        <li><a href="#">Nesting</a></li>
                                        <li><a href="#">Vertical variation</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-header">Button dropdowns</li>
                                        <li><a href="#">Single button dropdowns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Input groups</li>
                                        <li><a href="#">Basic example</a></li>
                                        <li><a href="#">Sizing</a></li>
                                        <li><a href="#">Checkboxes and radio addons</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-header">Navs</li>
                                        <li><a href="#">Tabs</a></li>
                                        <li><a href="#">Pills</a></li>
                                        <li><a href="#">Justified</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Navbar</li>
                                        <li><a href="#">Default navbar</a></li>
                                        <li><a href="#">Buttons</a></li>
                                        <li><a href="#">Text</a></li>
                                        <li><a href="#">Non-nav links</a></li>
                                        <li><a href="#">Component alignment</a></li>
                                        <li><a href="#">Fixed to top</a></li>
                                        <li><a href="#">Fixed to bottom</a></li>
                                        <li><a href="#">Static top</a></li>
                                        <li><a href="#">Inverted navbar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GETTING TO PERU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TESTIMONIAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">TRAVEL BLOG</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRAVEL AGENTS</a>
                    </li>
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                    {{--</li>--}}
                </ul>
                {{--<form class="form-inline my-2 my-lg-0">--}}
                {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--</form>--}}
            </div>
        </nav>
    </div>
</section>


<section>
    <div class="jumbotron jumbotron-slider rounded-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-5 text-white text-center">
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <img src="https://gotoperu.com/img/logos/tripadvisor_logo.png" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/assistances.png" alt="" class="w-100">
                            <span>Assistances</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/breakfast.png" alt="" class="w-100">
                            <span>Breakfast</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/entrances.png" alt="" class="w-100">
                            <span>Entrances</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/flight.png" alt="" class="w-100">
                            <span>Flight</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/hotels.png" alt="" class="w-100">
                            <span>Hotels</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/tours.png" alt="" class="w-100">
                            <span>Tours</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/trains.png" alt="" class="w-100">
                            <span>Trains</span>
                        </div>
                        <div class="col">
                            <img src="https://gotoperu.com/img/ico/include/transfers.png" alt="" class="w-100">
                            <span>Transfers</span>
                        </div>
                    </div>

                </div>
                <div class="col-4 os-animation bg-rgba-dark py-2 rounded" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h5 class="text-white font-weight-bold text-center">GET A FREE QUOTE</h5>
                    <form>
                        <div class="row">
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Full Name*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Traveling Date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Travelers">
                            </div>
                            <div class="col input-group-sm mb-1">
                                <input type="text" class="form-control" placeholder="Days">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6 class="my-1 font-weight-bold text-g-yellow">Peru main destinations</h6>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox"  autocomplete="off" name="destinations[]" value="Machu Picchu"> Machu Picchu
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Cusco"> Colca Canyon
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lago Titicaca"> Puno & Lago titicaca
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Puno"> Amazon
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lima"> Lima
                                    </label>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg" data-toggle="buttons">
                                    <label class="btn btn-outline-g-green btn-block btn-sm">
                                        <input type="checkbox" autocomplete="off" name="destinations[]" value="Lineas de Nazca"> Linhas de Nazca
                                    </label>
                                </div>
                            </div>


                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-addon" id="">Outros</span>
                                <input type="text" class="form-control" id="d_otros" aria-describedby="basic-addon3">
                            </div>

                        <div class="form-group input-group-sm ">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="How do you imagine a perfect trip to Peru, Special Requests, Questions, Comments"></textarea>
                        </div>
                        <button type="submit" class="btn btn-g-green btn-block">Send</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col">
            <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s"><!--.row -->
                <div class="col"><a href="https://www.facebook.com/GOTOPERUcom/" target="_blank"><img src="https://gotoperu.com/img/logos/logo-facebook.png" title="gotoperu facebook 30k like" alt="gotoperu facebook 30k like" class="w-100"></a></div>
                <div class="col"><a href="http://www.asta.org/MemberServices/MemberDirectoryIndivdualDisplayASTA.cfm?navItemNumber=11304&amp;id=900235751" target="_blank"><img src="https://gotoperu.com/img/logos/logo-asta.png" title="asta" alt="logo asta" class="w-100"></a></div>
                <div class="col"><a href="http://investors.nytco.com/press/press-releases/press-release-details/2014/The-New-York-Times-Travel-Show-Announces-Special-Travel-Discounts-for-Show-Attendees/default.aspx" target="_blank"><img src="https://gotoperu.com/img/logos/logo-newyorktimes.png" title="the new york times" alt="the new york times" class="w-100"></a></div>
                <div class="col"><a href="http://apoturperu.org/" target="_blank"><img src="https://gotoperu.com/img/logos/logo-apotur.png" title="apotur" alt="logo apotur" class="w-100"></a></div>
                <div class="col"><a href="http://www.peru.travel/en-us/Search-Travel-Services/pageindex/0/categoryid/5/subcategoryidl1/-1/subcategoryidl2/-1.aspx?keyword=go+to+peru&amp;destid=,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25" target="_blank"><img src="https://gotoperu.com/img/logos/logo-promperu.png" title="promperu" alt="logo promperu" class="w-100"></a></div>
                <div class="col"><a href="#" target="_blank"><img src="https://gotoperu.com/img/logos/logo-meetup.png" title="meetup" alt="logo meetup" class="w-100"></a></div>
            </div><!-- /.row -->
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>
                <h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>
                <p class="lead">Offering you an authentic and reliable <strong>travel experience</strong> in peru welcoming you to explore the many fully <strong>customized travel packages</strong> we have that suit every budget. let us plan your unforgettable <strong>trip</strong> to our majestic <strong>machu picchu</strong> and the rest of our  homeland… peru!</p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="row py-1 no-gutters">
                    <div class="col">
                        <h2 class="h5"><a href="packages/the-best-of-peru-express-9-day-tour/" class="text-dark">THE HIGHLIHTS OF PERU IN 9 DAYS!</a>
                            <a href="" class="float-right btn btn-g-yellow btn-sm font-weight-bold">Check Availability</a></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/banners/cusco.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Cusco</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/banners/lake-titicaca.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Lake Titicaca</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/banners/lima.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Lima</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/banners/machupicchu.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Machu Picchu</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/banners/nazca-lines.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Nazca Lines</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/banners/sacred-valley.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Sacred Valley</h3>
                                        {{--<p>...</p>--}}
                                    </div>
                                </div>
                            </div>
                            {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Previous</span>--}}
                            {{--</a>--}}
                            {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Next</span>--}}
                            {{--</a>--}}
                        </div>
                    </div>
                </div>

                <div class="row no-gutters text-center">
                    <div class="col bg-g-yellow">
                        <p class="h2">9 Days <span class="d-block h5">8 Night</span></p>
                    </div>
                    <div class="col bg-g-green text-white">
                        <p class="h2 mt-2"><small class="d-block h6 m-0">starting from</small> $1449</p>
                    </div>
                    <div class="col bg-g-dark text-white">
                        <p class="m-0">All Included</p>
                        <small>Hotels, Tours, Entrances, Nazca Overflight, Transfers.</small>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-9">
                        <h5 class="text-g-yellow"><strong>PERU</strong> EXPERTS ARRANGING YOUR SOON-TO-BE FAVORITE <strong>VACATION</strong></h5>
                        <p>From the moment you arrive to <strong>Peru</strong>, we will be pleased to share our passion, knowledge and experiences that we, the GOTOPERU team, have for our beloved country with you! We will make sure to make your <strong>Peru trip</strong> fulfill all the wanderlust in you…</p>
                    </div>
                    <div class="col">
                        <div class="row">
                            <!-- <img src="img/martin-paul.jpg" title="martin and paul" alt="go to peru team"> -->
                            <div class="col text-center">
                                <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                    <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                        <img src="https://gotoperu.com/img/firma-martin.jpg" alt="martin" class="img-fluid">
                                        <span itemprop="name" class="text-8 d-block">MARTIN CATANO</span>
                                        <span itemprop="title" class="text-8 d-block">MANAGER</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                    <div itemscope itemtype="http://data-vocabulary.org/Persona" class="vcard">
                                        <img src="https://gotoperu.com/img/firma-paul.jpg" alt="paul" class="img-fluid">
                                        <span itemprop="name" class="fn text-8 d-block">PAUL CATANO</span>
                                        <span itemprop="title" class="ceo text-8 d-block">CEO</span>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="img/firma-paul.jpg" class="width-gral-img" alt="firma paul catano">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="content-area-3">
                            <div class="position-relative">
                                <img src="https://gotoperu.com/img/video/prom-peru.jpg" alt="video promperu" class="img-fluid">
                                <div class="video-btn-1">
                                    <a href="https://www.youtube.com/embed/gGq_U1DYUCs" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">

                            <div class="position-relative">
                                <img src="https://gotoperu.com/img/video/gotoperu-group.jpg" alt="gotoperu group" class="img-fluid">
                                <div class="video-btn-1">
                                    <a href="https://www.youtube.com/embed/AOa1ygLiapc" title=""><i class="fa fa-play-circle text-g-dark"></i></a>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    {{--<div class="">--}}
        {{--<a href="" class="">--}}
            {{--<div class="row">--}}
                {{--<div class="section-title-1 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">--}}
                    {{--<h5 class="color-white"><strong>PERU TRAVEL OFFERS</strong></h5>--}}
                    {{--<!-- <div class="sec-title-div-4"></div> -->--}}
                    {{--<p class="color-black header-small-text-2">Various <strong>packages</strong> for all budgets with great discounts! we're all about savings, check our <strong>best packages</strong> below!</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</div>--}}

    <div class="jumbotron jumbotron-divider-1 rounded-0">
        <div class="container">
            <div class="row justify-content-between no-gutters">
                <div class="col text-white text-center bg-rgba-dark rounded p-4">
                    <h5 class="text-g-yellow"><strong>PERU TRAVEL OFFERS</strong></h5>
                    <!-- <div class="sec-title-div-4"></div> -->
                    <p class="m-0">Various <strong>packages</strong> for all budgets with great discounts! we're all about savings, check our <strong>best packages</strong> below!</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row pt-3">
            <div class="col d-flex">
                <div class="card">
                    {{--<div class="card-header">--}}
                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                    {{--</div>--}}
                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="http://www.andesviagens.com/images/packages/AV700.jpg" alt="Card image cap"></a>
                    <div class="card-img-overlay p-1">
                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                    </div>
                    <div class="card-body p-2 text-center">
                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                            Lima, Cusco, Sacred Valley, Machu Picchu
                        </p>
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    <div class="card-footer text-muted p-2">
                        <div class="row">
                            <div class="col text-left">From</div>
                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                <sup>$</sup> 898 <small>USD</small>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    {{--<div class="card-header">--}}
                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                    {{--</div>--}}
                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTPE1005.jpg" alt="Card image cap"></a>
                    <div class="card-img-overlay p-1">
                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                    </div>
                    <div class="card-body p-2 text-center">
                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                            Lima, Cusco, Sacred Valley, Machu Picchu
                        </p>
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    <div class="card-footer text-muted p-2">
                        <div class="row">
                            <div class="col text-left">From</div>
                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                <sup>$</sup> 898 <small>USD</small>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    {{--<div class="card-header">--}}
                    {{--<h4 class="card-title">City tour em cusco</h4>--}}
                    {{--</div>--}}
                    <a href="http://gotoperu.com.pe/paquete/peru-magico"><img class="card-img-top " src="https://gotoperu.com/img/fotos/GTLM3000.jpg" alt="Card image cap"></a>
                    <div class="card-img-overlay p-1">
                        <h5 class="card-title rounded text-dark p-2"><span class="badge badge-g-yellow mt-1">7 Days</span> <a href="" class="btn btn-sm btn-dark float-right"><i class="fa fa-search-plus"></i> View Map and Itinerary</a></h5>
                        {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                        {{--<p class="card-text">Last updated 3 mins ago</p>--}}
                    </div>
                    <div class="card-body p-2 text-center">
                        <h4 class="card-title m-0"><a href="http://gotoperu.com.pe/paquete/peru-magico" class="text-dark">Perú Magico</a></h4>
                        {{--<p class="text-left"><i class="fa fa-clock-o text-primary" aria-hidden="true"></i> 6 Días</p>--}}
                        <p class="text-left card-text"><i class="fa fa-map-marker text-g-yellow" aria-hidden="true"></i>
                            Lima, Cusco, Sacred Valley, Machu Picchu
                        </p>
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                    <div class="card-footer text-muted p-2">
                        <div class="row">
                            <div class="col text-left">From</div>
                            <div class="col text-right font-weight-bold text-primary font-montserrat">
                                <sup>$</sup> 898 <small>USD</small>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a href="" class="btn btn-lg btn-primary">VIEW FEATURED PROGRAMS</a>
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-5">
    <div class="container">

        <div class="row pb-5 justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 col-lg-4">
                <img src="{{asset('images/logo-gotoperu.png')}}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12 col-sm-4 mb-5">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                        <img src="{{asset('images/icons/group.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('images/icons/assistance.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('images/icons/customize.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('images/icons/location.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('images/icons/trip.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('images/icons/departure.png')}}" alt="" class="img-fluid">
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

<footer class="mt-5">
    <img src="https://gotoperu.com/img/footer.jpg" alt="" class="w-100">
</footer>

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
@stack('scripts')
<script>
    var jumboHeight = $('.jumbotron').outerHeight();
    function parallax(){
        var scrolled = $(window).scrollTop();
        $('.bg').css('height', (jumboHeight-scrolled) + 'px');
    }

    $(window).scroll(function(e){
        parallax();
    });
</script>
</body>
</html>