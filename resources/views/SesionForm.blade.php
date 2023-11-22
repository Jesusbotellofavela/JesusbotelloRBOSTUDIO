{{ Form::open(['method' => isset($sesion) ? 'PUT' : 'POST', 'url' => isset($sesion) ? route('sesion.update', $sesion->id) : route('sesion.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($sesion))
    {{ Form::hidden('_method', 'PUT') }}
@endif




<div class="col-md-6">
    <div class="form-group">
        {{ Form::label('fecha_inicio', 'Fecha de Inicio:', ['class' => 'form-label']) }}
        <div style="position: relative;">
            {{ Form::text('fecha_inicio', $sesion->fecha_inicio ?? old('fecha_inicio'), ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'id' => 'datepicker_inicio']) }}
            <i class="far fa-calendar-alt" id="icono_calendario_inicio" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"></i>
        </div>

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
        <div style="position: relative;">
            {{ Form::text('fecha_fin', $sesion->fecha_fin ?? old('fecha_fin'), ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'id' => 'datepicker_fin']) }}
            <i class="far fa-calendar-alt" id="icono_calendario_fin" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"></i>
        </div>
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


<!-- SCRIPT PARA MINI CALENDARIO -->


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI (Datepicker) CDN -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(document).ready(function() {
        $("#datepicker_inicio").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });

        $("#datepicker_fin").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });
</script>




<div class="col-12">
    {{ Form::submit(isset($sesion) ? 'Guardar Cambios' : 'Guardar', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
