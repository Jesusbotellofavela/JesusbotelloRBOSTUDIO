@extends('layouts.app')

@section('title', 'Sesion Index')

@section('content')
<div class="container">
    <h2>Listado de Sesiones Fotograficas</h2>
        @foreach ($sesions as $sesions)
            <div class="card">
                <h5 class="card-header">{{$sesions->sesion_id}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$sesions->fecha_inicio}}</p>
                    <p class="card-text">{{$sesions->descripcion_sesion}}</p>
                    <p class="card-text">{{$sesions->fecha_fin}}</p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
