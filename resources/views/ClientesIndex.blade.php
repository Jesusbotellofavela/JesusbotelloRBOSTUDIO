@extends('layouts.app')

@section('title', 'Clientes Index')

@section('content')
<div class="container">
    <h2>Listado de Clientes</h2>
        @foreach ($Cliente as $Cliente)
            <div class="card">
                <h5 class="card-header">{{$Cliente->cliente_id}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$Cliente->nombre_cliente}}</p>
                    <p class="card-text">{{$Cliente->apellido_paterno_cliente}}</p>
                    <p class="card-text">{{$Cliente->apellido_materno_cliente}}</p>
                    <h5 class="card-title">{{$Cliente->email}}</h5>
                    <p class="card-text">{{$Cliente->telefono}}</p>
                    <p class="card-text">{{$Cliente->direccion}}</p>
                    <p class="card-text">{{$Cliente->descripcion}}</p>
                    <p class="card-title">{{$Cliente->equipo_id}}</p>
                    <p class="card-text">{{$Cliente->sesion_id}}</p>
                    <p class="card-text">{{$Cliente->transaccion_id}}</p>
                    <p class="card-text">{{$Cliente->contrato_id}}</p>
                    <p class="card-title">{{$Cliente->users_id}}</p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
