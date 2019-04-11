<?php

namespace App\Http\Controllers;

use App\Viajes;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viajes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viajes.create');
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
     * @param  \App\Viajes  $viajes
     * @return \Illuminate\Http\Response
     */
    public function show(Viajes $viajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Viajes  $viajes
     * @return \Illuminate\Http\Response
     */
    public function edit(Viajes $viajes)
    {
        return view('viajes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viajes  $viajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viajes $viajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Viajes  $viajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viajes $viajes)
    {
        //
    }
}
