{{ Form::open(['method' => isset($sesion) ? 'PUT' : 'POST', 'url' => isset($sesion) ? route('sesion.update', $sesion->id) : route('sesion.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($sesion))
    {{ Form::hidden('_method', 'PUT') }}
@endif

<div class="col-md-6">
    @if (!isset($sesion))
        <div class="form-group">
            {{ Form::label('sesion_id', 'ID de Sesión:', ['class' => 'form-label']) }}
            {{ Form::text('sesion_id', old('sesion_id'), ['class' => 'form-control', 'id' => 'id', 'required' => 'required']) }}
            <div class="valid-feedback">¡Se ve bien!</div>
        </div>
    @else
        {{ Form::hidden('sesion_id', $sesion->id) }}
    @endif
</div>


<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('fecha_inicio', 'Fecha de Inicio:', ['class' => 'form-label']) }}
        {{ Form::text('fecha_inicio', $sesion->fecha_inicio ?? old('fecha_inicio'), ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : '')]) }}

        @error('fecha_inicio')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>




<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('descripcion_sesion', 'Descripción de la Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('descripcion_sesion', $sesion->descripcion_sesion ?? old('descripcion_sesion'), ['class' => 'form-control' . ($errors->has('descripcion_sesion') ? ' is-invalid' : '')]) }}
        @error('descripcion_sesion')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('fecha_fin', 'Fecha de Finalización de la Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('fecha_fin', $sesion->fecha_fin ?? old('fecha_fin'), ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : '')]) }}
        @error('fecha_fin')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('direccion_sesion', 'Dirección para la Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('direccion_sesion', $sesion->direccion_sesion ?? old('direccion_sesion'), ['class' => 'form-control' . ($errors->has('direccion_sesion') ? ' is-invalid' : '')]) }}
        @error('direccion_sesion')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('hora_sesion', 'Hora de la Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('hora_sesion', $sesion->hora_sesion ?? old('hora_sesion'), ['class' => 'form-control' . ($errors->has('hora_sesion') ? ' is-invalid' : '')]) }}
        @error('hora_sesion')
            <div class="invalid-feedback" style="color: red;">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>


<div class="col-12">
    {{ Form::submit(isset($sesion) ? 'Guardar Cambios' : 'Guardar', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
