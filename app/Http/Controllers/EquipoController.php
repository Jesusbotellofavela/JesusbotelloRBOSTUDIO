<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;


class EquipoController extends Controller
{

    public function pdf() {
        $equipo = Equipo::all();
        $pdf = PDF::loadView('pdf.listadoEquipo', compact('equipo'));
        return $pdf->stream('listadoEquipo.pdf');

    }



    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $equipo = Equipo::search($query)->get();
            return view('EquipoSearch', compact('equipo')); // Redirige a la vista de resultados de búsqueda
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los equipos
            $equipo = Equipo::all();
        }

        return view('EquipoIndex', compact('equipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('EquipoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|max:50',
            'cantidad_disponible' => 'required|integer',
            'descripcion' => 'max:300',
            'precio' => 'numeric|min:0.00001|max:99999.99',
            'imagen_equipo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Define mensajes personalizados para los errores
        $messages = [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.max' => 'El campo Nombre no puede tener más de 50 caracteres.',
            'cantidad_disponible.required' => 'El campo Cantidad Disponible es obligatorio.',
            'cantidad_disponible.integer' => 'El campo Cantidad Disponible debe ser un valor numérico entero.',
            'descripcion.max' => 'El campo Descripción no puede tener más de 300 caracteres.',
            'precio.numeric' => 'El campo Precio debe ser un valor numérico.',
            'precio.min' => 'El campo Precio debe ser igual o mayor a 0.00001.',
            'precio.max' => 'El campo Precio debe ser menor o igual a 99999.99.',
            'imagen_equipo.image' => 'El archivo debe ser una imagen.',
            'imagen_equipo.mimes' => 'La imagen debe ser de tipo jpeg, png, jpg o gif.',
            'imagen_equipo.max' => 'La imagen no debe ser mayor a 2 MB.',
        ];

        // Realiza la validación
        $request->validate($rules, $messages);

         // Manejar la carga y almacenamiento de la imagen
         if ($request->hasFile('imagen_equipo')) {
            $imageName = time() . '.' . $request->imagen_equipo->extension(); // Cambiar "$request->image" a "$request->imagen_equipo"
            $request->imagen_equipo->move(public_path('imagen_equipo'), $imageName);
    }

        $equipo = new Equipo();

        $equipo->nombre = $request->input('nombre');
        $equipo->cantidad_disponible = $request->input('cantidad_disponible');
        $equipo->descripcion = $request->input('descripcion');
        $equipo->precio = $request->input('precio');
        $equipo->imagen_equipo = $imageName; // Ajusta el nombre del campo según la estructura de tu modelo
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
            'imagen_equipo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $equipo = Equipo::find($id);

        if (!$equipo) {
            return redirect('/equipo')->with('error', 'Equipo not found');
        }

        $equipo->nombre = $request->input('nombre');
        $equipo->cantidad_disponible = $request->input('cantidad_disponible');
        $equipo->descripcion = $request->input('descripcion');
        $equipo->precio = $request->input('precio');

        // Manejar la carga y almacenamiento de la imagen
       // Dentro del método update de EquipoController
       if ($request->hasFile('imagen_equipo')) {
        // Validar y guardar la imagen
        $request->validate([
            'imagen_equipo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Eliminar la imagen anterior si existe
        if ($equipo->imagen_equipo) {
            $imagePath = public_path('imagen_equipo/') . $equipo->imagen_equipo;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $imageName = time() . '.' . $request->imagen_equipo->extension();
        $request->imagen_equipo->move(public_path('imagen_equipo'), $imageName);

        $equipo->imagen_equipo = $imageName; // Guardar el nombre de la nueva imagen en el modelo
    }



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
