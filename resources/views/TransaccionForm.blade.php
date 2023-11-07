{{ Form::open(['method' => isset($transaccion) ? 'PUT' : 'POST', 'url' => isset($transaccion) ? route('transaccion.update', $transaccion->id) : route('transaccion.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($transaccion))
    {{ Form::hidden('_method', 'PUT') }}
@endif


<div class="col-md-6">
    @if (!isset($transaccion))
        {{ Form::label('transaccion_id', 'ID de la transacción:', ['class' => 'form-label']) }}
        {{ Form::text('transaccion_id', old('transaccion_id'), ['class' => 'form-control', 'transaccion_id' => 'transaccion_id', 'required' => 'required']) }}
        <div class="valid-feedback">¡Se ve bien!</div>
    @else
        {{ Form::hidden('transaccion_id', $transaccion->id) }}
    @endif
</div>


    <div class="col-md-6">
        {{ Form::label('tipo_transaccion', 'Tipo de transacción:', ['class' => 'form-label']) }}
        {{ Form::text('tipo_transaccion', $transaccion->tipo_transaccion ?? old('tipo_transaccion'), ['class' => 'form-control', 'id' => 'tipo_transaccion', 'required' => 'required']) }}
        <div class="valid-feedback">
            ¡Se ve bien!
        </div>
    </div>

    <div class="col-md-6">
        {{ Form::label('monto', 'Monto de la transacción:', ['class' => 'form-label']) }}
        {{ Form::text('monto', $transaccion->monto ?? old('monto'), ['class' => 'form-control', 'id' => 'monto', 'required' => 'required']) }}
        <div class="valid-feedback">
            ¡Se ve bien!
        </div>
    </div>

    <div class="col-md-6">
        {{ Form::label('fecha_transaccion', 'Fecha de la transacción:', ['class' => 'form-label']) }}
        {{ Form::text('fecha_transaccion', $transaccion->fecha_transaccion ?? old('fecha_transaccion'), ['class' => 'form-control', 'id' => 'fecha_transaccion', 'required' => 'required']) }}
        <div class="valid-feedback">
            ¡Se ve bien!
        </div>
    </div>
    <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    <div class="col-12">
        {{ Form::submit(isset($transaccion) ? 'Guardar Cambios' : 'Guardar Transacción', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

