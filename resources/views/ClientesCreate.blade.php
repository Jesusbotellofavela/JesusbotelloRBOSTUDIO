@extends('layouts.app')

@section('title', 'Agregar Cliente')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Agregar Cliente</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="/cliente">
        @csrf
        <div class="col-md-6">
            <label for="cliente_id" class="form-label">Cliente ID:</label>
            <input type="text" name="cliente_id" class="form-control" id="cliente_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="nombre_cliente" class="form-label">Nombre del Cliente:</label>
            <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="apellido_paterno_cliente" class="form-label">Apellido Paterno:</label>
            <input type="text" name="apellido_paterno_cliente" class="form-control" id="apellido_paterno_cliente" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="apellido_materno_cliente" class="form-label">Apellido Materno:</label>
            <input type="text" name="apellido_materno_cliente" class="form-control" id="apellido_materno_cliente" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="text" name="email" class="form-control" id="email" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" class="form-control" id="direccion" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="equipo_id" class="form-label">Equipo ID:</label>
            <input type="text" name="equipo_id" class="form-control" id="equipo_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="sesion_id" class="form-label">Sesión ID:</label>
            <input type="text" name="sesion_id" class="form-control" id="sesion_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="transaccion_id" class="form-label">Transacción ID:</label>
            <input type="text" name="transaccion_id" class="form-control" id="transaccion_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="contrato_id" class="form-label">Contrato ID:</label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="users_id" class="form-label">Users ID:</label>
            <input type="text" name="users_id" class="form-control" id="users_id" required>
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
