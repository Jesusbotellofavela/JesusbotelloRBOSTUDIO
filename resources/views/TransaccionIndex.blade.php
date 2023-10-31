@extends('layouts.app')

@section('title', 'Listado de Transacciones')

@section('content')
<div class="container">
    <h2 class="text-center mt-4"><strong>Listado de Transacciones</strong></h2>
    <div class="row">
        @foreach ($transaccion as $transaccion)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text"><strong>ID de Transacción: </strong>{{$transaccion->id}}</p>
                        <p class="card-text"><strong>Tipo de Transacción:</strong> {{$transaccion->tipo_transaccion}}</p>
                        <p class="card-text"><strong>Monto:</strong> ${{$transaccion->monto}}</p>
                        <p class="card-text"><strong>Fecha de Transacción:</strong> {{$transaccion->fecha_transaccion}}</p>
                        <div class="text-center">
                            <a href="/transaccion/{{$transaccion->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                            <a href="/transaccion/{{$transaccion->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                            <form method="POST" action="{{ route('transaccion.destroy', $transaccion->id) }}">
                            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta transaccion?')">Eliminar</button>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

