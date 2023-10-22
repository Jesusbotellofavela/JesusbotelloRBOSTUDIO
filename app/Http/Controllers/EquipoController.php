<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Equipo=Equipo::all();
        return view('EquipoIndex', compact('Equipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('equipocreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Equipo = new Equipo();
        $Equipo -> id = $request -> input('equipo_id');
        $Equipo -> nombre = $request -> input('nombre');
        $Equipo -> cantidad_disponible = $request -> input('cantidad_disponible');
        $Equipo -> descripcion = $request -> input('descripcion');
        $Equipo -> precio = $request -> input('precio');
        $Equipo -> save();
        return redirect('/equipo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
