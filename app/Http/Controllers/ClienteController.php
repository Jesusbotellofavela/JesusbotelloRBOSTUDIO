<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Cliente=Cliente::all();
        return view('ClientesIndex', compact('Cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Cliente = new Cliente();
        $Cliente -> id = $request -> input('cliente_id');
        $Cliente -> nombre_cliente = $request -> input('nombre_cliente');
        $Cliente -> apellido_paterno_cliente = $request -> input('apellido_paterno_cliente');
        $Cliente -> apellido_materno_cliente = $request -> input('apellido_materno_cliente');
        $Cliente -> email = $request -> input('email');
        $Cliente -> telefono = $request -> input('telefono');
        $Cliente -> direccion = $request -> input('direccion');
        $Cliente -> equipo_id = $request -> input('equipo_id');
        $Cliente -> sesion_id = $request -> input('sesion_id');
        $Cliente -> transaccion_id = $request -> input('transaccion_id');
        $Cliente -> contrato_id = $request -> input('contrato_id');
        $Cliente -> users_id = $request -> input('users_id');
        $Cliente -> save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
