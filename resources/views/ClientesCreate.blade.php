@extends('layouts.app')

@section('title', 'Equipo Create')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Agregar clientes</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="/Clientes">
        @csrf
        <div class="col-md-6">
            <label for="cliente_id" class="form-label">Cliente_Id:</label>
            <input type="text" name="cliente_id" class="form-control" id="cliente_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="nombre_cliente" class="form-label">nombre_cliente:</label>
            <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="apellido_paterno_cliente" class="form-label">apellido_paterno_cliente:</label>
            <input type="text" name="apellido_paterno_cliente" class="form-control" id="apellido_paterno_cliente" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="apellido_materno_cliente" class="form-label">apellido_materno_cliente:</label>
            <input type="text" name="apellido_materno_cliente" class="form-control" id="apellido_materno_cliente" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="email" class="form-label">email:</label>
            <input type="text" name="email" class="form-control" id="email" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="telefono" class="form-label">telefono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="direccion" class="form-label">direccion:</label>
            <input type="text" name="direccion" class="form-control" id="direccion" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="equipo_id" class="form-label">equipo_id:</label>
            <input type="text" name="equipo_id" class="form-control" id="equipo_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="sesion_id" class="form-label">sesion_id:</label>
            <input type="text" name="sesion_id" class="form-control" id="sesion_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="transaccion_id" class="form-label">transaccion_id:</label>
            <input type="text" name="transaccion_id" class="form-control" id="transaccion_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="contrato_id" class="form-label">contrato_id:</label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="users_id" class="form-label">users_id:</label>
            <input type="text" name="users_id" class="form-control" id="users_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>




        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
