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
            <th>Name</th>
            <th>Apellido</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre_cliente }}</td>
                <td>{{ $cliente->email }}</td>
                <td class="text-right">
            <!--<img src="{{ public_path('images/' . $cliente->image) }}" alt="image" width="100">-->
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
