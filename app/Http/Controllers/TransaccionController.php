<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaccion=Transacciones::all();
        return view('TransaccionIndex', compact('transaccion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('transaccioncreate');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $transaccion = new Transacciones();
        $transaccion -> id = $request -> input('transaccion_id');
        $transaccion -> tipo_transaccion = $request -> input('tipo_transaccion');
        $transaccion -> monto = $request -> input('monto');
        $transaccion -> fecha_transaccion= $request -> input('fecha_transaccion');
        $transaccion -> save();
        return redirect('/transaccion');

    }

    /**
     * Display the specified resource.
     */
    public function show(Transacciones $transaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transacciones $transaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transacciones $transaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transacciones $transaccion)
    {
        //
    }
}
