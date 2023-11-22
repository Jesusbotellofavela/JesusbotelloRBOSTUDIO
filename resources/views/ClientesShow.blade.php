@extends('layouts.app')

@section('title', 'Detalles del cliente')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$cliente->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Nombre del cliente:</strong> {{$cliente->nombre_cliente}}</p>
            <p class="card-text"><strong>Apellido paterno del cliente:</strong> {{$cliente->apellido_paterno_cliente}}</p>
            <p class="card-text"><strong>Apellido materno del cliente:</strong> {{$cliente->apellido_materno_cliente}}</p>
            <p class="card-text"><strong>Email:</strong> {{$cliente->email}}</p>
            <p class="card-text"><strong>Teléfono de Contacto:</strong> {{$cliente->telefono}}</p>
            <p class="card-text"><strong>Direccion de vivienda del cliente:</strong> {{$cliente->direccion}}</p>
            <p class="card-text"><strong>ID del equipo a utilizar:</strong> {{$cliente->equipo_id}}</p>
            <p class="card-text"><strong>ID asignado a la sesion:</strong> {{$cliente->sesion_id}}</p>
            <p class="card-text"><strong>ID de la transaccion financiera:</strong> {{$cliente->transaccion_id}}</p>
            <p class="card-text"><strong>ID del contrato:</strong> {{$cliente->contrato_id}}</p>
            <p class="card-text"><strong>ID de usuario de registro:</strong> {{$cliente->users_id}}</p>
            <p class="card-text"><strong>Referencia de la dirección:</strong> {{$cliente->referencia_ubicacion}}</p>
        </div>


        <div class="card-footer">
        <div class="btn-group">
        <a href="/cliente/{{ $cliente->id }}/edit" class="btn btn-primary">Editar</a>
        <form method="POST" action="{{ route('cliente.destroy', $cliente->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que quieres eliminar este cliente?')">Eliminar</button>
        </form>
    </div>
</div>




            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
        </div>
    </div>
</div>
@endsection
