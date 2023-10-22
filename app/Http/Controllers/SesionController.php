<?php

namespace App\Http\Controllers;

use App\Models\Sesiones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sesions=Sesiones::all();
        return view('SesionIndex', compact('sesions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sesioncreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sesions = new Sesiones();
        $sesions -> id = $request -> input('sesion_id');
        $sesions -> fecha_inicio = $request -> input('fecha_inicio');
        $sesions -> descripcion_sesion = $request -> input('descripcion_sesion');
        $sesions -> fecha_fin= $request -> input('fecha_fin');
        $sesions -> save();
        return redirect('/sesion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesiones $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesiones $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesiones $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesiones $sesion)
    {
        //
    }
}
