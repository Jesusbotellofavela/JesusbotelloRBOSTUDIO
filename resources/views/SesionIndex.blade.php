@extends('layouts.app')

@section('title', 'Sesion Index')

@section('content')

<form method="GET" action="{{ route('sesion.index') }}"class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>



<div class="container">
    <h2 class="text-center mb-4"><strong>Listado de Sesiones Fotográficas</strong></h2>

    <div class="text-center mb-5">
    <a href="{{ route('sesion.create') }}" class="btn btn-success">Registrar nueva sesión</a>
    <a href="{{ route('listadoSesion.pdf') }}" class="btn btn-success">Generar PDF</a>
    </div>




    <div class="row">
        @foreach ($sesion as $sesion)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text"><strong>ID de la Sesión: </strong>{{ $sesion->id }}</p>
                    <p class="card-text"><strong>Fecha de la Sesión: </strong>{{ $sesion->fecha_inicio }}</p>
                    <p class="card-text"><strong>Descripción de la Sesión: </strong>{{ $sesion->descripcion_sesion }}</p>
                    <p class="card-text"><strong>Fecha de Finalización de la Sesión: </strong>{{ $sesion->fecha_fin }}</p>
                    <div class="text-center">
                        <a href="/sesion/{{ $sesion->id }}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/sesion/{{ $sesion->id }}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('sesion.destroy', $sesion->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta sesion?')">Eliminar </button>
                    </div>
                </div>
                <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


