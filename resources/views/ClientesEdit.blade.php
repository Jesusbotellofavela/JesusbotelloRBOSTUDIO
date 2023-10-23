@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar Cliente</h1>
    <hr class="my-4">
    <form class="row g-3 needs-validation" method="POST" action="{{ route('cliente.update', $cliente->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Agrega este campo para indicar que es una solicitud PUT --}}

        <!-- Cliente ID -->
        <div class="col-md-6">
            <label for="cliente_id" class="form-label"><strong>ID del cliente:</strong></label>
            <input type="text" name="cliente_id" class="form-control" id="cliente_id" required value="{{ $cliente->cliente_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Nombre del Cliente -->
        <div class="col-md-6">
            <label for="nombre_cliente" class="form-label"><strong>Nombre del Cliente:</strong></label>
            <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" required value="{{ $cliente->nombre_cliente }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Apellido Paterno del Cliente -->
        <div class="col-md-6">
            <label for="apellido_paterno_cliente" class="form-label"><strong>Apellido Paterno del cliente:</strong></label>
            <input type="text" name="apellido_paterno_cliente" class="form-control" id="apellido_paterno_cliente" required value="{{ $cliente->apellido_paterno_cliente }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Apellido Materno del Cliente -->
        <div class="col-md-6">
            <label for="apellido_materno_cliente" class="form-label"><strong>Apellido Materno del cliente:</strong></label>
            <input type="text" name="apellido_materno_cliente" class="form-control" id="apellido_materno_cliente" required value="{{ $cliente->apellido_materno_cliente }}">
            <div class "valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <label for="email" class="form-label"><strong>Email:</strong></label>
            <input type="email" name="email" class="form-control" id="email" required value="{{ $cliente->email }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Teléfono -->
        <div class="col-md-6">
            <label for="telefono" class="form-label"><strong>Teléfono de contacto:</strong></label>
            <input type="text" name="telefono" class="form-control" id="telefono" required value="{{ $cliente->telefono }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Dirección -->
        <div class="col-md-6">
            <label for="direccion" class="form-label"><strong>Dirección de vivienda del cliente:</strong></label>
            <input type="text" name "direccion" class="form-control" id="direccion" required value="{{ $cliente->direccion }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>




        <!-- Equipo ID -->
        <div class="col-md-6">
            <label for="equipo_id" class="form-label"><strong>Equipo ID:</strong></label>
            <input type="text" name="equipo_id" class="form-control" id="equipo_id" required value="{{ $cliente->equipo_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Sesión ID -->
        <div class="col-md-6">
            <label for="sesion_id" class="form-label"><strong>Sesión ID:</strong></label>
            <input type="text" name="sesion_id" class="form-control" id="sesion_id" required value="{{ $cliente->sesion_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Transacción ID -->
        <div class="col-md-6">
            <label for="transaccion_id" class="form-label"><strong>Transacción ID:</strong></label>
            <input type="text" name="transaccion_id" class="form-control" id="transaccion_id" required value="{{ $cliente->transaccion_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Contrato ID -->
        <div class="col-md-6">
            <label for="contrato_id" class="form-label"><strong>Contrato ID:</strong></label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required value="{{ $cliente->contrato_id }}">
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <!-- Users ID -->
        <div class="col-md-6">
            <label for="users_id" class="form-label"><strong>Users ID:</strong></label>
            <input type="text" name="users_id" class="form-control" id="users_id" required value="{{ $cliente->users_id }}">
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
