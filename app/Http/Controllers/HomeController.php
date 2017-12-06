<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\TPaquete;
use App\TPaqueteDestino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
//        dd($paquete_destinos);
        return view('page.home',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
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

    public function packages()
    {
        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
    }

    public function packages_durations($duration)
    {
        $paquetes = TPaquete::with('precio_paquetes')->where('duracion', $duration)->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages-durations',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
    }


    public function packages_list()
    {

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();


        return view('page.packages-list', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria]);

//        $paquetes = TPaquete::with('precio_paquetes')->get();
//        $paquetes_r = TPaquete::with('precio_paquetes')->get();
//        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
//        return view('page.packages-list',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
    }

    public function itinerary($titulo)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));

        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 0)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete_iti = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();

        return view('page.itinerary', ['title'=>$title, 'paquete_iti'=>$paquete_iti, 'paquete_destinos'=>$paquete_destinos, 'paquete'=>$paquete]);

    }

    public function destinations()
    {
        return view('page.destinations');
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
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $destinos = TDestino::get();
        $destinos_p = TDestino::where('pais', $pais)->get();

        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($ciudad) { $query->where('nombre', $ciudad);}])->get();

        return view('page.destinations-country-show', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'categoria'=>$categoria, 'destinos'=>$destinos, 'destinos_p'=>$destinos_p, 'pais'=>$pais, 'paquetes_de'=>$paquetes_de]);
    }

    public function about()
    {
        return view('page.about');
    }

    public function getting()
    {
        return view('page.getting');
    }

    public function testimonials()
    {
        return view('page.testimonials');
    }

    public function faq()
    {
        return view('page.faq');
    }

    public function agents()
    {
        return view('page.agents');
    }

    public function deals()
    {
        $paquetes = TPaquete::with('precio_paquetes')->get();
        $paquetes_r = TPaquete::with('precio_paquetes')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.travel-deals',['paquetes'=>$paquetes, 'paquete_destinos'=>$paquete_destinos, 'paquetes_r'=>$paquetes_r]);
//        return view('page.travel-deals');
    }

    public function inquire()
    {
        $from = 'hidalgochpnce@gmail.com';
        $from2 = 'paul@gotoperu.com';

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
                    ->from('hidalgochpnce@gmail.com', 'GotoPeru');
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
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('GOTOPERU')
                    /*->attach('ruta')*/
                    ->from('hidalgochpnce@gmail.com', 'GotoPeru');
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

}
