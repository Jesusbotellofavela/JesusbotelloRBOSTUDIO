@extends('layouts.app')
@section('title', 'Contratos')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{$contrato->name_product}}</h5>
        <p class="card-text">ID de contrato: {{$contrato->contrato_id}}</p>
        <p class="card-text">Fecha de inicio del contrato: {{$contrato->fecha_inicio_contrato}}</p>
        <p class="card-text">Fecha de finalizacion del contrato: {{$contrato->fecha_fin_contrato}}</p>
        <p class="card-text">Costo del contrato ${{$contrato->precio}}</p>
        <a href="/delete/{{$contrato->id}}" class="btn btn-primary">DELETE</a>
        <a href="/edit/{{$contrato->id}}/edit" class="btn btn-secondary">EDITAR</a>
    </div>
</div>
@endsection
