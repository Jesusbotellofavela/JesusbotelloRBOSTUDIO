{{ Form::open(['method' => isset($sesion) ? 'PUT' : 'POST', 'url' => isset($sesion) ? route('sesion.update', $sesion->id) : route('sesion.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($sesion))
    {{ Form::hidden('_method', 'PUT') }}
@endif

    <div class="col-md-6">
        {{ Form::label('sesion_id', 'ID de Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('sesion_id', $sesion->sesion_id ?? old('sesion_id'), ['class' => 'form-control', 'id' => 'sesion_id', 'required' => 'required']) }}
        <div class="valid-feedback"></div>
    </div>
    <div class="col-md-6">
        {{ Form::label('fecha_inicio', 'Fecha de Inicio:', ['class' => 'form-label']) }}
        {{ Form::text('fecha_inicio', $sesion->fecha_inicio ?? old('fecha_inicio'), ['class' => 'form-control', 'id' => 'fecha_inicio', 'required' => 'required']) }}
        <div class="valid-feedback"></div>
    </div>
    <div class="col-md-6">
        {{ Form::label('descripcion_sesion', 'Descripción de la Sesión:', ['class' => 'form-label']) }}
        {{ Form::text('descripcion_sesion', $sesion->descripcion_sesion ?? old('descripcion_sesion'), ['class' => 'form-control', 'id' => 'descripcion_sesion', 'required' => 'required']) }}
        <div class="valid-feedback"></div>
    </div>
    <div class="col-md-6">
        {{ Form::label('fecha_fin', 'Fecha de Finalización:', ['class' => 'form-label']) }}
        {{ Form::text('fecha_fin', $sesion->fecha_fin ?? old('fecha_fin'), ['class' => 'form-control', 'id' => 'fecha_fin', 'required' => 'required']) }}
        <div class="valid-feedback"></div>

        <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    </div>
    <div class="col-12">
        {{ Form::submit(isset($sesion) ? 'Guardar Cambios' : 'Guardar', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
