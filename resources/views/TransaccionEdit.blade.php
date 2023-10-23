@extends('layouts.app')

@section('title', 'Editar Transacción')

@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar Transacción</h1>
    <hr style="background-color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="{{ route('transaccion.update', $transaccion->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Agregamos esta línea para indicar que estamos haciendo una actualización (método PUT) -->
        <div class="col-md-6">
            <label for="transaccion_id" class="form-label">ID de la transacción:</label>
            <input type="text" name="transaccion_id" class="form-control" id="transaccion_id" value="{{ $transaccion->transaccion_id }}" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="tipo_transaccion" class="form-label">Tipo de transacción:</label>
            <input type="text" name="tipo_transaccion" class="form-control" id="tipo_transaccion" value="{{ $transaccion->tipo_transaccion }}" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="monto" class="form-label">Monto de la transacción:</label>
            <input type="text" name="monto" class="form-control" id="monto" value="{{ $transaccion->monto }}" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
        </div>

        <div class="col-md-6">
            <label for="fecha_transaccion" class="form-label">Fecha de la transacción:</label>
            <input type="text" name="fecha_transaccion" class="form-control" id="fecha_transaccion" value="{{ $transaccion->fecha_transaccion }}" required>
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
