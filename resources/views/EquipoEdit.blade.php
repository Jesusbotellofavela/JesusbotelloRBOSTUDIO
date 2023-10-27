@extends('layouts.app')

@section('title', 'Editar Equipo Fotográfico')

@section('content')
<div class="container mt-5">
    <h1 class="display-6">Editar Equipo Fotográfico</h1>
    <hr style="color: #0056b2;" />
    @include('EquipoForm')
</div>
@endsection
