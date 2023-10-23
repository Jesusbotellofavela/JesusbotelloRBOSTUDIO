@extends('layouts.app')

@section('title', 'Clientes Index')

@section('content')
<div class="container">
    <h2>Listado de Clientes</h2>
    @foreach ($cliente as $cliente)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">ID del cliente: {{$cliente->cliente_id}}</h5>
                <p class="card-text"><strong>Nombre:</strong> {{$cliente->nombre_cliente}} {{$cliente->apellido_paterno_cliente}} {{$cliente->apellido_materno_cliente}}</p>
                <p class="card-text"><strong>Email:</strong> {{$cliente->email}}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{$cliente->telefono}}</p>
                <p class="card-text"><strong>Dirección:</strong> {{$cliente->direccion}}</p>
                <p class="card-text"><strong>Descripción del trabajo:</strong> {{$cliente->descripcion}}</p>
                <p class="card-text"><strong>ID del equipo:</strong> {{$cliente->equipo_id}}</p>
                <p class="card-text"><strong>ID de la sesión:</strong> {{$cliente->sesion_id}}</p>
                <p class="card-text"><strong>ID de la transacción financiera:</strong> {{$cliente->transaccion_id}}</p>
                <p class="card-text"><strong>ID del contrato:</strong> {{$cliente->contrato_id}}</p>
                <p class="card-text"><strong>ID del usuario de registro:</strong> {{$cliente->users_id}}</p>
            </div>
            <div class="card-footer text-center">
                <a href="/cliente/{{$cliente->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                <a href="/cliente/{{$cliente->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                <form method="POST" action="{{ route('cliente.destroy', $cliente->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar este pedido?')">Eliminar cliente</button>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection
