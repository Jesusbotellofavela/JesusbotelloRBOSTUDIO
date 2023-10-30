@extends('layouts.app')

@section('title', 'Detalles del Contrato')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$contrato->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de contrato:</strong> {{$contrato->id}}</p>
            <p class="card-text"><strong>Fecha de inicio del contrato:</strong> {{$contrato->fecha_inicio_contrato}}</p>
            <p class="card-text"><strong>Fecha de finalización del contrato:</strong> {{$contrato->fecha_fin_contrato}}</p>
            <p class="card-text"><strong>Costo del contrato:</strong> ${{$contrato->precio}}</p>
        </div>
        <div class="card-footer">
            <a href="/delete/{{$contrato->id}}" class="btn btn-danger">Eliminar</a>
            <a href="/edit/{{$contrato->id}}/edit" class="btn btn-secondary">Editar</a>
            <a href="{{ route('listadoContrato.pdf') }}" class="btn btn-primary">PDF</a>
        </div>
    </div>
</div>
@endsection
