@extends('layouts.app')

@section('title', 'Contrato Index')

@section('content')
<div class="container">
    <h2 class="text-center mt-4"><strong>Listado de Contratos</strong></h2>
    <div class="row">
        @foreach ($contrato as $contrato)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
            <img src="{{ asset('public/contrato.jpg') }}" class="card-img-top" alt="Imagen del contrato">
                <div class="card-body">
                    <p class="card-text"><strong>ID del Contrato:</strong> {{$contrato->id}}</p>
                    <p class="card-text"><strong>Fecha de Inicio:</strong> {{$contrato->fecha_inicio_contrato}}</p>
                    <p class="card-text"><strong>Fecha de Finalización:</strong> {{$contrato->fecha_fin_contrato}}</p>
                    <p class="card-text"><strong>Monto: $</strong>{{$contrato->precio}}</p>
                    <div class="text-center">
                        <a href="/contrato/{{$contrato->id}}" class="btn btn-secondary mr-2">Mostrar</a>
                        <a href="/contrato/{{$contrato->id}}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form method="POST" action="{{ route('contrato.destroy', $contrato->id) }}">
                        <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar este pedido?')">Eliminar</button>
        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

