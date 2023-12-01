<?php

namespace App\Http\Controllers;
use App\Models\Galeria;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout en el modelo Cliente
            $galeria = Galeria::search($query)->get();
            return view('GaleriaSearch', compact('galeria')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los clientes con relaciones
            $galeria = Galeria::with('Cliente')->get();
        }

        return view('GaleriaIndex', compact('galeria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();


        return view('GaleriaCreate', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('imagen')) {
            $imageName = time() . '.' . $request->imagen->extension(); // Cambiar "$request->image" a "$request->imagen_equipo"
            $request->imagen->move(public_path('imagen'), $imageName);
    }


        $galeria = new Galeria();
        $galeria->cliente_id = $request->input('cliente_id');
        $galeria->nombre_imagen = $request->input('nombre_imagen');
        $galeria->tamano = $request->input('tamano');
        $galeria->precio_imagen = $request->input('precio_imagen');
        $galeria->imagen = $imageName;
        $galeria->save();
        return redirect('/galeria');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeria $galeria)
    {

        return view('GaleriaShow', compact('galeria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::all();
        $galeria = Galeria::find($id); // Encuentra la galería que se desea editar

        return view('GaleriaCreate', compact('cliente', 'galeria')); // Pasa la galería a la vista para la edición
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_imagen' => 'required',
            'tamano' => 'required',
            'precio_imagen' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        $galeria = Galeria::find($id);

        if (!$galeria) {
            return redirect('/galeria')->with('error', 'imagen not found');
        }

        $galeria = Galeria::findOrFail($id);
    // Actualizar los campos con los datos del formulario
    $galeria->nombre_imagen = $request->input('nombre_imagen');
    $galeria->tamano = $request->input('tamano');
    $galeria->precio_imagen = $request->input('precio_imagen');
    $galeria->imagen = $request->input('imagen');

    // Manejar la carga y almacenamiento de la imagen
       // Dentro del método update de EquipoController
       if ($request->hasFile('imagen')) {
        // Validar y guardar la imagen
        $request->validate([
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
    // Eliminar la imagen anterior si existe
    if ($galeria->imagen) {
        $imagePath = public_path('imagen/') . $galeria->imagen;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $imageName = time() . '.' . $request->imagen->extension();
    $request->imagen->move(public_path('imagen'), $imageName);

    $galeria->imagen = $imageName; // Guardar el nombre de la nueva imagen en el modelo
}



    $galeria->save();
    return redirect('/galeria')->with('success', 'Galería actualizada correctamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeria = Galeria::find($id);

        if (!$galeria) {
            return redirect('/galeria')->with('error', 'imagen not found');
        }
        $galeria->delete();

        return redirect('/galeria')->with('success', 'La galeria se ha eliminado exitosamente');
    }
}
