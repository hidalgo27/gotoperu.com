<?php

namespace App\Http\Controllers;

use App\TAeropuerto;
use App\TCategoria;
use App\TComentario;
use App\TDestino;
use App\THotel;
use App\THotelDestino;
use App\TItinerarioImagen;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteDificultad;
use App\TpaqueteItinerario;
use App\TPaqueteVuelo;
use App\TPrecioAeropuerto;
use App\TTestimonio;
use App\TVideoTestimonio;
use App\TVuelo;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsManager;
use Illuminate\Support\ServiceProvider;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        SEOMeta::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/');
        SEOMeta::addKeyword(['peru travel packages', 'travel packages to peru', 'Go To Peru', 'machu picchu travel', 'peru vacations', 'peru vacation packages', 'machu picchu deals', 'peru travel offers', 'machu picchu travel offers', 'Machu Picchu packages', 'customize peru travel packages', 'tour packages to machu picchu']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        OpenGraph::setUrl('https://gotoperu.com/');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');


        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $destinos = TDestino::all();
        $testimonial = TTestimonio::all();

        $dificultad = TPaqueteDificultad::all();
//        dd($paquete_destinos);
        $airport = TAeropuerto::with('precio_aeropuerto')->get();
        $comentario = TComentario::with('itinerario')->get();

        return view('page.home',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r, 'destinos'=>$destinos, 'testimonial'=>$testimonial, 'dificultad'=>$dificultad, 'airport'=>$airport, 'comentario'=>$comentario]);
    }

    public function index2()
    {

        SEOMeta::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/');
        SEOMeta::addKeyword(['peru travel packages', 'travel packages to peru', 'Go To Peru', 'machu picchu travel', 'peru vacations', 'peru vacation packages', 'machu picchu deals', 'peru travel offers', 'machu picchu travel offers', 'Machu Picchu packages', 'customize peru travel packages', 'tour packages to machu picchu']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        OpenGraph::setUrl('https://gotoperu.com/');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');


        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $destinos = TDestino::all();
        $testimonial = TTestimonio::all();

        $dificultad = TPaqueteDificultad::all();
//        dd($paquete_destinos);
        $airport = TAeropuerto::with('precio_aeropuerto')->get();
        $comentario = TComentario::with('itinerario')->get();

        $categoria_short = "SHORT PROGRAMS";
        $c_short = TCategoria::where('nombre', $categoria_short)->get();
        foreach ($c_short as $c_s) {
            $categorias_short = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->take(2)->get();
        }

        $categoria_active = "ACTIVE TREKS";
        $c_active = TCategoria::where('nombre', $categoria_active)->get();
        foreach ($c_active as $c_at) {
            $categorias_active = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_at->id)->take(2)->get();
        }

        $categoria_luxury = "LUXURY";
        $c_luxury = TCategoria::where('nombre', $categoria_luxury)->get();
        foreach ($c_luxury as $c_lu) {
            $categorias_luxury = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_lu->id)->take(2)->get();
        }

        $categoria_recommended = "RECOMMENDED";
        $c_recommended = TCategoria::where('nombre', $categoria_recommended)->get();
        foreach ($c_recommended as $c_r) {
            $cateoria_recommended = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_r->id)->take(2)->get();
        }

        $categoria_all = "ALL INCLUDED";
        $c_all = TCategoria::where('nombre', $categoria_all)->get();
        foreach ($c_all as $c_al) {
            $categorias_all = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_al->id)->take(2)->get();
        }

        $categoria_family = "FOR FAMILIES";
        $c_family = TCategoria::where('nombre', $categoria_family)->get();
        foreach ($c_family as $c_fa) {
            $categorias_family = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_fa->id)->take(2)->get();
        }

        $categoria_honeymoon = "HONEYMOON";
        $c_honeymoon = TCategoria::where('nombre', $categoria_honeymoon)->get();
        foreach ($c_honeymoon as $c_hon) {
            $categorias_honeymoon = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_hon->id)->take(2)->get();
        }

        $categoria_cultural = "CULTURAL";
        $c_cultural = TCategoria::where('nombre', $categoria_cultural)->get();
        foreach ($c_cultural as $c_cul) {
            $categorias_cultural = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_cul->id)->take(2)->get();
        }

        $categoria_single = "SINGLE TRAVELER";
        $c_single = TCategoria::where('nombre', $categoria_single)->get();
        foreach ($c_single as $c_sin) {
            $categorias_single = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_sin->id)->take(2)->get();
        }

        $categoria_long = "LONG DURATION";
        $c_long = TCategoria::where('nombre', $categoria_long)->get();
        foreach ($c_long as $c_lon) {
            $categorias_long = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_lon->id)->take(2)->get();
        }

        $categoria_long = "LONG DURATION";
        $c_long = TCategoria::where('nombre', $categoria_long)->get();
        foreach ($c_long as $c_lon) {
            $categorias_long = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_lon->id)->take(2)->get();
        }

        $categoria_cruise = "CRUISE EXTENSION";
        $c_cruise = TCategoria::where('nombre', $categoria_cruise)->get();
        foreach ($c_cruise as $c_cru) {
            $categorias_cruise = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_cru->id)->take(2)->get();
        }
        $testimonio_video = TVideoTestimonio::all()->take(3);

        return view('page.home2',
            compact(
                'categorias_short',
                'categorias_active',
                'categorias_luxury',
                'cateoria_recommended',
                'categorias_all',
                'categorias_family',
                'categorias_honeymoon',
                'categorias_cultural',
                'categorias_single',
                'categorias_long',
                'categorias_cruise',
                'testimonio_video',
                'c_short',
                'c_active',
                'c_luxury',
                'c_recommended',
                'c_all',
                'c_family',
                'c_honeymoon',
                'c_cultural',
                'c_single',
                'c_long',
                'c_cruise'
                ), ['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r, 'destinos'=>$destinos, 'testimonial'=>$testimonial, 'dificultad'=>$dificultad, 'airport'=>$airport, 'comentario'=>$comentario]);
    }

    public  function video_testimonials(){
        $testimonio_video = TVideoTestimonio::all();
        return view('page.video-testimonials', compact('testimonio_video'));
    }

    public function hotels()
    {
        $hoteles = THotel::all();
        return view('page.hotels', ['hoteles'=>$hoteles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function peru_tours()
    {
        SEOMeta::setTitle('Machu Picchu Tours | Peru Tours');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tours', 'Machu Picchu Tours', 'Machu Picchu Vacation Tours', 'Machu Picchu Deals', 'Peru Tours']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Machu Picchu Tours | Peru Tours');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Machu Picchu Tours | Peru Tours');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $comentario = TComentario::with('itinerario')->get();
        $dificultad = TPaqueteDificultad::all();

        return view('page.tours',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r, 'comentario'=>$comentario, 'dificultad'=>$dificultad]);
    }

    public function packages()
    {
        SEOMeta::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tour Packages', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

//        $paquetes = TPaquete::with('precio_paquetes','paquetes_categoria')->get();

        $paquete_categoria = TPaqueteCategoria::with('paquete.precio_paquetes', 'categoria')->get();

        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $comentario = TComentario::with('itinerario')->get();
        $dificultad = TPaqueteDificultad::all();


        return view('page.packages',['paquete_categoria'=>$paquete_categoria, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r, 'comentario'=>$comentario, 'dificultad'=>$dificultad]);
    }

    public function packages_durations($from, $to)
    {

        $paquetes = TPaquete::with('precio_paquetes', 'paquetes_categoria.categoria')->where('duracion', '>=', $from)->where('duracion', '<=', $to)->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $comentario = TComentario::with('itinerario')->get();
        $dificultad = TPaqueteDificultad::all();


        SEOMeta::setTitle('Travel Packages '.$from.'-'.-$to.' days - Peru Travel Packages | Machu Picchu Tour Packages');
        SEOMeta::setDescription('Travel Packages '.$from.'-'.$to.' days. Discover Peru with Gotoperu Tour & Travel Packages. We offer amazing deals on Machu Picchu Vacation Packages.  Give us call @ (202) 996-3000 for more info.');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tour Packages', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Travel Packages '.$from.'-'.$to.' days. Discover Peru with Gotoperu Tour & Travel Packages. We offer amazing deals on Machu Picchu Vacation Packages.  Give us call @ (202) 996-3000 for more info.');
        OpenGraph::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages '.$from.'-'.$to.' days - Peru Travel Packages | Machu Picchu Tour Packages');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.packages-durations',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r, 'duration'=>$from.'-'.$to, 'comentario'=>$comentario, 'dificultad'=>$dificultad]);
    }


    public function packages_list()
    {

        SEOMeta::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tour Packages', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');


        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();


        return view('page.packages-list', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria]);

//        $paquetes = TPaquete::with('precio_paquetes')->get();
//        $paquetes_r = TPaquete::with('precio_paquetes')->get();
//        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
//        return view('page.packages-list',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
    }

    public function itinerary($titulo, $days)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
//        dd($title);
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'imagen_paquetes', 'paquete_incluye', 'paquete_no_incluye')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
//        $paquete_categoria =
        $paquete_iti = TPaquete::with('paquete_itinerario','paquetes_destinos', 'precio_paquetes', 'paquetes_categoria')->where('titulo', $title)->get();

//        $imagen_itinerario = TItinerarioImagen::all();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $vuelo = TVuelo::all();
        $paquete_vuelo = TPaqueteVuelo::with('vuelos')->get();

        $dificultad = TPaqueteDificultad::all();
        $comentario = TComentario::with('itinerario')->get();

        $imagen = TItinerarioImagen::with('itinerario')->get();
//        foreach ($paquete_iti as $paq_i) {
//
//            SEOMeta::setTitle($paq_i->s_title);
//            SEOMeta::setDescription($paq_i->s_description);
////            SEOMeta::setCanonical('https://gotoperu.com/packages');
//            SEOMeta::addKeyword([$paq_i->s_keyword]);
//
//            OpenGraph::setDescription($paq_i->s_description);
//            OpenGraph::setTitle($paq_i->s_titile);
////            OpenGraph::setUrl('http://new-goto.nu/packages/inca-trail-to-machu-picchu/4-days-tours');
//OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
//            OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
//            OpenGraph::setSiteName('goto-peru');
//            OpenGraph::addProperty('type', 'website');
//
//            \Twitter::setType('summary');
//            \Twitter::setTitle($paq_i->s_twtitle);
//            \Twitter::setSite($paq_i->s_twsite);
//            \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');
//        }

        SEOMeta::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Our team has many years of experience in travel organization and our main goal is providing an unforgettable experience.');
        OpenGraph::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.itinerary', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'vuelo'=>$vuelo, 'paquete_vuelo'=>$paquete_vuelo, 'dificultad'=>$dificultad, 'comentario'=>$comentario, 'imagen'=>$imagen]);

    }

    public function category()
    {
        SEOMeta::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tour Packages', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        $categoria = TCategoria::all();

        return view('page.package-category',['categoria'=>$categoria]);
    }
    public function category_show($title)
    {
        $category_t = str_replace('-', ' ', $title);

        $category = TCategoria::where('nombre', $category_t)->get();
        foreach ($category as $c_s) {
            $categorias = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->get();
        }

        $all_category = TCategoria::all();

        SEOMeta::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Machu Picchu Tour Packages', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Machu Picchu Tour Packages | Machu Picchu Vacation Packages | Machu Picchu Deals | Peru Honeymoon Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages to Peru | Peru Vacations | Machu Picchu Travel');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        $categoria = TCategoria::all();

        return view('page.package-category-show',compact('categorias','all_category','category_t'),['categoria'=>$categoria]);
    }

    public function complete()
    {
        $airport = TAeropuerto::with('precio_aeropuerto')->get();

        return view('page.complete', ['airport'=>$airport]);

    }

    public function lista_precio_aero(){
        $id = $_POST["txt_airport"];
        $price_air = TPrecioAeropuerto::where('idaeropuerto', $id)->get();

        return response()->json(['price_air'=>$price_air]);

    }
    public function precio_aero(){
        $id = $_POST["txt_price_airport"];
        $price_t = TPrecioAeropuerto::where('id', $id)->get();
        return response()->json(['price_t'=>$price_t]);

    }
    public function inquire_detail_p(){
        $id_airport = $_POST["txt_airport"];
        $id_price = $_POST["txt_price_airport"];

        return ($id_airport.'-'.$id_price);
    }

    public function complete_detail($air, $price)
    {
        $id_air = $air;
        $id_price = $price;

        $aeropuerto = TAeropuerto::where('id', $id_air)->get();
        $precio_aero = TPrecioAeropuerto::where('id', $id_price)->get();


        return view('page.complete-detail', ['aeropuerto'=>$aeropuerto, 'precio_aero'=>$precio_aero]);

    }

    public function availability_inquire()
    {
        $from = 'info@gotoperu.com';
        $from2 = 'catanopaul@gmail.com';

        $name = $_POST["txt_name"];
        $email = $_POST["txt_email"];
//        $number = $_POST["txt_number"];
        $travelers = $_POST["txt_travelers"];
        $fecha = $_POST["txt_fecha"];
        $precio = $_POST["txt_precio"];
        $aeropuerto = $_POST["txt_aeropuerto"];

        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-complete'], [
                'name' => $name,
                'email' => $email,
//                'number' => $number,
                'travelers' => $travelers,
                'fecha' => $fecha,
                'precio' => $precio,
                'aeropuerto' => $aeropuerto
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


//            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
//                'name' => $name,
//                'email' => $email,
//                'comment' => $comment
////                'comment' => $comment
//            ], function ($messaje) use ($from2) {
//                $messaje->to($from2, 'GotoPeru ES')
//                    ->subject('GotoPeru ES')
//                    /*->attach('ruta')*/
//                    ->from('info@gotoperu.com', 'GotoPeru ES');
//            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

    }

    public function book($titulo, $days)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
//        dd($title);
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $vuelo = TVuelo::all();
        $paquete_vuelo = TPaqueteVuelo::with('vuelos')->get();

        SEOMeta::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Our team has many years of experience in travel organization and our main goal is providing an unforgettable experience.');
        OpenGraph::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Packages: '.ucwords(strtolower($title)).' | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.complete-book', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'vuelo'=>$vuelo, 'paquete_vuelo'=>$paquete_vuelo]);

    }

    public function information($titulo, $days)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
//        dd($title);
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $vuelo = TVuelo::all();
        $paquete_vuelo = TPaqueteVuelo::with('vuelos')->get();


        return view('page.information', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'vuelo'=>$vuelo, 'paquete_vuelo'=>$paquete_vuelo]);

    }

    public function payment($titulo, $days)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
//        dd($title);
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $vuelo = TVuelo::all();
        $paquete_vuelo = TPaqueteVuelo::with('vuelos')->get();


        return view('page.payment', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'vuelo'=>$vuelo, 'paquete_vuelo'=>$paquete_vuelo]);

    }

    public function destinations()
    {
        SEOMeta::setTitle('South America Travel Destinations | Customized Travel Packages');
        SEOMeta::setDescription('Discover beautiful places to visit in south america tours with gotoperu. Experience best places in south america - peru, bolivia, ecuador, brasil.');
        SEOMeta::setCanonical('https://gotoperu.com/destinations');
        SEOMeta::addKeyword(['Customized travel Packages', 'South America Travel', 'South America Travel Destinations', 'Peru Travel Packages']);

        OpenGraph::setDescription('Discover beautiful places to visit in south america tours with gotoperu. Experience best places in south america - peru, bolivia, ecuador, brasil.');
        OpenGraph::setTitle('South America Travel Destinations | Customized Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/destinations');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('South America Travel Destinations | Customized Travel Packages');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        $destinos = TDestino::where('pais', 'peru')->get();

        return view('page.destinations', ['destinos'=>$destinos]);
    }

    public function destinations_country($title)
    {
        $pais = explode('-', $title);
        $pais = $pais[0];
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($pais) { $query->where('pais', $pais);}])->get();
        $destinos = TDestino::get();
        $destinos_p = TDestino::where('pais', $pais)->get();


        SEOMeta::setTitle(''.ucwords($pais).' Travel Destinations | Customized '.ucwords($pais).' Travel Packages');
        SEOMeta::setDescription('Discover beautiful places to visit in '.ucwords($pais).' with GotoPeru..');
        SEOMeta::setCanonical('https://gotoperu.com/destinations/'.$pais.'-travel');
        SEOMeta::addKeyword([''.ucwords($pais).' travel Packages', 'South America Travel', 'South America Travel Destinations']);

        OpenGraph::setDescription('Discover beautiful places to visit in '.ucwords($pais).' with GotoPeru..');
        OpenGraph::setTitle(''.ucwords($pais).' Travel Destinations | Customized '.ucwords($pais).' Travel Packages');
        OpenGraph::setUrl('https://gotoperu.com/destinations/'.$pais.'-travel');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle(''.ucwords($pais).' Travel Destinations | Customized '.ucwords($pais).' Travel Packages');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');


        return view('page.destinations-country', ['paquete'=>$paquete, 'paquetes_de'=>$paquetes_de, 'categoria'=>$categoria, 'destinos'=>$destinos, 'destinos_p'=>$destinos_p, 'pais'=>$pais, 'paquete_destinos'=>$paquete_destinos]);

//        return view('page.destinations-country');
    }

    public function destinations_country_show($title, $city)
    {
        $pais = explode('-travel', $title);
        $pais = $pais[0];
        $ciudad = explode('-tours', $city);
        $ciudad = $ciudad[0];
        $ciudad = str_replace('-', ' ', $ciudad);
        $destinations = str_replace('-', ' ', ucwords(strtolower($title)));
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'paquetes_categoria.categoria')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $destinos = TDestino::get();
        $destinos_p = TDestino::where('pais', $pais)->get();

        $destinos_id = TDestino::where('nombre', $ciudad)->get();


        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($ciudad) { $query->where('nombre', $ciudad);}])->get();

        $comentario = TComentario::with('itinerario')->get();
        $dificultad = TPaqueteDificultad::all();

        SEOMeta::setTitle(''.ucwords($ciudad).' Tours | '.ucwords($ciudad).' Travel Offers | Cheap '.ucwords($ciudad).' Deals');
        SEOMeta::setDescription('Plan your vacations in '.ucwords($ciudad).' with our affordable tour packages and enjoy the astounding structures, stunning beaches, lush landscapes and much more!');
        SEOMeta::setCanonical('https://gotoperu.com/destinations/'.$pais.'-travel/'.$city.'');
        SEOMeta::addKeyword([''.ucwords($ciudad).' Tours', ''.ucwords($ciudad).' Travel Offers', 'Cheap '.ucwords($ciudad).' Deals']);

        OpenGraph::setDescription('Plan your vacations in '.ucwords($ciudad).' with our affordable tour packages and enjoy the astounding structures, stunning beaches, lush landscapes and much more!');
        OpenGraph::setTitle(''.ucwords($ciudad).' Tours | '.ucwords($ciudad).' Travel Offers | Cheap '.ucwords($ciudad).' Deals');
        OpenGraph::setUrl(['url'=>'https://gotoperu.com/destinations/'.$pais.'-travel/'.$city.'']);
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle(''.ucwords($ciudad).' Tours | '.ucwords($ciudad).' Travel Offers | Cheap '.ucwords($ciudad).' Deals');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        $cusco = \GoogleMaps::load('geocoding')
            ->setParam (['address' =>''.$ciudad.''])
            ->get();

        $cusco = json_decode($cusco);

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

//        dd($cusco);

//                dd($cusco2);

        return view('page.destinations-country-show', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria, 'destinos'=>$destinos, 'destinos_p'=>$destinos_p, 'pais'=>$pais, 'paquetes_de'=>$paquetes_de, 'ciudad'=>$ciudad, 'cusco'=>$cusco, 'hoteles'=>$hoteles, 'hoteles_destinos'=>$hoteles_destinos, 'destinos_id'=>$destinos_id, 'comentario'=>$comentario, 'dificultad'=>$dificultad]);
    }

    public function about()
    {

        SEOMeta::setTitle('About Us | GotoPeru');
        SEOMeta::setDescription('Our team has many years of experience in travel organization and our main goal is providing an unforgettable experience.');
        SEOMeta::setCanonical('https://gotoperu.com/about-us');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Our team has many years of experience in travel organization and our main goal is providing an unforgettable experience.');
        OpenGraph::setTitle('About Us | GotoPeru');
        OpenGraph::setUrl('https://gotoperu.com/about-us');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('About Us | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.about');
    }

    public function getting()
    {
        SEOMeta::setTitle('Getting To Peru | GotoPeru');
        SEOMeta::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        SEOMeta::setCanonical('https://gotoperu.com/getting-to-peru');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        OpenGraph::setTitle('Getting To Peru | GotoPeru');
        OpenGraph::setUrl('https://gotoperu.com/getting-to-peru');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Getting To Peru | GotoPeru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.getting');
    }

    public function testimonials()
    {
        SEOMeta::setTitle('Goto Peru Reviews & Testimonials | Goto Peru');
        SEOMeta::setDescription('If you are looking for a travel agency located in Peru, read our travelers testimonials and find out why they loved travelling with GOTOPERU!');
        SEOMeta::setCanonical('https://gotoperu.com/testimonials');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('If you are looking for a travel agency located in Peru, read our travelers testimonials and find out why they loved travelling with GOTOPERU!');
        OpenGraph::setTitle('Goto Peru Reviews & Testimonials | Goto Peru');
        OpenGraph::setUrl('https://gotoperu.com/testimonials');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Goto Peru Reviews & Testimonials | Goto Peru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

//        $users = DB::table('users')->paginate(15);
        $testimonials = TTestimonio::paginate(5);
//        $testimonials->withPath('custom/url');
//        return view('user.index', ['users' => $users]);
        return view('page.testimonials', ['testimonials' => $testimonials]);
    }

    public function faq()
    {
        SEOMeta::setTitle('Frequently Asked Questions | GoTo Peru');
        SEOMeta::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        SEOMeta::setCanonical('https://gotoperu.com/faq');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        OpenGraph::setTitle('Frequently Asked Questions | GoTo Peru');
        OpenGraph::setUrl('https://gotoperu.com/faq');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Frequently Asked Questions | GoTo Peru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.faq');
    }

    public function contact_us()
    {
        SEOMeta::setTitle('Contact US | Go To Peru');
        SEOMeta::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        SEOMeta::setCanonical('https://gotoperu.com/faq');
//        SEOMeta::addKeyword(['Best Peru Trip Packages', 'Peru Machu Picchu Tours']);

        OpenGraph::setDescription('Call our destination specialist today @ (202) 996-3000 & Book a tour in South America. Our specialist will provide you best knowledge about various air travel packages to Peru.');
        OpenGraph::setTitle('Contact US | Go To Peru');
        OpenGraph::setUrl('https://gotoperu.com/faq');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('go to peru');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en_US');

        \Twitter::setType('summary');
        \Twitter::setTitle('Contact US | Go To Peru');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

        return view('page.contact');
    }

    public function agents()
    {
        return view('page.agents');
    }

    public function join()
    {
        return view('page.join');
    }

    public function gallery()
    {
        return view('page.gallery');
    }

    public function deals()
    {
        SEOMeta::setTitle('Travel Deals Peru | Machu Picchu Vacation Packages | Machu Picchu Deals');
        SEOMeta::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        SEOMeta::setCanonical('https://gotoperu.com/packages');
        SEOMeta::addKeyword(['Travel Deals Peru', 'Machu Picchu Packages', 'Machu Picchu Vacation Packages', 'Machu Picchu Deals', 'Peru Honeymoon Travel Packages']);

        OpenGraph::setDescription('Want to travel to Peru? GoToPeru offers a variety travel packages all over Peru. Call one of our offices today to start planning your Machu Picchu trip!');
        OpenGraph::setTitle('Travel Deals Peru | Machu Picchu Vacation Packages | Machu Picchu Deals');
        OpenGraph::setUrl('https://gotoperu.com/packages');
        OpenGraph::addImage('https://gotoperu.com/images/banners/cusco.jpg');
        OpenGraph::addImages(['url'=>'https://gotoperu.com/images/banners/cusco.jpg']);
        OpenGraph::setSiteName('goto-peru');
        OpenGraph::addProperty('type', 'website');

        \Twitter::setType('summary');
        \Twitter::setTitle('Travel Deals Peru | Machu Picchu Vacation Packages | Machu Picchu Deals');
        \Twitter::setSite('@GOTOPERUCOM');
        \Twitter::addImage('https://gotoperu.com/images/banners/cusco.jpg');

//        $paquetes = TPaquete::with('precio_paquetes')->where('descuento', 1)->get();
        $paquetes = TPaquete::with('precio_paquetes')->orwhere('descuento', 1)->orwhere('descuento', 2)->orwhere('descuento', 3)->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.travel-deals',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
//        return view('page.travel-deals');
    }

    public function inquire()
    {
        $from = 'info@gotoperu.com';
        $from2 = 'doriam@gotoperu.com';

        $accommodation = $_POST['txt_accommodation'];
        $number = $_POST['txt_number'];

        $date = $_POST['txt_date'];
        $tel = $_POST['txt_tel'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $package = $_POST['txt_package'];

        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-inquire'], [
                'accommodation' => $accommodation,
                'number' => $number,

                'date' => $date,
                'tel' => $tel,
                'name' => $name,
                'email' => $email,
                'package' => $package,
                'comment' => $comment
            ], function ($messaje) use ($from, $from2) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('GOTOPERU')
                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


//            Mail::send(['html' => 'notifications.page.admin-form-inquire'], [
//                'accommodation' => $accommodation,
//                'number' => $number,
//
//                'date' => $date,
//                'tel' => $tel,
//                'name' => $name,
//                'email' => $email,
//                'package' => $package,
//                'comment' => $comment
//            ], function ($messaje) use ($from2) {
//                $messaje->to($from2, 'GotoPeru')
//                    ->subject('GOTOPERU')
//                    /*->attach('ruta')*/
//                    ->from('hidalgochpnce@gmail.com', 'GotoPeru');
//            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }

    public function contact()
    {
        $from = 'info@gotoperu.com';
        $from2 = 'doriam@gotoperu.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $phone = $_POST['txt_phone'];
        $comment = $_POST['txt_comentario'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'comment' => $comment
            ], function ($messaje) use ($from, $from2) {
                $messaje->to($from, 'GotoPeru ES')
                    ->subject('GotoPeru')
                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


//            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
//                'name' => $name,
//                'email' => $email,
//                'comment' => $comment
////                'comment' => $comment
//            ], function ($messaje) use ($from2) {
//                $messaje->to($from2, 'GotoPeru ES')
//                    ->subject('GotoPeru ES')
//                    /*->attach('ruta')*/
//                    ->from('info@gotoperu.com', 'GotoPeru ES');
//            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }

    public function design()
    {
        $from = 'info@gotoperu.com';
        $from2 = 'doriam@gotoperu.com';

        $accommodation = $_POST['txt_accommodation'];
        $destinations = $_POST['txt_destinations'];
        $number = $_POST['txt_number'];
        $number_t = $_POST['txt_number_t'];
        $duration = $_POST['txt_duration'];
        $duration_t = $_POST['txt_duration_t'];
        $date = $_POST['txt_date'];
        $tel = $_POST['txt_tel'];
        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $comment = $_POST['txt_comment'];
        $countryData = $_POST['txt_countryData'];
        $codeData = $_POST['txt_codeData'];

        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design'], [
                'accommodation' => $accommodation,
                'destinations' => $destinations,
                'number' => $number,
                'number_t' => $number_t,
                'duration' => $duration,
                'duration_t' => $duration_t,
                'date' => $date,
                'tel' => $tel,
                'name' => $name,
                'email' => $email,
                'comment' => $comment,
                'countryData' => $countryData,
                'codeData' => $codeData
            ], function ($messaje) use ($from, $from2) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('GotoPeru')
                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


//            Mail::send(['html' => 'notifications.page.admin-form-design'], [
//                'destinations' => $destinations,
//                'other' => $other,
//                'duration' => $duration,
//                'number' => $number,
//                'date' => $date,
//                'name' => $name,
//                'email' => $email,
//                'tel' => $tel
////                'comment' => $comment
//            ], function ($messaje) use ($from2) {
//                $messaje->to($from2, 'Andes Viagens')
//                    ->subject('AndesViagens')
//                    /*->attach('ruta')*/
//                    ->from('diana@andesviagens.com', 'andesviagens.com');
//            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }


    public function contact_s()
    {
        $from = 'info@gotoperu.com';
        $from2 = 'doriam@gotoperu.com';

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $phone = $_POST['txt_phone'];
        $city = $_POST['txt_city'];
        $about = $_POST['txt_about'];
        $comment = $_POST['txt_comment'];


        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'city' => $city,
                'about' => $about,
                'comment' => $comment
            ], function ($messaje) use ($from, $from2) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('GotoPeru')
                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


//            Mail::send(['html' => 'notifications.page.admin-form-design'], [
//                'destinations' => $destinations,
//                'other' => $other,
//                'duration' => $duration,
//                'number' => $number,
//                'date' => $date,
//                'name' => $name,
//                'email' => $email,
//                'tel' => $tel
////                'comment' => $comment
//            ], function ($messaje) use ($from2) {
//                $messaje->to($from2, 'Andes Viagens')
//                    ->subject('AndesViagens')
//                    /*->attach('ruta')*/
//                    ->from('diana@andesviagens.com', 'andesviagens.com');
//            });


            return 'Thank you.';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }


    public function pagenotfound()
    {
        SEOMeta::setTitle('404');
        return view('errors.503');
    }
}
