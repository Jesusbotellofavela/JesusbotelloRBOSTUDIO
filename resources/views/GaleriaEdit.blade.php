@extends('layouts.app')

@section('title', 'Editar imagenes de la galeria')
@section('content')
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
<div class="container mt-5">
    <h1 class="display-4">Editar imagen</h1>
    <hr class="my-4">
    @include('GaleriaForm')


    <div class="col-md-6">
    {{ Form::label('cliente_id', 'Cliente ID:', ['class' => 'form-label']) }}
    {{ Form::select('cliente_id', $cliente->pluck('nombre_cliente', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un cliente']) }}
            <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>
</div>
@endsection
