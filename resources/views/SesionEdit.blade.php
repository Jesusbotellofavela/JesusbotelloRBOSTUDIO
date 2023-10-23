@extends('layouts.app')

@section('title', 'Sesion Create')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar sesiones fotograficas</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="{{ route('sesion.update', $sesions->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="sesion_id" class="form-label">Sesion_Id:</label>
            <input type="text" name="sesion_id" class="form-control" id="sesion_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_inicio" class="form-label">fecha_inicio:</label>
            <input type="text" name="fecha_inicio" class="form-control" id="fecha_inicio" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="descripcion_sesion" class="form-label">descripcion_sesion:</label>
            <input type="text" name="descripcion_sesion" class="form-control" id="descripcion_sesion" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_fin" class="form-label">fecha_fin:</label>
            <input type="text" name="fecha_fin" class="form-control" id="fecha_fin" required>
            <div class="valid-feedback">
                Looks good!
            </div>




        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
