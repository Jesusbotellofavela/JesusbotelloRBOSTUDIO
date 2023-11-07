{{ Form::open(['method' => isset($cliente) ? 'PUT' : 'POST', 'url' => isset($cliente) ? route('cliente.update', $cliente->id) : route('cliente.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($cliente))
    {{ Form::hidden('_method', 'PUT') }}
@endif
<div class="col-md-6">
    @if (!isset($cliente))
        {{ Form::label('cliente_id', 'Cliente ID:', ['class' => 'form-label']) }}
        {{ Form::text('cliente_id', old('cliente_id'), ['class' => 'form-control', 'cliente_id' => 'id', 'required' => 'required']) }}
        <div class="valid-feedback">
            ¡Se ve bien!
        </div>
    @else
        {{ Form::hidden('cliente_id', $cliente->id) }}
    @endif
</div>



<div class="col-md-6">
    {{ Form::label('nombre_cliente', 'Nombre del Cliente:', ['class' => 'form-label']) }}
    {{ Form::text('nombre_cliente', $cliente->nombre_cliente ?? old('nombre_cliente'), ['class' => 'form-control', 'id' => 'nombre_cliente', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('apellido_paterno_cliente', 'Apellido Paterno:', ['class' => 'form-label']) }}
    {{ Form::text('apellido_paterno_cliente', $cliente->apellido_paterno_cliente ?? old('apellido_paterno_cliente'), ['class' => 'form-control', 'id' => 'apellido_paterno_cliente', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('apellido_materno_cliente', 'Apellido Materno:', ['class' => 'form-label']) }}
    {{ Form::text('apellido_materno_cliente', $cliente->apellido_materno_cliente ?? old('apellido_materno_cliente'), ['class' => 'form-control', 'id' => 'apellido_materno_cliente', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('email', 'Email:', ['class' => 'form-label']) }}
    {{ Form::email('email', $cliente->email ?? old('email'), ['class' => 'form-control', 'id' => 'email', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('telefono', 'Teléfono:', ['class' => 'form-label']) }}
    {{ Form::text('telefono', $cliente->telefono ?? old('telefono'), ['class' => 'form-control', 'id' => 'telefono', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('direccion', 'Dirección:', ['class' => 'form-label']) }}
    {{ Form::text('direccion', $cliente->direccion ?? old('direccion'), ['class' => 'form-control', 'id' => 'direccion', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('referencia_ubicacion', 'Referencia de la direccion:', ['class' => 'form-label']) }}
    {{ Form::text('referencia_ubicacion', $cliente->referencia_ubicacion ?? old('referencia_ubicacion'), ['class' => 'form-control', 'id' => 'referencia_ubicacion', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
<div class="col-12">
    {{ Form::submit(isset($cliente) ? 'Guardar Cambios' : 'Guardar Cliente', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
