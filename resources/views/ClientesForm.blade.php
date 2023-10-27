{{ Form::open(['method' => isset($cliente) ? 'PUT' : 'POST', 'url' => isset($cliente) ? route('cliente.update', $cliente->id) : route('cliente.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($cliente))
    {{ Form::hidden('_method', 'PUT') }}
@endif

<div class="col-md-6">
    {{ Form::label('cliente_id', 'Cliente ID:', ['class' => 'form-label']) }}
    {{ Form::text('cliente_id', $cliente->cliente_id ?? old('cliente_id'), ['class' => 'form-control', 'id' => 'cliente_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
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
    {{ Form::label('equipo_id', 'Equipo ID:', ['class' => 'form-label']) }}
    {{ Form::text('equipo_id', $cliente->equipo_id ?? old('equipo_id'), ['class' => 'form-control', 'id' => 'equipo_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('sesion_id', 'Sesión ID:', ['class' => 'form-label']) }}
    {{ Form::text('sesion_id', $cliente->sesion_id ?? old('sesion_id'), ['class' => 'form-control', 'id' => 'sesion_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('transaccion_id', 'Transacción ID:', ['class' => 'form-label']) }}
    {{ Form::text('transaccion_id', $cliente->transaccion_id ?? old('transaccion_id'), ['class' => 'form-control', 'id' => 'transaccion_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('contrato_id', 'Contrato ID:', ['class' => 'form-label']) }}
    {{ Form::text('contrato_id', $cliente->contrato_id ?? old('contrato_id'), ['class' => 'form-control', 'id' => 'contrato_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('users_id', 'Users ID:', ['class' => 'form-label']) }}
    {{ Form::text('users_id', $cliente->users_id ?? old('users_id'), ['class' => 'form-control', 'id' => 'users_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>


<div class="col-12">
    {{ Form::submit(isset($cliente) ? 'Guardar Cambios' : 'Guardar Cliente', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
