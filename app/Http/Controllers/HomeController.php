<?php

namespace App\Http\Controllers;

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

        return view('admin.package-show', compact('paquete'));
    }
}
