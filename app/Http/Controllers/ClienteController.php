<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contrato;
use App\Models\Equipo;
use App\Models\User;
use App\Models\Sesiones;
use App\Models\Transacciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facades\PDF;

class ClienteController extends Controller
{
    public function pdf() {
        $cliente = Cliente::all();
        $pdf = PDF::loadView('pdf.listado', compact('cliente'));
        return $pdf->download('listado.pdf');

    }



   public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout en el modelo Cliente
            $clientes = Cliente::search($query)->get();
            return view('ClientesSearch', compact('clientes')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los clientes con relaciones
            $clientes = Cliente::with('Contrato', 'Equipo', 'Sesiones', 'Transacciones', 'User')->get();
        }

        return view('ClientesIndex', compact('clientes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contrato = Contrato::all();
        $equipo = Equipo::all();
        $sesion = Sesiones::all();
        $transaccion = Transacciones::all();
        $users = User::all();

        return view('ClientesCreate', compact('contrato','equipo','sesion','transaccion','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre_cliente' => 'required|max:50',
            'apellido_paterno_cliente' => 'max:50',
            'apellido_materno_cliente' => 'max:50',
            'email' => 'required|email',
            'telefono' => 'integer|digits:10',
            'direccion' => 'required',
            'referencia_ubicacion' => 'required',
        ];

        // Define mensajes personalizados para los errores
        $messages = [
            'nombre_cliente.required' => 'El campo Nombre del Cliente es obligatorio.',
            'nombre_cliente.max' => 'El campo Nombre del Cliente no puede tener más de 50 caracteres.',
            'apellido_paterno_cliente.max' => 'El campo Apellido Paterno no puede tener más de 50 caracteres.',
            'apellido_materno_cliente.max' => 'El campo Apellido Materno no puede tener más de 50 caracteres.',
            'email.required' => 'El campo Email es obligatorio.',
            'email.email' => 'El campo Email debe ser un correo electrónico válido.',
            'telefono.max' => 'El campo Teléfono no puede tener más de 10 dígitos.',
            'telefono.numeric' => 'El campo Teléfono debe ser un valor numérico.',
        ];
        // Realiza la validación
        $request->validate($rules, $messages);

            // Define las reglas de validación





        $cliente = new Cliente();

        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_paterno_cliente = $request->input('apellido_paterno_cliente');
        $cliente->apellido_materno_cliente = $request->input('apellido_materno_cliente');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->equipo_id = $request->input('equipo_id');
        $cliente->sesion_id = $request->input('sesion_id');
        $cliente->transaccion_id = $request->input('transaccion_id');
        $cliente->contrato_id = $request->input('contrato_id');
        $cliente->users_id = $request->input('users_id');
        $cliente->referencia_ubicacion = $request->input('referencia_ubicacion');
        $cliente->save();
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('ClientesShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $equipo = Equipo::all(); // Obtener todos los equipos
        $sesion = Sesiones::all();
        $transaccion = Transacciones::all();
        $contrato = Contrato::all();
        $users = User::all();

        return view('ClientesEdit', compact('cliente', 'equipo','sesion','transaccion','contrato','users'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_cliente' => 'required',
            'apellido_paterno_cliente' => 'required',
            'apellido_materno_cliente' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'referencia_ubicacion'=> 'required',
        ]);

        $cliente = Cliente::find($id);

        if (!$cliente) {
            return redirect('/cliente')->with('error', 'Cliente not found');
        }

        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_paterno_cliente = $request->input('apellido_paterno_cliente');
        $cliente->apellido_materno_cliente = $request->input('apellido_materno_cliente');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->equipo_id = $request->input('equipo_id');
        $cliente->sesion_id = $request->input('sesion_id');
        $cliente->transaccion_id = $request->input('transaccion_id');
        $cliente->contrato_id = $request->input('contrato_id');
        $cliente->users_id = $request->input('users_id');
        $cliente->referencia_ubicacion = $request->input('referencia_ubicacion');
        $cliente->save();

        return redirect('/cliente')->with('success', 'Cliente updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return redirect('/cliente')->with('error', 'El cliente ya no se encuentra disponible o ya ha sido eliminado');
        }

        $cliente->delete();

        return redirect('/cliente')->with('success', 'El cliente se ha eliminado exitosamente');
    }
}
