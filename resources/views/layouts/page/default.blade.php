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

<section>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul class="row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Glyphicons</li>
                                    <li><a href="#">Available glyphs</a></li>
                                    <li class="disabled"><a href="#">How to use</a></li>
                                    <li><a href="#">Examples</a></li>
                                    <li class="divider"></li>
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
                                    <li class="divider"></li>
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
                                    <li class="divider"></li>
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
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</section>

{{--scripts--}}
<script src="{{asset("js/app.js")}}"></script>
@stack('scripts')
</body>
</html>