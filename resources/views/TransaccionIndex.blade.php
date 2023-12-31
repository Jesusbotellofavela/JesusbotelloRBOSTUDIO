@extends('layouts.app')

@section('title', 'Listado de Transacciones')

@section('content')

<form method="GET" action="{{ route('transaccion.index') }}"class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>

<div class="container">
    <h2 class="text-center mt-4"><strong>Listado de Transacciones</strong></h2>

    <div class="text-center mb-5">
    <a href="{{ route('transaccion.create') }}" class="btn btn-success">Registrar nueva transacción</a>
    <a href="{{ route('listadoTransaccion.pdf') }}" class="btn btn-success">Generar PDF</a>
    </div>



    <div class="row">
        @foreach ($transaccion as $transaccion)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">

                        <p class="card-text"><strong>Tipo de Transacción:</strong> {{$transaccion->tipo_transaccion}}</p>
                        <p class="card-text"><strong>Monto:</strong> ${{$transaccion->monto}}</p>
                        <p class="card-text"><strong>Fecha de Transacción:</strong> {{$transaccion->fecha_transaccion}}</p>
                        <p class="card-text"><strong>Motivo de la Transacción:</strong> {{$transaccion->motivo_transaccion}}</p>
                        <div class="text-center">
                            <a href="/transaccion/{{$transaccion->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                            <a href="/transaccion/{{$transaccion->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                            <form method="POST" action="{{ route('transaccion.destroy', $transaccion->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta transaccion?')">Eliminar</button>
        </form>
        <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

