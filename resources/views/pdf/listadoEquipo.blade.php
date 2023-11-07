@extends('layouts.pdfinicio')

@section('content')
    <meta charset="UTF-8">
    <title>Comprobación de Equipo fotográfico</title>

    <style>
        @font-face {
            font-family: 'glyphicons_halflings_normal';
            src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
        }

        /* Estilo para el encabezado */
        .header {
            text-align: center;
            /* Cambia el color de fondo del encabezado a negro */
            color: black; /* Cambia el color de texto del encabezado a blanco */
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
            background-color: black; /* Cambia el color de fondo de los encabezados a azul */
            color: white; /* Cambia el color de texto de los encabezados a blanco */
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
            <p><strong>Comprobación de equipo fotográfico</strong></p>
        </div>
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID de equipo</th>
                <th>Nombre del equipo</th>
                <th>Cantidad disponible</th>
                <th>Descripción del equipo</th>
                <th>Precio del equipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipo as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->cantidad_disponible }}</td>
                    <td>{{ $equipo->descripcion }}</td>
                    <td>{{ $equipo->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

