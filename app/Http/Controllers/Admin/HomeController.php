<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TCategoria;
use App\TDestino;
use App\TDificultad;
use App\TIncluye;
use App\TItinerario;
use App\TNoIncluye;
use App\TPaquete;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $paquete = TPaquete::all()->sortBy('duracion');

        return view('admin.home', compact('paquete'));
    }
    /**
     * Show
     */
    public function show(Request $request, $id)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $paquete = TPaquete::where('id', $id)->get();
        $itinerario = TItinerario::get()->unique('dia');
        $itinerario_full = TItinerario::all();
        $level = TDificultad::all();
        $category = TCategoria::all();
        $destinations = TDestino::all();
        $incluye = TIncluye::all();
        $noincluye = TNoIncluye::all();
        return view('admin.package-show', compact('paquete'), ['itinerario'=>$itinerario, 'itinerario_full' => $itinerario_full, 'level'=>$level, 'category'=>$category, 'destinations'=>$destinations, 'incluye'=>$incluye, 'noincluye'=>$noincluye]);
    }

    public function duration(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id_itinerary = $_POST['id_itinerary'];
        $id_itinerary_i = explode('-', $id_itinerary);
        $itinerario = TItinerario::where('id', $id_itinerary_i[0])->get();
        foreach ($itinerario as $item) {
//            return [$item->resumen, $id_itinerary_i[1]];
            return response()
                ->json(['resumen' => $item->resumen, 'id' => $id_itinerary_i[1]]);
        }
    }

    public function load(Request $request, $id, $duration)
    {
        $duration = $duration;
        $request->user()->authorizeRoles(['user', 'admin']);

        $paquete = TPaquete::where('id', $id)->get();
        $itinerario = TItinerario::get()->unique('dia')->take($duration);
        $itinerario_full = TItinerario::all();
//        dd($itinerario);


        return view('layouts.admin.load', compact('paquete'), ['itinerario'=>$itinerario, 'itinerario_full' => $itinerario_full]);
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

//        $paquete = TPaquete::where('id', $id)->get();
        $itinerario = TItinerario::get()->unique('dia');
        $itinerario_full = TItinerario::all();
        $level = TDificultad::all();
        $category = TCategoria::all();
        $destinations = TDestino::all();
        $incluye = TIncluye::all();
        $noincluye = TNoIncluye::all();
        return view('admin.package-create', compact('paquete'), ['itinerario'=>$itinerario, 'itinerario_full' => $itinerario_full, 'level'=>$level, 'category'=>$category, 'destinations'=>$destinations, 'incluye'=>$incluye, 'noincluye'=>$noincluye]);
    }

    public function store()
    {
        $codigo = $_POST["txt_codigo"];
        dd($codigo);
    }

}
