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
        $sesions = Sesiones::all();
        return view('SesionIndex', compact('sesions'));
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
        $sesions = new Sesiones();
        $sesions->id = $request->input('sesion_id');
        $sesions->fecha_inicio = $request->input('fecha_inicio');
        $sesions->descripcion_sesion = $request->input('descripcion_sesion');
        $sesions->fecha_fin = $request->input('fecha_fin');
        $sesions->save();
        return redirect('/sesion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesiones $sesions)
    {
        return view('SesionShow', compact('sesions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sesions = Sesiones::find($id);
        return view('SesionEdit', compact('sesions'));
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

        $sesions = Sesiones::find($id);

        if (!$sesions) {
            return redirect('/sesion')->with('error', 'Sesión not found');
        }

        $sesions->fecha_inicio = $request->input('fecha_inicio');
        $sesions->descripcion_sesion = $request->input('descripcion_sesion');
        $sesions->fecha_fin = $request->input('fecha_fin');
        $sesions->save();

        return redirect('/sesion')->with('success', 'Sesión updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sesions = Sesiones::find($id);

        if (!$sesions) {
            return redirect('/sesion')->with('error', 'La sesión ya no se encuentra disponible o ya ha sido eliminada');
        }

        $sesions->delete();

        return redirect('/sesion')->with('success', 'La sesión se ha eliminado exitosamente');
    }
}
