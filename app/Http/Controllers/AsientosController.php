<?php

namespace App\Http\Controllers;

use App\Asientos;
use Illuminate\Http\Request;

class AsientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['asientos'] = Asientos::paginate(5);
        return view('asientos.index' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAsiento = request()->all();

        $datosAsiento = request()->except('_token');
        Asientos::insert($datosAsiento);
        return response()->json($datosAsiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asientos  $asientos
     * @return \Illuminate\Http\Response
     */
    public function show(Asientos $asientos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asientos  $asientos
     * @return \Illuminate\Http\Response
     */
    public function edit(Asientos $asientos)
    {
        return view('asientos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asientos  $asientos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asientos $asientos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asientos  $asientos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asientos $id)
    {
        Asientos::destroy($id);
        return redirect('asientos');
    }
}
