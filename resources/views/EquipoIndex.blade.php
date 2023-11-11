@extends('layouts.app')

@section('title', 'Listado de Equipos Fotográficos')

@section('content')

<form method="GET" action="{{ route('equipo.index') }}"class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>

<div class="container ">
    <h2 class="text-center mb-4"><strong>Listado de Equipos Fotográficos</strong></h2>

    <div class="text-center mb-5">
    <a href="{{ route('equipo.create') }}" class="btn btn-success">Registrar nuevo equipo</a>
    <a href="{{ route('listadoEquipo.pdf') }}" class="btn btn-success">Generar PDF</a>
    </div>




    <div class="row">
        @foreach ($equipo as $equipo)
            <div class="col-md-4 mb-4">
                <div class="card shadow">

                    <div class="card-body">

                    <p class="card-text"><strong>Nombre del equipo:</strong> {{$equipo->nombre}}</p>
                    <p class="card-text"><strong>Cantidad disponible:</strong> {{$equipo->cantidad_disponible}}</p>
                    <p class="card-text"><strong>Descripción del equipo:</strong> {{$equipo->descripcion}}</p>
                    <p class="card-text"><strong>Precio del equipo:</strong> ${{$equipo->precio}}</p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('equipo.show', $equipo->id) }}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="{{ route('equipo.edit', $equipo->id) }}" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('equipo.destroy', $equipo->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar este equipo?')">Eliminar</button>
        </form>
        <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

