@extends('layouts.app')

@section('title', 'Galeria Index')

@section('content')
<!-- Enlazar hoja de estilos de galería
<link href="{{ asset('css/galeria.css') }}" rel="stylesheet">-->

<form method="GET" action="{{ route('galeria.index') }}" class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>

<div class="container my-5">
    <h2 class="text-center mb-4"><strong>Galería de Imágenes</strong></h2>
    <div class="text-center mb-5">
        <a href="{{ route('galeria.create') }}" class="btn btn-success">Nuevo registro de imagen</a>
    </div>



    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($galeria as $imagen)
        <div class="col mb-4">
            <div class="card shadow">
                <div class="card-content">
                    @if($imagen->imagen)
                    <img style="height: 300px; object-fit: cover; margin-bottom: 20px;"
                        class="card-img-top rounded"
                        src="{{ asset('imagen/' . $imagen->imagen) }}" alt="{{ $imagen->nombre_imagen }}">
                    @endif

                    <p class="card-text text-center"><strong>Nombre de la imagen:</strong> {{ $imagen->nombre_imagen }}</p>
                    <p class="card-text text-center"><strong>Tamaño:</strong> {{ $imagen->tamano }}</p>
                    <p class="card-text text-center"><strong>Precio:</strong> {{ $imagen->precio_imagen }}</p>
                    <p class="card-text text-center"><strong>Cliente:</strong> {{ $imagen->cliente ? $imagen->cliente->nombre_cliente : 'N/A' }}</p>
                </div>

                <div class="card-footer d-flex justify-content-center">
                    <a href="/galeria/{{ $imagen->id }}/edit" class="btn btn-primary me-3">Editar</a>
                    <form method="POST" action="{{ route('galeria.destroy', $imagen->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar esta imagen?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection

