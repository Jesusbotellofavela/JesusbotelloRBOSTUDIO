@extends('layouts.app')

@section('title', 'Contrato Index')

@section('content')
<div class="container">
    <h2 class="text-center mt-4">Listado de Contratos</h2>
    <div class="row">
        @foreach ($contrato as $contrato)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
            <img src="{{ asset('public/contrato.jpg') }}" class="card-img-top" alt="Imagen del contrato">
                <div class="card-body">
                    <h5 class="card-title">ID del Contrato: {{$contrato->contrato_id}}</h5>
                    <p class="card-text">Fecha de Inicio: {{$contrato->fecha_inicio_contrato}}</p>
                    <p class="card-text">Fecha de Finalización: {{$contrato->fecha_fin_contrato}}</p>
                    <p class="card-text">Precio: ${{$contrato->precio}}</p>
                    <div class="text-center">
                        <a href="/contrato/{{$contrato->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/contrato/{{$contrato->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                        <a href="/delete/{{$contrato->id}}" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

