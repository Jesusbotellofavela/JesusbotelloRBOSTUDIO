@extends('layouts.app')

@section('title', 'Transaccion Index')

@section('content')
<div class="container">
    <h2>Listado de Transaccion</h2>
        @foreach ($transaccion as $transaccion)
            <div class="card">
                <h5 class="card-header">{{$transaccion->transaccion_id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$transaccion->tipo_transaccion}}</h5>
                    <p class="card-text">{{$transaccion->monto}}</p>
                    <p class="card-text">{{$transaccion->fecha_transaccion}}</p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
