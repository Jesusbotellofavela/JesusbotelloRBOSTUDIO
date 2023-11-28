@extends('layouts.app')

@section('title', 'Detalles del cliente')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$galeria->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Nombre de la imagen:</strong> {{ $galeria->nombre_imagen }}</p>
            <p class="card-text"><strong>Tamaño:</strong> {{ $galeria->tamano }}</p>
            <p class="card-text"><strong>Precio:</strong> {{ $galeria->precio_imagen }}</p>
             <p class="card-text"><strong>Cliente:</strong> {{ $galeria->cliente ? $galeria->cliente->nombre_cliente : 'N/A' }}</p>
        </div>



         <div class="text-center">
            <a href="/galeria/{{ $galeria->id }}/edit" class="btn btn-primary mr-2">Editar</a>
            <form method="POST" action="{{ route('galeria.destroy', $galeria->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar esta imagen?')">Eliminar</button>
</form>

        </div>
    </div>
</div>

        </div>
    </div>
@endsection
