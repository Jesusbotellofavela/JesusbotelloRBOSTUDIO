@extends('layouts.app')

@section('title', 'Detalles del Contrato')

@section('content')
<div class="container mt-5">
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$sesion->name_product}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>ID de la sesion:</strong> {{$sesion->id}}</p>
            <p class="card-text"><strong>Fecha de inicio de la sesion:</strong> {{$sesion->fecha_inicio}}</p>
            <p class="card-text"><strong>Descripcion de la sesion:</strong> {{$sesion->descripcion_sesion}}</p>
            <p class="card-text"><strong>Fecha de finalizacion de la sesion:</strong> {{$sesion->fecha_fin}}</p>
            <p class="card-text"><strong>Dirección para la Sesión: </strong>{{ $sesion->direccion_sesion }}</p>
            <p class="card-text"><strong>Hora de la Sesión: </strong>{{ $sesion->hora_sesion }}</p>
        </div>


        <div class="card-footer">
        <div class="btn-group">
        <a href="/sesion/{{ $sesion->id }}/edit" class="btn btn-primary mr-2">Editar</a>
        <form method="POST" action="{{ route('sesion.destroy', $sesion->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar esta sesion?')">Eliminar </button>
            </form>
    </div>
</div>





            <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
        </div>
    </div>
</div>
@endsection
