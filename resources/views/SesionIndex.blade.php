@extends('layouts.app')

@section('title', 'Sesion Index')

@section('content')
<div class="container">
    <h2>Listado de Sesiones Fotograficas</h2>
        @foreach ($sesions as $sesions)
            <div class="card">
                <h5 class="card-header">ID de la sesion: {{$sesions->sesion_id}}</h5>
                <div class="card-body">
                    <p class="card-text">Fecha de la sesion: {{$sesions->fecha_inicio}}</p>
                    <p class="card-text">Descripcion de la sesion: {{$sesions->descripcion_sesion}}</p>
                    <p class="card-text">Fecha de finalizacción de la sesion: {{$sesions->fecha_fin}}</p>
                    <div class="text-center">
                        <a href="/sesion/{{$sesions->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/sesion/{{$sesions->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                        <a href="/delete/{{$sesions->id}}" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection
