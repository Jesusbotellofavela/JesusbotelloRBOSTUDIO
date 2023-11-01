@extends('layouts.pdfinicio')
@section('content')
<meta charset="UTF-8">
    <title>Lista de Clientes</title>
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>


<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Referencia de la dirección</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $cliente)
            <tr>
                <td>{{$cliente->id }}</td>
                <td>{{$cliente->nombre_cliente }}</td>
                <td>{{$cliente->apellido_paterno_cliente}}</td>
                <td>{{$cliente->apellido_materno_cliente}}</td>
                <td>{{$cliente->email }}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->referencia_ubicacion}}</td>


                <td class="text-right">
            <!--<img src="{{ public_path('images/' . $cliente->image) }}" alt="image" width="100">-->
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
