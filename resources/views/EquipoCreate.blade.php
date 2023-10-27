@extends('layouts.app')

@section('title', 'Agregar Equipo Fotográfico')

@section('content')
<div class="container mt-5">
    <h1 class="display-6">Agregar Equipo Fotográfico</h1>
    <hr style="color: #0056b2;" />
    @include('EquipoForm')
</div>
@endsection

