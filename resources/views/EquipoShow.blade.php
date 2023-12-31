@extends('layouts.app')

@section('title', 'Detalles del equipo fotografico')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$equipo->name_product}}</h5>
        </div>
        <div class="card-body">
             @if($equipo->imagen_equipo)
                <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
                        class="card-img-top rounded-circle mx-auto d-block"
                        src="{{asset ('imagen_equipo/'. $equipo->imagen_equipo) }}" alt="">
            @endif
            <p class="card-text"><strong>Nombre del equipo:</strong> {{$equipo->nombre}}</p>
            <p class="card-text"><strong>Cantidad disponible:</strong> {{$equipo->cantidad_disponible}}</p>
            <p class="card-text"><strong>Descripcion del equipo:</strong> ${{$equipo->descripcion}}</p>
            <p class="card-text"><strong>Precio del equipo:</strong> ${{$equipo->precio}}</p>
        </div>


        <div class="card-footer">
        <div class="btn-group">
            <a href="{{ route('equipo.edit', $equipo->id) }}" class="btn btn-primary mr-2">Editar</a>
            <form method="POST" action="{{ route('equipo.destroy', $equipo->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar este equipo?')">Eliminar</button>
        </form>
        </div>
            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
        </div>
    </div>
</div>
@endsection
