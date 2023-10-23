@extends('layouts.app')

@section('title', 'Listado de Transacciones')

@section('content')
<div class="container">
    <h2 class="mt-4">Listado de Transacciones</h2>
    <div class="row">
        @foreach ($transaccion as $transaccion)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">ID de Transacción: {{$transaccion->transaccion_id}}</h5>
                        <p class="card-text"><strong>Tipo de Transacción:</strong> {{$transaccion->tipo_transaccion}}</p>
                        <p class="card-text"><strong>Monto:</strong> {{$transaccion->monto}}</p>
                        <p class="card-text"><strong>Fecha de Transacción:</strong> {{$transaccion->fecha_transaccion}}</p>
                        <div class="text-center">
                            <a href="/transaccion/{{$transaccion->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                            <a href="/transaccion/{{$transaccion->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                            <a href="/delete/{{$transaccion->id}}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

