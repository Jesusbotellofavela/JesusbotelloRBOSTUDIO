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
            <th>ID</th>
            <th>fecha inicio</th>
            <th>fecha fin</th>
            <th>Costo</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($contrato as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->fecha_inicio_contrato }}</td>
                <td>{{ $contrato->fecha_fin_contrato }}</td>
                <td>{{ $contrato->precio }}</td>
                <td class="text-right">

   </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
