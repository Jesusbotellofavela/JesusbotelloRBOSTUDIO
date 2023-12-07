{{ Form::open(['method' => isset($contrato) ? 'PUT' : 'POST', 'url' => isset($contrato) ? route('contrato.update', $contrato->id) : route('contrato.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($contrato))
    {{ Form::hidden('_method', 'PUT') }}
@endif




<div class="col-md-6">
    {{ Form::label('fecha_inicio_contrato', 'Fecha de Inicio del Contrato', ['class' => 'form-label']) }}
    <div style="position: relative;">
        {{ Form::text('fecha_inicio_contrato', $contrato->fecha_inicio_contrato ?? old('fecha_inicio_contrato'), ['class' => 'form-control' . ($errors->has('fecha_inicio_contrato') ? ' is-invalid' : ''), 'id' => 'datepicker_inicio_contrato']) }}
        <i class="far fa-calendar-alt" id="icono_calendario_inicio_contrato" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"></i>
    </div>
    @error('fecha_inicio_contrato')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>




<div class="col-md-6">
    {{ Form::label('fecha_fin_contrato', 'Fecha de Finalización del Contrato', ['class' => 'form-label']) }}
    <div style="position: relative;">
        {{ Form::text('fecha_fin_contrato', $contrato->fecha_fin_contrato ?? old('fecha_fin_contrato'), ['class' => 'form-control' . ($errors->has('fecha_fin_contrato') ? ' is-invalid' : ''), 'id' => 'datepicker_fin_contrato']) }}
        <i class="far fa-calendar-alt" id="icono_calendario_fin_contrato" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"></i>
    </div>
    @error('fecha_fin_contrato')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-md-6">
    {{ Form::label('precio', 'Precio', ['class' => 'form-label']) }}
    {{ Form::text('precio', $contrato->precio ?? old('precio'), ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : '')]) }}
    @error('precio')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-md-6">
    {{ Form::label('direccion_evento', 'Dirección de comienzo del evento', ['class' => 'form-label']) }}
    {{ Form::text('direccion_evento', $contrato->direccion_evento ?? old('direccion_evento'), ['class' => 'form-control' . ($errors->has('direccion_evento') ? ' is-invalid' : '')]) }}
    @error('direccion_evento')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>



<div class="col-md-6">
    {{ Form::label('descripcion_evento', 'Descripción del evento', ['class' => 'form-label']) }}
    {{ Form::text('descripcion_evento', $contrato->descripcion_evento ?? old('descripcion_evento'), ['class' => 'form-control' . ($errors->has('descripcion_evento') ? ' is-invalid' : '')]) }}
    @error('descripcion_evento')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<!-- SCRIPT PARA MINI CALENDARIO -->


<!-- jQuery UI (Datepicker) CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    $(document).ready(function() {
        $("#datepicker_inicio_contrato").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });

        $("#datepicker_fin_contrato").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
    });
</script>



<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
<div class="col-12">
    {{ Form::submit(isset($contrato) ? 'Guardar Cambios' : 'Guardar Contrato', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
