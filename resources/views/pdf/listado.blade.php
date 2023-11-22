@extends('layouts.pdfinicio')

@section('content')
    <meta charset="UTF-8">
    <title>Comprobación de Clientes</title>

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
            <p><strong>Comprobación de clientes</strong></p>
        </div>
    </div>

    <table>
        <thead>
            <tr>

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

                    <td>{{$cliente->nombre_cliente }}</td>
                    <td>{{$cliente->apellido_paterno_cliente}}</td>
                    <td>{{$cliente->apellido_materno_cliente}}</td>
                    <td>{{$cliente->email }}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>{{$cliente->referencia_ubicacion}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
