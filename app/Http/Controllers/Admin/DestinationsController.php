<?php

namespace App\Http\Controllers\admin;

use App\TDestino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = TDestino::all()->sortBy('dia');
        return view('admin.destinations', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destination = $_POST["txt_destination"];
        $country = $_POST["txt_country"];
        $short = $_POST["txta_short"];
        $extended = $_POST["txta_extended"];
        $history = $_POST["txta_history"];
        $geography = $_POST["txta_geography"];

        if ($request->filled(['txt_destination', 'txt_country'])){

            $destinations = new TDestino();
            $destinations->nombre = $destination;
            $destinations->pais = $country;
            $destinations->resumen = $short;
            $destinations->descripcion = $extended;
            $destinations->historia = $history;
            $destinations->geografia = $geography;
            $destinations->estado = '1';
            $destinations->save();

            return redirect(route('admin_destinations_index_path'))->with('status', 'Destination created successfully');

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
        $destinations = TDestino::where('id', $id)->get();
        return view('admin.destinations-edit', ['destinations'=>$destinations]);
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
        $destination = $_POST["txt_destination"];
        $country = $_POST["txt_country"];
        $short = $_POST["txta_short"];
        $extended = $_POST["txta_extended"];
        $history = $_POST["txta_history"];
        $geography = $_POST["txta_geography"];

        if ($request->filled(['txt_destination', 'txt_country'])){

            $destinations = TDestino::FindOrFail($id);
            $destinations->nombre = $destination;
            $destinations->pais = $country;
            $destinations->resumen = $short;
            $destinations->descripcion = $extended;
            $destinations->historia = $history;
            $destinations->geografia = $geography;
            $destinations->estado = '1';
            $destinations->save();

            return redirect(route('admin_destinations_edit_path', $id))->with('status', 'Successfully updated destination');

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
        $destinations=TDestino::find($id);
        $destinations->delete();
        return redirect(route('admin_destinations_index_path'))->with('delete', 'Destination successfully removed');
    }
}
