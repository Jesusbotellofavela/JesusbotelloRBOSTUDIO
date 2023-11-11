{{ Form::open(['method' => isset($equipo) ? 'PUT' : 'POST', 'url' => isset($equipo) ? route('equipo.update', $equipo->id) : route('equipo.store'), 'enctype' => 'multipart/form-data', 'class' => 'row g-3 needs-validation']) }}
@csrf
@if (isset($equipo))
    {{ Form::hidden('_method', 'PUT') }}
@endif

<div class="col-md-6">
    @if (!isset($equipo))
        {{ Form::label('equipo_id', 'ID del Equipo', ['class' => 'form-label']) }}
        {{ Form::text('equipo_id', $equipo->equipo_id ?? old('equipo_id'), ['class' => 'form-control', 'id' => 'equipo_id', 'required' => 'required']) }}
        <div class="valid-feedback">
            ¡Se ve bien!
        </div>
    @endif
</div>


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




<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
<div class="col-12">
    {{ Form::submit(isset($equipo) ? 'Guardar Cambios' : 'Guardar Equipo', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
