@extends('layouts.app')

@section('title', 'Contrato Index')

@section('content')
<div class="container">
    <h2>Listado de Contratos</h2>
        @foreach ($contrato as $contrato)
            <div class="card">
                <h5 class="card-header">{{$contrato->contrato_id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$contrato->fecha_inicio_contrato}}</h5>
                    <p class="card-text">{{$contrato->fecha_fin_contrato}}</p>
                    <p class="card-text">{{$contrato->precio}}</p>
                    <a href="/contrato/{{$contrato->id}}" class="btn btn-secondary">MOSTRAR</a>

                    <a href="/contrato/{{$contrato->id}}/edit" class="btn btn-primary">EDITAR</a>

                    <a href="/delete/{{$contrato->id}}" class="btn btn-primary">ELIMINAR</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
