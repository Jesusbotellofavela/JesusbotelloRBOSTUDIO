@extends('layouts.pdfinicio')

@section('content')
    <meta charset="UTF-8">
    <title>Transacciones</title>

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
    </style>

    <div class="header">
        <img src="images/RSJPG.jpg" alt="Logo">
        <div class="company-name">
            <strong>RBO</strong>
            <p><strong>Comprobación de transacciones</strong></p>
        </div>
    </div>

    <table>
    <thead>
        <tr>

            <th>Tipo de Transacción</th>
            <th>Monto</th>
            <th>Fecha de Transaccion</th>
            <th>Motivo de la Transaccion</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($transaccion as $transaccion)
            <tr>

                <td>{{ $transaccion->tipo_transaccion}}</td>
                <td>{{ $transaccion->monto }}</td>
                <td>{{ $transaccion->fecha_transaccion }}</td>
                <td>{{ $transaccion->motivo_transaccion}}</td>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection
