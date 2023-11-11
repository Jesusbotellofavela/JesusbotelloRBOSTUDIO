@extends('layouts.app')

@section('title', 'Contrato Index')

@section('content')

<form method="GET" action="{{ route('contrato.index') }}" class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>

<div class="container">
    <h2 class="text-center mt-4 mb-4"><strong>Listado de Contratos</strong></h2>

    <div class="text-center mb-5">
        <a href="{{ route('contrato.create') }}" class="btn btn-success">Registrar nuevo contrato</a>
        <a href="{{ route('listadoContrato.pdf') }}" class="btn btn-success">Generar PDF</a>
    </div>

    <div class="row">
        @foreach ($contrato as $contrato)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">

                    <p class="card-text"><strong>Fecha de Inicio:</strong> {{$contrato->fecha_inicio_contrato}}</p>
                    <p class="card-text"><strong>Fecha de Finalización:</strong> {{$contrato->fecha_fin_contrato}}</p>
                    <p class="card-text"><strong>Monto: $</strong>{{$contrato->precio}}</p>
                    <p class="card-text"><strong>Dirección del comienzo del evento:</strong> {{$contrato->direccion_evento}}</p>
                    <p class="card-text"><strong>Descripcion del evento:</strong> {{$contrato->descripcion_evento}}</p>



                    <div class="text-center">
                        <a href="/contrato/{{$contrato->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/contrato/{{$contrato->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('contrato.destroy', $contrato->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que quieres eliminar este contrato?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
