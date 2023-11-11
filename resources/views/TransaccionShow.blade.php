@extends('layouts.app')

@section('title', 'Detalles de las transacciones')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$transaccion->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de la transacción:</strong> {{$transaccion->id}}</p>
            <p class="card-text"><strong>Tipo de transacción:</strong> {{$transaccion->tipo_transaccion}}</p>
            <p class="card-text"><strong>Monto de la transacción $:</strong> ${{$transaccion->monto}}</p>
            <p class="card-text"><strong>Fecha de la transacción:</strong> {{$transaccion->fecha_transaccion}}</p>
            <p class="card-text"><strong>Motivo de la Transacción:</strong> {{$transaccion->motivo_transaccion}}</p>
        </div>


        <div class="card-footer">
        <div class="btn-group">
        <a href="/transaccion/{{$transaccion->id}}/edit" class="btn btn-primary mr-2">Editar</a>
        <form method="POST" action="{{ route('transaccion.destroy', $transaccion->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta transaccion?')">Eliminar</button>
            </form>
    </div>
</div>


            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
        </div>
    </div>
</div>
@endsection
