@extends('layouts.app')

@section('title', 'Detalles del Contrato')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$sesion->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de la sesion:</strong> {{$sesion->sesion_id}}</p>
            <p class="card-text"><strong>Fecha de inicio de la sesion:</strong> {{$sesion->fecha_inicio}}</p>
            <p class="card-text"><strong>Descripcion de la sesion:</strong> {{$sesion->descripcion_sesion}}</p>
            <p class="card-text"><strong>Fecha de finalizacion de la sesion:</strong> ${{$sesion->fecha_fin}}</p>
        </div>
        <div class="card-footer">
            <a href="/delete/{{$sesion->id}}" class="btn btn-danger">Eliminar</a>
            <a href="/edit/{{$sesion->id}}/edit" class="btn btn-secondary">Editar</a>
        </div>
    </div>
</div>
@endsection
