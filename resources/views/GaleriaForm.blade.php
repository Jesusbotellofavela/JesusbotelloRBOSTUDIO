{{ Form::open(['method' => isset($galeria) ? 'PUT' : 'POST', 'url' => isset($galeria) ? route('galeria.update', $galeria->id) : route('galeria.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($galeria))
    {{ Form::hidden('_method', 'PUT') }}
@endif


<div class="col-md-6">
    {{ Form::label('nombre_imagen', 'Nombre de la Imagen:', ['class' => 'form-label']) }}
    {{ Form::text('nombre_imagen', $galeria->nombre_imagen ?? old('nombre_imagen'), ['class' => 'form-control', 'id' => 'nombre_imagen', 'required' => 'required']) }}
    <!-- Agregar validaciones si lo requieres -->
</div>

<div class="col-md-6">
    {{ Form::label('tamano', 'Tamaño:', ['class' => 'form-label']) }}
    {{ Form::text('tamano', $galeria->tamano ?? old('tamano'), ['class' => 'form-control', 'id' => 'tamano', 'required' => 'required']) }}
    <!-- Agregar validaciones si lo requieres -->
</div>

<div class="col-md-6">
    {{ Form::label('precio_imagen', 'Precio de la Imagen:', ['class' => 'form-label']) }}
    {{ Form::text('precio_imagen', $galeria->precio_imagen ?? old('precio_imagen'), ['class' => 'form-control', 'id' => 'precio_imagen', 'required' => 'required']) }}
    <!-- Agregar validaciones si lo requieres -->
</div>

<div class="col-md-6">
    {{ Form::label('imagen', 'Imagen:', ['class' => 'form-label']) }}
    {{ Form::file('imagen', ['class' => 'form-control-file', 'id' => 'imagen', 'required' => 'required']) }}
    <!-- Agregar validaciones si lo requieres -->
    @if(isset($galeria) && $galeria->imagen)
        <p>Imagen Actual:</p>
        <img src="{{ asset('imagen/' . $galeria->imagen) }}" alt="Imagen actual del equipo" style="max-width: 500px; max-height: 500px;">
    @endif

    @error('imagen')
        <div class="invalid-feedback" style="color: red;">
            {{ $message }}
        </div>
    @enderror

</div>

<!-- Resto de los campos de Cliente -->
<!-- ... -->
<div class="col-md-6">
    {{ Form::label('cliente_id', 'Cliente ID:', ['class' => 'form-label']) }}
    {{ Form::select('cliente_id', $cliente->pluck('nombre_cliente', 'id'), null, ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un cliente']) }}
            <div class="valid-feedback">
        ¡Se ve bien!
    </div>
</div>

<div class="col-12">
    {{ Form::submit(isset($galeria) ? 'Guardar Cambios' : 'Guardar Galería', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
