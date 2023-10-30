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
            <th>ID de equipo</th>
            <th>Nombre del equipo</th>
            <th>Cantidad disponible</th>
            <th>Descripcion del equipo</th>
            <th>Precio del equipo</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($equipo as $equipo)
            <tr>
                <td>{{ $equipo->id}}</td>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->cantidad_disponible }}</td>
                <td>{{ $equipo->descripcion }}</td>
                <td>{{ $equipo->precio }}</td>
                <td class="text-right">

   </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
