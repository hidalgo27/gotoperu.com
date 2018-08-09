@extends('layouts.page.default')

@section('content')
    <section>
        <div class="jumbotron jumbotron-slider-1 rounded-0">
            <div class="container">
                <h2 class="text-white my-5 h1">404</h2>
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
                    {{--<h1 class="text-secondary h5"><strong>PERU TRAVEL PACKAGES</strong></h1>--}}
                    <h1 class="text-g-green display-1 font-weight-bold">404</h1>
                    {{--<p class="lead">our most popular <strong>Peru and South America itineraries</strong>, these <strong>packages</strong> could be used as a reference to customize your own trip. At <strong>GOTOPERU</strong> we specialize in crafting personalize experiences based on your preferences; we invited to review these programs to have glimpse of the most important destinations for instance MachuPicchu, Lake Titicaca, Nazca and the Amazon.</p>--}}

                    <div class="alert alert-g-yellow" role="alert">
                        <h4>Lo sentimos, la página que intentabas alcanzar no se puede encontrar.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">

                    <p>Lo sentimos, la página que intentabas alcanzar no se puede encontrar.</p>

                    <p>Visite <a href="/">GotoPeru</a> para conocer más acerca de nuestros Especiales en Perú , nuestros Peru Trekking Tours o Contáctenos para ayudarlo a construir un viaje completamente personalizable.</p>

                    <p><b>Es posible que su página no pueda ser encontrada por las siguientes razones:</b></p>
                    <ul>
                        <li>La dirección de la url ha cambiado como resultado de nuestro nuevo diseño web y reestructuración.</li>
                        <li>La página puede estar en construcción.</li>
                        <li>El enlace en el que hizo clic está roto.</li>
                        <li>La página no está temporalmente disponible para mantenimiento.</li>
                        <li>La dirección de la url fue escrita incorrectamente.</li>
                    </ul>
                    <p><b>Soluciones posibles:</b></p>
                    <ul>
                        <li>Visite la página de inicio de <a href="/">GotoPeru</a> .</li>
                        <li>Acceda al mapa del sitio .</li>
                        <li>Si lo desea, póngase en contacto con el administrador del sitio web con su problema en: hidalgo@pandaninja.com</li>
                    </ul>
                    <p>Gracias.</p>
                </div>
            </div>
        </div>
    </section>

    @stop