{{ Form::open(['method' => isset($equipo) ? 'PUT' : 'POST', 'url' => isset($equipo) ? route('equipo.update', $equipo->id) : route('equipo.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($equipo))
    {{ Form::hidden('_method', 'PUT') }}
@endif



<div class="col-md-6">
    {{ Form::label('nombre', 'Nombre del Equipo', ['class' => 'form-label']) }}
    {{ Form::text('nombre', $equipo->nombre ?? old('nombre'), ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) }}

    @error('nombre')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    {{ Form::label('cantidad_disponible', 'Cantidad Disponible', ['class' => 'form-label']) }}
    {{ Form::text('cantidad_disponible', $equipo->cantidad_disponible ?? old('cantidad_disponible'), ['class' => 'form-control' . ($errors->has('cantidad_disponible') ? ' is-invalid' : '')]) }}

    @error('cantidad_disponible')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    {{ Form::label('descripcion', 'Descripción', ['class' => 'form-label']) }}
    {{ Form::text('descripcion', $equipo->descripcion ?? old('descripcion'), ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : '')]) }}

    @error('descripcion')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    {{ Form::label('precio', 'Costo del Equipo', ['class' => 'form-label']) }}
    {{ Form::text('precio', $equipo->precio ?? old('precio'), ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : '')]) }}

    @error('precio')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    {{ Form::label('imagen_equipo', 'Imagen del Equipo', ['class' => 'form-label']) }}
    {{ Form::file('imagen_equipo', ['class' => 'form-control' . ($errors->has('imagen_equipo') ? ' is-invalid' : '')]) }}

    @if(isset($equipo) && $equipo->imagen_equipo)
        <p>Imagen Actual:</p>
        <img src="{{ asset('imagen_equipo/' . $equipo->imagen_equipo) }}" alt="Imagen actual del equipo" style="max-width: 200px; max-height: 200px;">
    @endif

    @error('imagen_equipo')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-12">
    {{ Form::submit(isset($equipo) ? 'Guardar Cambios' : 'Guardar Equipo', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
