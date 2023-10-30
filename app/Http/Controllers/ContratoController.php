<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;


class ContratoController extends Controller
{

    public function pdf() {
        $contrato = Contrato::all();
        $pdf = PDF::loadView('pdf.listadoContrato', compact('contrato'));
        return $pdf->download('listadoContrato.pdf');

    }




    public function index()
    {
        //
        $contrato = Contrato::all();
        return view('ContratoIndex', compact('contrato'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contratocreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $contrato = new Contrato();
        $contrato -> id = $request -> input('contrato_id');
        $contrato -> fecha_inicio_contrato = $request -> input('fecha_inicio_contrato');
        $contrato -> fecha_fin_contrato = $request -> input('fecha_fin_contrato');
        $contrato -> precio = $request -> input('precio');
        $contrato -> save();
        return redirect('/contrato');
        //return("guardado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrato $contrato)
    {
        //
        return view('ContratoShow', compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $contrato = Contrato::find($id);
        return view('ContratoEdit', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validación de datos
    $request->validate([
        'fecha_inicio_contrato' => 'required',
        'fecha_fin_contrato' => 'required',
        'precio' => 'required',
    ]);

    // Obtener el contrato a actualizar
    $contrato = Contrato::find($id);

    if (!$contrato) {
        // Manejar el caso en que el contrato no se encuentra
        return redirect('/contrato')->with('error', 'Contrato not found');
    }

    // Actualizar los datos del contrato
    $contrato->fecha_inicio_contrato = $request->input('fecha_inicio_contrato');
    $contrato->fecha_fin_contrato = $request->input('fecha_fin_contrato');
    $contrato->precio = $request->input('precio');
    $contrato->save();

    return redirect('/contrato')->with('success', 'Contrato updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contrato = Contrato::find($id);

        if (!$contrato) {
            return redirect('/contrato')->with('error', 'El contrato ya no se encuentra disponible o ya ha sido eliminado');
        }

        $contrato->delete();

        return redirect('/contrato')->with('success', 'El contrato se ha eliminado exitosamente');
    }
}
