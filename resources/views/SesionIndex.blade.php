@extends('layouts.app')

@section('title', 'Sesion Index')

@section('content')
<div class="container">
    <h2 class="text-center mt-4">Listado de Sesiones Fotográficas</h2>
    <div class="row">
        @foreach ($sesion as $sesion)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">ID de la Sesión: {{ $sesion->sesion_id }}</h5>
                    <p class="card-text">Fecha de la Sesión: {{ $sesion->fecha_inicio }}</p>
                    <p class="card-text">Descripción de la Sesión: {{ $sesion->descripcion_sesion }}</p>
                    <p class="card-text">Fecha de Finalización de la Sesión: {{ $sesion->fecha_fin }}</p>
                    <div class="text-center">
                        <a href="/sesion/{{ $sesion->id }}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/sesion/{{ $sesion->id }}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('sesion.destroy', $sesion->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta sesion?')">Eliminar </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


