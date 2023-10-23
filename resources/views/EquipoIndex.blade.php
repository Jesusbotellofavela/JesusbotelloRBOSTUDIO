@extends('layouts.app')

@section('title', 'Listado de Equipos Fotográficos')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Listado de Equipos Fotográficos</h2>
    <div class="row">
        @foreach ($equipo as $equipo)
            <div class="col-md-4 mb-4">
                <div class="card">

                    <div class="card-body">
                        <p class="card-text">ID de equipo: {{$equipo->equipo_id}}</p>
                        <p class="card-text">Nombre del equipo: {{$equipo->nombre}}</p>
                        <p class="card-text">Cantidad disponible: {{$equipo->cantidad_disponible}}</p>
                        <p class="card-text">Descripción del equipo: {{$equipo->descripcion}}</p>
                        <p class="card-text">Precio del equipo: ${{$equipo->precio}}</p>
                        <a href="{{ route('equipo.show', $equipo->id) }}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="{{ route('equipo.edit', $equipo->id) }}" class="btn btn-primary mr-2">Editar</a>
                        <a href="{{ route('equipo.destroy', $equipo->id) }}" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este equipo?')">Eliminar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

