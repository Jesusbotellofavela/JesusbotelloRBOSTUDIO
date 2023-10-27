@extends('layouts.app')

@section('title', 'Detalles de las transacciones')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$transaccion->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de la transacción:</strong> {{$transaccion->transaccion_id}}</p>
            <p class="card-text"><strong>Tipo de transacción:</strong> {{$transaccion->tipo_transaccion}}</p>
            <p class="card-text"><strong>Monto de la transacción:</strong> ${{$transaccion->monto}}</p>
            <p class="card-text"><strong>Fecha de la transacción:</strong> {{$transaccion->fecha_transaccion}}</p>
        </div>
        <div class="card-footer">
            <a href="/delete/{{$transaccion->id}}" class="btn btn-danger">Eliminar</a>
            <a href="/edit/{{$transaccion->id}}/edit" class="btn btn-secondary">Editar</a>
        </div>
    </div>
</div>
@endsection
