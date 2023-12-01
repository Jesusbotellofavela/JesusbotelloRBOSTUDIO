<?php

namespace App\Http\Controllers;

use App\Models\Sesiones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;


//METODOS CREADOS PROPIAMENTE

class SesionController extends Controller
{
    public function pdf()
    {
        $sesion = Sesiones::all();
        $pdf = PDF::loadView('pdf.listadoSesion', compact('sesion'));
        return $pdf->download('listadoSesion.pdf');

    }


    public function events(Request $request)
    {
        $sesiones = Sesiones::all();

        $events = [];
        foreach ($sesiones as $sesion) {
            $events[] = [
                'title' => $sesion->descripcion_sesion,
                'start' => $sesion->fecha_inicio,
                'end' => $sesion->hora_sesion,
                // Puedes agregar más campos si los necesitas
            ];
        }

        return response()->json($events);
    }




//METODOS AGREGADOS AUTOMATICAMENTE POR LARAVEL


    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $sesion = Sesiones::search($query)->get();
            return view('SesionSearch', compact('sesion')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los registros de sesiones
            $sesion = Sesiones::all();
        }

        return view('SesionIndex', compact('sesion'));
    }


    public function create(Request $request)
    {
        //
        $date = $request->query('date');
        return view('SesionCreate', compact('date'));
    }



    public function store(Request $request)
    {
            // Define las reglas de validación
    $rules = [
        'fecha_inicio' => 'required|date',
        'descripcion_sesion' => 'max:500',
        'fecha_fin' => 'required|date|after:fecha_inicio',
    ];

    // Define mensajes personalizados para los errores
    $messages = [
        'fecha_inicio.required' => 'El campo Fecha de Inicio es obligatorio.',
        'fecha_inicio.date' => 'El campo Fecha de Inicio debe ser una fecha válida.',
        'descripcion_sesion.max' => 'La Descripción de la Sesión no debe exceder los 500 caracteres.',
        'fecha_fin.required' => 'El campo Fecha de Fin es obligatorio.',
        'fecha_fin.date' => 'El campo Fecha de Fin debe ser una fecha válida.',
        'fecha_fin.after' => 'La Fecha de Fin debe ser posterior a la Fecha de Inicio.',
    ];

    // Realiza la validación
    $request->validate($rules, $messages);


        $sesion = new Sesiones();
        $sesion->fecha_inicio = $request->input('fecha_inicio');
        $sesion->descripcion_sesion = $request->input('descripcion_sesion');
        $sesion->fecha_fin = $request->input('fecha_fin');
        $sesion->direccion_sesion = $request->input('direccion_sesion');
        $sesion->hora_sesion= $request->input('hora_sesion');
        $sesion->save();
        return redirect('/sesion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesiones $sesion)
    {
        return view('SesionShow', compact('sesion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sesion = Sesiones::find($id);
        return view('SesionEdit', compact('sesion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_inicio' => 'required',
            'descripcion_sesion' => 'required',
            'fecha_fin' => 'required',
            'direccion_sesion' => 'required',
            'hora_sesion' => 'required',
        ]);

        $sesion = Sesiones::find($id);

        if (!$sesion) {
            return redirect('/sesion')->with('error', 'Sesión not found');
        }

        $sesion->fecha_inicio = $request->input('fecha_inicio');
        $sesion->descripcion_sesion = $request->input('descripcion_sesion');
        $sesion->fecha_fin = $request->input('fecha_fin');
        $sesion->direccion_sesion = $request->input('direccion_sesion');
        $sesion->hora_sesion= $request->input('hora_sesion');
        $sesion->save();

        return redirect('/sesion')->with('success', 'Sesión updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sesion = Sesiones::find($id);

        if (!$sesion) {
            return redirect('/sesion')->with('error', 'La sesión ya no se encuentra disponible o ya ha sido eliminada');
        }

        $sesion->delete();

        return redirect('/sesion')->with('success', 'La sesión se ha eliminado exitosamente');
    }
}
