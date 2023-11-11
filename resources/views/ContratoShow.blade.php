@extends('layouts.app')

@section('title', 'Detalles del Contrato')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$contrato->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de contrato:</strong> {{$contrato->id}}</p>
            <p class="card-text"><strong>Fecha de inicio del contrato:</strong> {{$contrato->fecha_inicio_contrato}}</p>
            <p class="card-text"><strong>Fecha de finalización del contrato:</strong> {{$contrato->fecha_fin_contrato}}</p>
            <p class="card-text"><strong>Costo del contrato:</strong> ${{$contrato->precio}}</p>
            <p class="card-text"><strong>Direccion del evento:</strong> {{$contrato->direccion_evento}}</p>
            <p class="card-text"><strong>Descripción del evento:</strong> {{$contrato->descripcion_evento}}</p>


        </div>
        <div class="card-footer">
        <div class="btn-group">
        <a href="/contrato/{{$contrato->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('contrato.destroy', $contrato->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que quieres eliminar este contrato?')">Eliminar</button>
                        </form>
                        </div>



            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
        </div>
    </div>
</div>
@endsection
