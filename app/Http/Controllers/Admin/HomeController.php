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
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteDificultad;
use App\TPaqueteIncluye;
use App\TPaqueteNoIncluye;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $itinerario = TItinerario::get()->unique('codigo')->take($duration);
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
    public function store(Request $request)
    {

//        $validator = $request->validate([
//            'txt_codigo' => 'required'
//        ]);

//        $validator = Validator::make($request->all(), [
//            'codigo' => 'required|unique:tpaquetes',
//            'codigo_f' => 'required|unique:tpaquetes',
//            'titulo' => 'required|unique:tpaquetes',
//            'duracion' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect(route('admin_package_create_path'))
//                ->withErrors($validator)
//                ->withInput();
//        }
//        $package = new TPaquete();
//        $package->codigo = $request->input('txt_codigo');
//        $package->save();
//        return redirect()->route('admin_package_create_path');
//        $codigo = $_POST["txt_codigo"];
//        $codigo_f = $_POST["txt_codigo_f"];
//        $title_package = $_POST["txt_title_package"];
//        $duration = $_POST["txt_duration"];
//        $descripcion = $_POST["txta_descripcion"];
//
//        $itinerary = $_POST["itinerary"];
//
//        $s2 = $_POST["txt_2_s"];
//        $d2 = $_POST["txt_2_d"];
//        $m2 = $_POST["txt_2_m"];
//        $t2 = $_POST["txt_2_t"];
//
//        $s3 = $_POST["txt_3_s"];
//        $d3 = $_POST["txt_3_d"];
//        $m3 = $_POST["txt_3_m"];
//        $t3 = $_POST["txt_3_t"];
//
//        $s4 = $_POST["txt_4_s"];
//        $d4 = $_POST["txt_4_d"];
//        $m4 = $_POST["txt_4_m"];
//        $t4 = $_POST["txt_4_t"];
//
//        $s5 = $_POST["txt_5_s"];
//        $d5 = $_POST["txt_5_d"];
//        $m5 = $_POST["txt_5_m"];
//        $t5 = $_POST["txt_5_t"];
//
//        $level = $_POST["level"];
//        $category = $_POST["category"];
//        $destino = $_POST["destino"];
//        $include = $_POST["include"];
//        $noinclude = $_POST["noinclude"];
//

            $package = new TPaquete();
            $package->codigo = $request->input('codigo');
            $package->codigo_f = $request->input('codigo_f');
            $package->titulo = $request->input('titulo');
            $package->duracion = $request->input('duracion');
            $package->descripcion = $request->input('descripcion');

            if ($package->save()){
                $package_level = TPaqueteDificultad::where('idpaquetes', $package->id)->get();
                $var = [];
                if ($request->input('level')) {
                    foreach ($package_level as $package_l){
                        if (!in_array($package_l->iddificultad, $request->input('level'))){
                            $temp = TPaqueteDificultad::find($package_l->id);
                            $temp->delete();
                        }
                        $var[] = $package_l->iddificultad;
                    }
                    for($i=0; $i < count($request->input('level')); $i++){
                        if (!in_array($request->input('level')[$i], $var)){
                            $package_level = new TPaqueteDificultad();
                            $package_level->idpaquetes = $package->id;
                            $package_level->iddificultad = $request->input('level')[$i];
                            $package_level->save();
                        }
                    }
                }else{
                    TPaqueteDificultad::where('idpaquetes', $package->id)->delete();
                }

                $package_category = TPaqueteCategoria::where('idpaquetes', $package->id)->get();
                $var_c = [];
                if ($request->input('category')) {
                    foreach ($package_category as $package_c){
                        if (!in_array($package_c->idcategoria, $request->input('category'))){
                            $temp = TPaqueteCategoria::find($package_c->id);
                            $temp->delete();
                        }
                        $var_c[] = $package_c->idcategoria;
                    }
                    for($i=0; $i < count($request->input('category')); $i++){
                        if (!in_array($request->input('category')[$i], $var_c)){
                            $package_category = new TPaqueteCategoria();
                            $package_category->idpaquetes = $package->id;
                            $package_category->idcategoria = $request->input('category')[$i];
                            $package_category->save();
                        }
                    }
                }else{
                    TPaqueteCategoria::where('idpaquetes', $package->id)->delete();
                }

                $package_destinations = TPaqueteDestino::where('idpaquetes', $package->id)->get();
                $var_d = [];
                if ($request->input('destino')) {
                    foreach ($package_destinations as $package_d){
                        if (!in_array($package_d->iddestinos, $request->input('destino'))){
                            $temp = TPaqueteDestino::find($package_d->id);
                            $temp->delete();
                        }
                        $var_d[] = $package_d->iddestinos;
                    }
                    for($i=0; $i < count($request->input('destino')); $i++){
                        if (!in_array($request->input('destino')[$i], $var_d)){
                            $package_destinations = new TPaqueteDestino();
                            $package_destinations->idpaquetes = $package->id;
                            $package_destinations->iddestinos = $request->input('destino')[$i];
                            $package_destinations->save();
                        }
                    }
                }else{
                    TPaqueteDestino::where('idpaquetes', $package->id)->delete();
                }

                $package_included = TPaqueteIncluye::where('idpaquetes', $package->id)->get();
                $var_i = [];
                if ($request->input('include')) {
                    foreach ($package_included as $package_i){
                        if (!in_array($package_i->idincluye, $request->input('include'))){
                            $temp = TPaqueteIncluye::find($package_i->id);
                            $temp->delete();
                        }
                        $var_i[] = $package_i->idincluye;
                    }
                    for($i=0; $i < count($request->input('include')); $i++){
                        if (!in_array($request->input('include')[$i], $var_i)){
                            $package_included = new TPaqueteIncluye();
                            $package_included->idpaquetes = $package->id;
                            $package_included->idincluye = $request->input('include')[$i];
                            $package_included->save();
                        }
                    }
                }else{
                    TPaqueteIncluye::where('idpaquetes', $package->id)->delete();
                }

                $package_no_included = TPaqueteNoIncluye::where('idpaquetes', $package->id)->get();
                $var_i = [];
                if ($request->input('noinclude')) {
                    foreach ($package_no_included as $package_no_i){
                        if (!in_array($package_no_i->idnoincluye, $request->input('noinclude'))){
                            $temp = TPaqueteNoIncluye::find($package_no_i->id);
                            $temp->delete();
                        }
                        $var_i[] = $package_no_i->idnoincluye;
                    }
                    for($i=0; $i < count($request->input('noinclude')); $i++){
                        if (!in_array($request->input('noinclude')[$i], $var_i)){
                            $package_no_included = new TPaqueteNoIncluye();
                            $package_no_included->idpaquetes = $package->id;
                            $package_no_included->idnoincluye = $request->input('noinclude')[$i];
                            $package_no_included->save();
                        }
                    }
                }else{
                    TPaqueteNoIncluye::where('idpaquetes', $package->id)->delete();
                }

            }


//            return redirect('/home')->with('status', 'Package created successfully');

    }

}
