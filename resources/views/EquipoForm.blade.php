{{ Form::open(['method' => isset($equipo) ? 'PUT' : 'POST', 'url' => isset($equipo) ? route('equipo.update', $equipo->id) : route('equipo.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($equipo))
    {{ Form::hidden('_method', 'PUT') }}
@endif

<div class="col-md-6">
    {{ Form::label('id', 'ID del Equipo', ['class' => 'form-label']) }}
    {{ Form::text('id', $equipo->id ?? old('equipo_id'), ['class' => 'form-control', 'id' => 'equipo_id', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('nombre', 'Nombre del Equipo', ['class' => 'form-label']) }}
    {{ Form::text('nombre', $equipo->nombre ?? old('nombre'), ['class' => 'form-control', 'id' => 'nombre', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('cantidad_disponible', 'Cantidad Disponible', ['class' => 'form-label']) }}
    {{ Form::text('cantidad_disponible', $equipo->cantidad_disponible ?? old('cantidad_disponible'), ['class' => 'form-control', 'id' => 'cantidad_disponible', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('descripcion', 'Descripción', ['class' => 'form-label']) }}
    {{ Form::text('descripcion', $equipo->descripcion ?? old('descripcion'), ['class' => 'form-control', 'id' => 'descripcion', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-md-6">
    {{ Form::label('precio', 'Costo del Equipo', ['class' => 'form-label']) }}
    {{ Form::text('precio', $equipo->precio ?? old('precio'), ['class' => 'form-control', 'id' => 'precio', 'required' => 'required']) }}
    <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-12">
    {{ Form::submit(isset($equipo) ? 'Guardar Cambios' : 'Guardar Equipo', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
