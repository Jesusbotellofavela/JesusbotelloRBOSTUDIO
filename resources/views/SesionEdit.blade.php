@extends('layouts.app')

@section('title', 'Editar Sesiones Fotográficas')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar Sesiones Fotográficas</h1>
    <hr style="background-color: #0056b2; height: 2px; border: none; margin: 20px 0;">
    <form class="row g-3 needs-validation" method="POST" action="{{ route('sesion.update', $sesions->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="sesion_id" class="form-label">ID de Sesión:</label>
            <input type="text" name="sesion_id" class="form-control" id="sesion_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio:</label>
            <input type="text" name="fecha_inicio" class="form-control" id="fecha_inicio" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="descripcion_sesion" class="form-label">Descripción de la Sesión:</label>
            <input type="text" name="descripcion_sesion" class="form-control" id="descripcion_sesion" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="fecha_fin" class="form-label">Fecha de Finalización:</label>
            <input type="text" name="fecha_fin" class="form-control" id="fecha_fin" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
