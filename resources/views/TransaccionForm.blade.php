{{ Form::open(['method' => isset($transaccion) ? 'PUT' : 'POST', 'url' => isset($transaccion) ? route('transaccion.update', $transaccion->id) : route('transaccion.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($transaccion))
    {{ Form::hidden('_method', 'PUT') }}
@endif




<div class="col-md-6">
    {{ Form::label('tipo_transaccion', 'Tipo de transacción:', ['class' => 'form-label']) }}
    {{ Form::text('tipo_transaccion', $transaccion->tipo_transaccion ?? old('tipo_transaccion'), ['class' => 'form-control' . ($errors->has('tipo_transaccion') ? ' is-invalid' : '')]) }}
    @error('tipo_transaccion')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>




<div class="col-md-6">
    {{ Form::label('monto', 'Monto de la Transacción:', ['class' => 'form-label']) }}
    {{ Form::text('monto', $transaccion->monto ?? old('monto'), ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : '')]) }}
    @error('monto')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-md-6">
    {{ Form::label('fecha_transaccion', 'Fecha de la Transacción:', ['class' => 'form-label']) }}
    {{ Form::text('fecha_transaccion', $transaccion->fecha_transaccion ?? old('fecha_transaccion'), ['class' => 'form-control' . ($errors->has('fecha_transaccion') ? ' is-invalid' : '')]) }}
    @error('fecha_transaccion')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>



<div class="col-md-6">
    {{ Form::label('motivo_transaccion', 'Motivo de la Transacción:', ['class' => 'form-label']) }}
    {{ Form::text('motivo_transaccion', $transaccion->motivo_transaccion ?? old('motivo_transaccion'), ['class' => 'form-control' . ($errors->has('motivo_transaccion') ? ' is-invalid' : '')]) }}
    @error('motivo_transaccion')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>





    <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    <div class="col-12">
        {{ Form::submit(isset($transacciones) ? 'Guardar Cambios' : 'Guardar Transacción', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

