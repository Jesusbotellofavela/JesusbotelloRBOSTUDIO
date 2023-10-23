@extends('layouts.app')

@section('title', 'Editar Contrato')

@section('content')
<div class="container mt-5">
    <h1 class="display-4">Editar Contrato</h1>
    <hr class="my-4">
    <form class="row g-3 needs-validation" method="POST" action="{{ route('contrato.update', $contrato->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Agrega este campo para indicar que es una solicitud PUT --}}
        <div class="col-md-6">
            <label for="contrato_id" class="form-label">ID del Contrato</label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required value="{{ $contrato->contrato_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="fecha_inicio_contrato" class="form-label">Fecha de Inicio del Contrato</label>
            <input type="text" name="fecha_inicio_contrato" class="form-control" id="fecha_inicio_contrato" required value="{{ $contrato->fecha_inicio_contrato }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="fecha_fin_contrato" class="form-label">Fecha de Finalización del Contrato</label>
            <input type="text" name="fecha_fin_contrato" class="form-control" id="fecha_fin_contrato" required value="{{ $contrato->fecha_fin_contrato }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" name="precio" class="form-control" id="precio" required value="{{ $contrato->precio }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar Cambios</button>
        </div>
    </form>
</div>
@endsection
