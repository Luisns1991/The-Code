<?php

namespace App\Http\Controllers;

use App\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rutas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rutas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosRutas = request()->all();

        $datosRutas = request()->except('_token');
        
        return response()->json($datosRutas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function show(Rutas $rutas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function edit(Rutas $rutas)
    {
        return view('rutas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rutas $rutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rutas $rutas)
    {
        //
    }
}
