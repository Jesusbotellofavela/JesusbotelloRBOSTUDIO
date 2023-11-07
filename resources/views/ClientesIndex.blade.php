@extends('layouts.app')

@section('title', 'Clientes Index')

@section('content')

<form method="GET" action="{{ route('cliente.index') }}" class="search-form">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="search-button">Buscar</button>
</form>


<div class="container">
    <h2 class="text-center mb-4"><strong>Listado de clientes</strong></h2>

    <div class="text-center mb-5">
    <a href="{{ route('cliente.create') }}" class="btn btn-success">Registrar nuevo cliente</a>
    <a href="{{ route('listado.pdf') }}" class="btn btn-success"> Generar PDF</a>
</div>



    <div class="row">
        @foreach ($clientes as $cliente)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text"><strong>ID del cliente:</strong> {{ $cliente->id }}</p>
                    <p class="card-text"><strong>Nombre:</strong> {{ $cliente->nombre_cliente }}</p>
                    <p class="card-text"><strong>Apellido paterno:</strong> {{ $cliente->apellido_paterno_cliente }}</p>
                    <p class="card-text"><strong>Apellido Materno:</strong> {{ $cliente->apellido_materno_cliente }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                    <p class="card-text"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
                    <p class="card-text"><strong>Nombre del equipo que se utilizo:</strong> {{$cliente->Equipo ? $cliente->equipos-> nombre : 'N/A' }}</p>
                    <p class="card-text"><strong>Fecha de la sesion:</strong> {{ $cliente->Sesiones ? $cliente->Sesiones->fecha_inicio : 'N/A' }}</p>
                    <p class="card-text"><strong>Tipo de transaccion que el cliente realizo:</strong> {{ $cliente->Transacciones ? $cliente->Transacciones->tipo_transaccion : 'N/A' }}</p>
                    <p class="card-text"><strong>Fecha de comienzo del contrato:</strong> {{ $cliente->Contrato ? $cliente->Contrato->fecha_inicio_contrato : 'N/A' }}</p>
                    <p class="card-text"><strong>Nombre de quien atendio:</strong> {{ $cliente->User ? $cliente->User->name : 'N/A' }}</p>
                    <p class="card-text"><strong>Referencia de la dirección:</strong> {{ $cliente->referencia_ubicacion }}</p>
                </div>
                <div class="text-center">
                    <a href="/cliente/{{ $cliente->id }}" class="btn btn-secondary mr-2">Mostrar</a>
                    <a href="/cliente/{{ $cliente->id }}/edit" class="btn btn-primary mr-2">Editar</a>
                    <form method="POST" action="{{ route('cliente.destroy', $cliente->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger " onclick="return confirm('Seguro que quieres eliminar este cliente?')">Eliminar</button>
                    </form>

                   <script type="text/javascript">
                        (function () {
                            var ldk = document.createElement('script');
                            ldk.type = 'text/javascript';
                            ldk.async = true;
                            ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(ldk, s);
                        })();
                    </script>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
