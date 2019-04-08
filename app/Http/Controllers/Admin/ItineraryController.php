<?php

namespace App\Http\Controllers\Admin;

use App\TItinerario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itinerary = TItinerario::all()->sortBy('id');
        return view('admin.itinerary', compact('itinerary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.itinerary-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo = $_POST["txt_codigo"];
        $title = $_POST["txt_title"];
        $short = $_POST["txta_short"];
        $extended = $_POST["txta_extended"];

        if ($request->filled(['txt_codigo', 'txt_title'])){

            $itinerary = new TItinerario();
            $itinerary->codigo = $codigo;
            $itinerary->titulo = $title;
            $itinerary->resumen = $short;
            $itinerary->descripcion = $extended;
            $itinerary->save();

            return redirect(route('admin_itinerary_index_path'))->with('status', 'Itinerary created successfully');

        }else{
            return "false";
        }
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
        $itinerary = TItinerario::where('id', $id)->get();
        return view('admin.itinerary-edit', ['itinerary'=>$itinerary]);
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
        $codigo = $_POST["txt_codigo"];
        $title = $_POST["txt_title"];
        $short = $_POST["txta_short"];
        $extended = $_POST["txta_extended"];

        if ($request->filled(['txt_codigo', 'txt_title'])){

            $itinerary = TItinerario::FindOrFail($id);
            $itinerary->codigo = $codigo;
            $itinerary->titulo = $title;
            $itinerary->resumen = $short;
            $itinerary->descripcion = $extended;
            $itinerary->save();

            return redirect(route('admin_itinerary_edit_path', $id))->with('status', 'Successfully updated itinerary');

        }else{
            return "false";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itinerary=TItinerario::find($id);
        $itinerary->delete();
        return redirect(route('admin_itinerary_index_path'))->with('delete', 'Itinerary successfully removed');
    }
}
