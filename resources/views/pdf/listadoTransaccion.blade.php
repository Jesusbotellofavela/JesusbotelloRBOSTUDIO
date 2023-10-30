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
            <th>ID de Transaccion</th>
            <th>Tipo de Transacción</th>
            <th>Monto</th>
            <th>Fecha de Transaccion</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($transaccion as $transaccion)
            <tr>
                <td>{{ $transaccion->id }}</td>
                <td>{{ $transaccion->tipo_transaccion}}</td>
                <td>{{ $transaccion->monto }}</td>
                <td>{{ $transaccion->fecha_transaccion }}</td>
                <td class="text-right">

   </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
