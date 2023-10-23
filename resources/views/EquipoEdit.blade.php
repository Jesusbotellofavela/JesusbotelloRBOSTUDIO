@extends('layouts.app')

@section('title', 'Equipo Create')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar equipo fotografico</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="{{ route('equipo.update', $equipo->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="equipo_id" class="form-label">Id del equipo:</label>
            <input type="text" name="equipo_id" class="form-control" id="equipo_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="nombre" class="form-label">nombre del equipo:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="cantidad_disponible" class="form-label">Cantidad disponible:</label>
            <input type="text" name="cantidad_disponible" class="form-control" id="cantidad_disponible" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="precio" class="form-label">Costo del equipo:</label>
            <input type="text" name="precio" class="form-control" id="precio" required>
            <div class="valid-feedback">
                Looks good!
            </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
