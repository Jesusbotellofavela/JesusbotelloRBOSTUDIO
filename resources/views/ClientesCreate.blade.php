@extends('layouts.app')

@section('title', 'Agregar Cliente')
@section('content')
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
<div class="container mt-5">
    <h1 class="display-4">Agregar Cliente</h1>
    <hr class="my-4">
    @include('ClientesForm')
    <div class="col-md-6">
    {{ Form::label('equipo_id', 'Equipo ID:', ['class' => 'form-label']) }}
    {{ Form::select('equipo_id', $equipo->pluck('nombre', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un equipo']) }}
            <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
{{ Form::label('sesion_id', 'Sesión ID:', ['class' => 'form-label']) }}
{{ Form::select('sesion_id', $sesion->pluck('fecha_inicio', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige una sesion']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('transaccion_id', 'Transacción ID:', ['class' => 'form-label']) }}
    {{ Form::select('transaccion_id', $transaccion->pluck('tipo_transaccion', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige una transaccion']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('contrato_id', 'Contrato ID:', ['class' => 'form-label']) }}
    {{ Form::select('contrato_id', $contrato->pluck('fecha_inicio_contrato', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un contrato']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('users_id', 'Users ID:', ['class' => 'form-label']) }}
    {{ Form::select('users_id', $users->pluck('name', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un usuario']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>


</div>
</div>
@endsection
