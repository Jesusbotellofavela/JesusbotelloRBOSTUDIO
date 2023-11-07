<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class TransaccionController extends Controller
{
    public function pdf() {
        $transaccion = Transacciones::all();
        $pdf = PDF::loadView('pdf.listadoTransaccion', compact('transaccion'));
        return $pdf->download('listadoTransaccion.pdf');

    }



     public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $transaccion = Transacciones::search($query)->get();
            return view('TransaccionSearch', compact('transaccion')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos las transacciones
            $transaccion = Transacciones::all();
        }

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
        $rules = [
            'tipo_transaccion' => 'required|string',
            'monto' => 'required|numeric|between:0.00001,99999.99',
            'fecha_transaccion' => 'required|date',
        ];

        // Define mensajes personalizados para los errores
        $messages = [
            'tipo_transaccion.required' => 'El campo Tipo de Transacción es obligatorio.',
            'tipo_transaccion.string' => 'El campo Tipo de Transacción debe ser un valor de texto.',
            'monto.required' => 'El campo Monto es obligatorio.',
            'monto.numeric' => 'El campo Monto debe ser un valor numérico.',
            'monto.between' => 'El campo Monto debe estar entre 0.00001 y 99999.99.',
            'fecha_transaccion.required' => 'El campo Fecha de Transacción es obligatorio.',
            'fecha_transaccion.date' => 'El campo Fecha de Transacción debe ser una fecha válida.',
        ];

        // Realiza la validación
        $request->validate($rules, $messages);



        $transaccion = new Transacciones();
        $transaccion->id = $request->input('transaccion_id');
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
