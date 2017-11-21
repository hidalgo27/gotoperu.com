<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.home');
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
        return view('page.packages');
    }

    public function itinerary()
    {
        return view('page.itinerary');
    }

    public function destinations()
    {
        return view('page.destinations');
    }

    public function destinations_country($title)
    {
        return view('page.destinations-country');
    }

    public function destinations_country_show($title, $city)
    {
        return view('page.destinations-country-show');
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
}
