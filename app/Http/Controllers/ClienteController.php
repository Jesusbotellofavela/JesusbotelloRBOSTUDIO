<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class ClienteController extends Controller
{
    public function pdf() {
        $cliente = Cliente::all();
        $pdf = PDF::loadView('pdf.listado', compact('cliente'));
        return $pdf->download('listado.pdf');

    }



    public function index()
    {
        $cliente = Cliente::all();
        return view('ClientesIndex', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->id = $request->input('cliente_id');
        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_paterno_cliente = $request->input('apellido_paterno_cliente');
        $cliente->apellido_materno_cliente = $request->input('apellido_materno_cliente');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->equipo_id = $request->input('equipo_id');
        $cliente->sesion_id = $request->input('sesion_id');
        $cliente->transaccion_id = $request->input('transaccion_id');
        $cliente->contrato_id = $request->input('contrato_id');
        $cliente->users_id = $request->input('users_id');
        $cliente->save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('ClientesShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('ClientesEdit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_cliente' => 'required',
            'apellido_paterno_cliente' => 'required',
            'apellido_materno_cliente' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'equipo_id' => 'required',
            'sesion_id' => 'required',
            'transaccion_id' => 'required',
            'contrato_id' => 'required',
            'users_id' => 'required',
        ]);

        $cliente = Cliente::find($id);

        if (!$cliente) {
            return redirect('/cliente')->with('error', 'Cliente not found');
        }

        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_paterno_cliente = $request->input('apellido_paterno_cliente');
        $cliente->apellido_materno_cliente = $request->input('apellido_materno_cliente');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->equipo_id = $request->input('equipo_id');
        $cliente->sesion_id = $request->input('sesion_id');
        $cliente->transaccion_id = $request->input('transaccion_id');
        $cliente->contrato_id = $request->input('contrato_id');
        $cliente->users_id = $request->input('users_id');
        $cliente->save();

        return redirect('/cliente')->with('success', 'Cliente updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return redirect('/cliente')->with('error', 'El cliente ya no se encuentra disponible o ya ha sido eliminado');
        }

        $cliente->delete();

        return redirect('/cliente')->with('success', 'El cliente se ha eliminado exitosamente');
    }
}
