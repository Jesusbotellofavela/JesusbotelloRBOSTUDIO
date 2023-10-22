@extends('layouts.app')

@section('title', 'Equipo Index')

@section('content')
<div class="container">
    <h2>Listado de Equipo Fotografico</h2>
        @foreach ($Equipo as $Equipo)
            <div class="card">
                <h5 class="card-header">{{$Equipo->equipo_id}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$Equipo->nombre}}</p>
                    <p class="card-text">{{$Equipo->cantidad_disponible}}</p>
                    <p class="card-text">{{$Equipo->descripcion}}</p>
                    <h5 class="card-title">{{$Equipo->precio}}</h5>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
