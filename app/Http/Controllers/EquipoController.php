<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\pdf as PDF;


class EquipoController extends Controller
{

    public function pdf() {
        $equipo = Equipo::all();
        $pdf = PDF::loadView('pdf.listadoEquipo', compact('equipo'));
        return $pdf->download('listadoEquipo.pdf');

    }



    public function index()
    {
        $equipo = Equipo::all();
        return view('EquipoIndex', compact('equipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipocreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->id = $request->input('equipo_id');
        $equipo->nombre = $request->input('nombre');
        $equipo->cantidad_disponible = $request->input('cantidad_disponible');
        $equipo->descripcion = $request->input('descripcion');
        $equipo->precio = $request->input('precio');
        $equipo->save();
        return redirect('/equipo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return view('EquipoShow', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('EquipoEdit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad_disponible' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
        ]);

        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect('/equipo')->with('error', 'Equipo not found');
        }

        $equipo->nombre = $request->input('nombre');
        $equipo->cantidad_disponible = $request->input('cantidad_disponible');
        $equipo->descripcion = $request->input('descripcion');
        $equipo->precio = $request->input('precio');
        $equipo->save();

        return redirect('/equipo')->with('success', 'Equipo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect('/equipo')->with('error', 'El equipo ya no se encuentra disponible o ya ha sido eliminado');
        }

        $equipo->delete();

        return redirect('/equipo')->with('success', 'El equipo se ha eliminado exitosamente');
    }
}
