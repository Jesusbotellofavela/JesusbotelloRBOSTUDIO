@extends('layouts.app')

@section('title', 'Editar contratos')
@section('content')

    <h1 class="display-6">Editar contrato</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="{{ route('contrato.update', $contrato->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="contrato_id" class="form-label">Id del contrato:</label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_inicio_contrato" class="form-label">Fecha de inicio del contrato:</label>
            <input type="text" name="fecha_inicio_contrato" class="form-control" id="fecha_inicio_contrato" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_fin_contrato" class="form-label">Fecha de finalizacion del contrato:</label>
            <input type="text" name="fecha_fin_contrato" class="form-control" id="fecha_fin_contrato" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="precio" class="form-label">precio:</label>
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
