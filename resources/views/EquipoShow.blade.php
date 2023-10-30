@extends('layouts.app')

@section('title', 'Detalles del equipo fotografico')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$equipo->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID del equipo:</strong> {{$equipo->id}}</p>
            <p class="card-text"><strong>Nombre del equipo:</strong> {{$equipo->nombre}}</p>
            <p class="card-text"><strong>Cantidad disponible:</strong> {{$equipo->cantidad_disponible}}</p>
            <p class="card-text"><strong>Descripcion del equipo:</strong> ${{$equipo->descripcion}}</p>
            <p class="card-text"><strong>Precio del equipo:</strong> ${{$equipo->precio}}</p>
        </div>
        <div class="card-footer">
            <a href="/delete/{{$equipo->id}}" class="btn btn-danger">Eliminar</a>
            <a href="/edit/{{$equipo->id}}/edit" class="btn btn-secondary">Editar</a>
            <a href="{{ route('listadoEquipo.pdf') }}" class="btn btn-primary">PDF</a>
        </div>
    </div>
</div>
@endsection
