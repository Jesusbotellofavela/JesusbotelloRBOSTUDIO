<?php

namespace App\Http\Controllers;

use App\Models\Sesiones;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesion = Sesiones::all();
        return view('SesionIndex', compact('sesion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sesioncreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sesion = new Sesiones();
        $sesion->id = $request->input('sesion_id');
        $sesion->fecha_inicio = $request->input('fecha_inicio');
        $sesion->descripcion_sesion = $request->input('descripcion_sesion');
        $sesion->fecha_fin = $request->input('fecha_fin');
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
        ]);

        $sesion = Sesiones::find($id);

        if (!$sesion) {
            return redirect('/sesion')->with('error', 'Sesión not found');
        }

        $sesion->fecha_inicio = $request->input('fecha_inicio');
        $sesion->descripcion_sesion = $request->input('descripcion_sesion');
        $sesion->fecha_fin = $request->input('fecha_fin');
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
