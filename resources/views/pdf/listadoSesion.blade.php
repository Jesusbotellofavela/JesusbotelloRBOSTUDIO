@extends('layouts.pdfinicio')

@section('content')
    <meta charset="UTF-8">
    <title>Registro de sesiones</title>

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
            <p><strong>Registro de sesiones</strong></p>
        </div>
    </div>

    <table>
    <thead>
        <tr>
            <th>ID de la sesión</th>
            <th>Fecha de la sesión</th>
            <th>Descripción de la sesión</th>
            <th>Fecha de finalización de la sesión</th>
            <th>Dirección para la sesión</th>
            <th>Hora de la sesión</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($sesion as $sesion)
            <tr>
                <td>{{ $sesion->id }}</td>
                <td>{{ $sesion->fecha_inicio }}</td>
                <td>{{ $sesion->descripcion_sesion }}</td>
                <td>{{ $sesion->fecha_fin}}</td>
                <td>{{ $sesion->direccion_sesion}}</td>
                <td>{{ $sesion->hora_sesion}}</td>



            </tr>
        @endforeach
    </tbody>
</table>
@endsection
