{{ Form::open(['method' => isset($contrato) ? 'PUT' : 'POST', 'url' => isset($contrato) ? route('contrato.update', $contrato->id) : route('contrato.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($contrato))
    {{ Form::hidden('_method', 'PUT') }}
@endif

<div class="col-md-6">
    {{ Form::label('contrato_id', 'ID del Contrato', ['class' => 'form-label']) }}
    {{ Form::text('contrato_id', $contrato->contrato_id ?? old('contrato_id'), ['class' => 'form-control', 'id' => 'contrato_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('fecha_inicio_contrato', 'Fecha de Inicio del Contrato', ['class' => 'form-label']) }}
    {{ Form::text('fecha_inicio_contrato', $contrato->fecha_inicio_contrato ?? old('fecha_inicio_contrato'), ['class' => 'form-control', 'id' => 'fecha_inicio_contrato', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('fecha_fin_contrato', 'Fecha de Finalización del Contrato', ['class' => 'form-label']) }}
    {{ Form::text('fecha_fin_contrato', $contrato->fecha_fin_contrato ?? old('fecha_fin_contrato'), ['class' => 'form-control', 'id' => 'fecha_fin_contrato', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('precio', 'Precio', ['class' => 'form-label']) }}
    {{ Form::text('precio', $contrato->precio ?? old('precio'), ['class' => 'form-control', 'id' => 'precio', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-12">
    {{ Form::submit(isset($contrato) ? 'Guardar Cambios' : 'Guardar Contrato', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
