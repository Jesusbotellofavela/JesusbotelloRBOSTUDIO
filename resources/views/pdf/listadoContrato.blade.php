@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }

    /* Estilo para el encabezado */
    .header {
        text-align: center;
        color: black; /* Cambia el color de texto a negro */
        padding: 10px;
    }

    .header img {
        width: 100px;
    }

    .company-name {
        font-size: 24px;
    }

    /* Estilo para la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th {
        background-color: black; /* Quita el fondo de color */
        color: white; /* Cambia el color de texto a negro */
        font-weight: bold;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Añadido para eliminar el espacio en la última columna */
    table th:last-child,
    table td:last-child {
        padding: 8px 0; /* Ajusta el padding en la última columna */
    }
</style>
<div class="header">
    <img src="images/RSJPG.jpg" alt="Logo">
    <div class="company-name">
        <strong>RBO</strong>
        <p><strong>Comprobación de contratos</strong></p>
    </div>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Costo</th>
            <th>Dirección del evento</th>
            <th>Descripción del evento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contrato as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->fecha_inicio_contrato }}</td>
                <td>{{ $contrato->fecha_fin_contrato }}</td>
                <td>{{ $contrato->precio }}</td>
                <td>{{ $contrato->direccion_evento}}</td>
                <td>{{ $contrato->descripcion_evento}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
