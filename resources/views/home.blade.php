@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">RBO STUDIO</h1>
    <br>
    <h1 class="text-center">(SISTEMA OFICIAL)</h1>
    <br>
    <br>
    <div class="text-center">
        <img src="{{ asset('RS.jpg') }}" class="img-fluid">
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('cliente.create') }}" class="btn btn-danger" style="background-color: #8B0000; border-color: #8B0000;">AGREGAR CLIENTES</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('contrato.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR CONTRATOS</a> <!-- Botón naranja oscuro -->
        <a href="{{ route('transaccion.create') }}" class="btn btn-success" style="background-color: #228B22; border-color: #228B22;">AGREGAR TRANSACCIONES FINANCIERAS</a> <!-- Botón verde oscuro -->
        <a href="{{ route('equipo.create') }}" class="btn btn-danger" style="background-color: #8B0000; border-color: #8B0000;">AGREGAR EQUIPO FOTOGRAFICO</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('sesion.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR SESIONES</a> <!-- Botón naranja oscuro -->

    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('cliente.index') }}" class="btn btn-primary" style="background-color: #00008B; border-color: #00908B;">LISTADO DE CLIENTES</a> <!-- Botón azul oscuro -->
        <a href="{{ route('contrato.index') }}" class="btn btn-primary" style="background-color: #00008B; border-color: #00908B;">LISTADO DE CONTRATOS</a> <!-- Botón azul oscuro -->
        <a href="{{ route('transaccion.index') }}" class="btn btn-primary" style="background-color: #00008B; border-color: #00908B;">LISTADO DE TRANSACCIONES</a> <!-- Botón azul oscuro -->
        <a href="{{ route('equipo.index') }}" class="btn btn-dark">LISTADO DE EQUIPO FOTOGRÁFICO</a> <!-- Botón oscuro (predeterminado) -->
        <a href="{{ route('sesion.index') }}" class="btn btn-dark" style="background-color: #1E90FF; border-color: #1E90FF;">LISTADO DE SESIONES</a> <!-- Botón azul claro oscuro -->

    </div>
</div>
@endsection

