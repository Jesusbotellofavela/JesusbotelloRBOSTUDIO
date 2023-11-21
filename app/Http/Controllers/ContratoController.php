<?php

namespace App\Http\Controllers;


use App\Models\Contrato;
use App\Models\Cliente;
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




    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $contrato = Contrato::search($query)->get();
            return view('ContratoSearch', compact('contrato')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los contratos
            $contrato = Contrato::all();
        }

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
    // Define las reglas de validación
    $rules = [
        'fecha_inicio_contrato' => 'required|date',
        'fecha_fin_contrato' => 'required|date|after:fecha_inicio_contrato',
        'precio' => 'required|numeric|min:0.000001|max:999999.99',
        'direccion_evento' => 'required',
        'descripcion_evento' => 'required',
    ];

    // Define mensajes personalizados para los errores
    $messages = [
        'fecha_inicio_contrato.required' => 'El campo Fecha de Inicio del Contrato es obligatorio.',
        'fecha_fin_contrato.required' => 'El campo Fecha de Finalización del Contrato es obligatorio.',
        'fecha_fin_contrato.after' => 'La Fecha de Finalización debe ser posterior a la Fecha de Inicio.',
        'precio.required' => 'El campo Precio es obligatorio.',
        'precio.numeric' => 'El campo Precio debe ser un valor numérico.',
        'precio.min' => 'El campo Precio debe ser igual o mayor a 0.000001.',
        'precio.max' => 'El campo Precio debe ser menor o igual a 999999.99.',
        'direccion_evento.required' => 'El campo Dirección del Evento es obligatorio.',
        'descripcion_evento.required' => 'El campo Descripción del Evento es obligatorio.',
    ];

    // Realiza la validación
    $request->validate($rules, $messages);

        $contrato = new Contrato();

        $contrato -> fecha_inicio_contrato = $request -> input('fecha_inicio_contrato');
        $contrato -> fecha_fin_contrato = $request -> input('fecha_fin_contrato');
        $contrato -> precio = $request -> input('precio');
        $contrato -> direccion_evento = $request -> input('direccion_evento');
        $contrato -> descripcion_evento = $request -> input('descripcion_evento');
        //$contrato->cliente_id = $request->input('cliente_id');
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
        'direccion_evento' => 'required',
        'descripcion_evento' => 'required',
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
    $contrato -> direccion_evento = $request -> input('direccion_evento');
    $contrato -> descripcion_evento = $request -> input('descripcion_evento');
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
