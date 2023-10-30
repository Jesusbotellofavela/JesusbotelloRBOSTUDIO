@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID de la sesión</th>
            <th>Fecha de la sesión</th>
            <th>Descripción de la sesión</th>
            <th>Fecha de finalización de la sesión</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($sesion as $sesion)
            <tr>
                <td>{{ $sesion->id }}</td>
                <td>{{ $sesion->fecha_inicio }}</td>
                <td>{{ $sesion->descripcion_sesion }}</td>
                <td>{{ $sesion->fecha_fin}}</td>
                <td class="text-right">

   </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
