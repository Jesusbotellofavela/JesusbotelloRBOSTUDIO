<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaccion = Transacciones::all();
        return view('TransaccionIndex', compact('transaccion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaccioncreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new Transacciones();
        $transaccion->transaccion_id = $request->input('transaccion_id');
        $transaccion->tipo_transaccion = $request->input('tipo_transaccion');
        $transaccion->monto = $request->input('monto');
        $transaccion->fecha_transaccion = $request->input('fecha_transaccion');
        $transaccion->save();
        return redirect('/transaccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transacciones $transaccion)
    {
        return view('TransaccionShow', compact('transaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaccion = Transacciones::find($id);
        return view('TransaccionEdit', compact('transaccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo_transaccion' => 'required',
            'monto' => 'required',
            'fecha_transaccion' => 'required',
        ]);

        $transaccion = Transacciones::find($id);

        if (!$transaccion) {
            return redirect('/transaccion')->with('error', 'Transacción no encontrada');
        }

        $transaccion->tipo_transaccion = $request->input('tipo_transaccion');
        $transaccion->monto = $request->input('monto');
        $transaccion->fecha_transaccion = $request->input('fecha_transaccion');
        $transaccion->save();

        return redirect('/transaccion')->with('success', 'Transacción actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaccion = Transacciones::find($id);

        if (!$transaccion) {
            return redirect('/transaccion')->with('error', 'La transacción no se encuentra disponible o ya ha sido eliminada');
        }

        $transaccion->delete();

        return redirect('/transaccion')->with('success', 'La transacción se ha eliminado exitosamente');
    }

}
