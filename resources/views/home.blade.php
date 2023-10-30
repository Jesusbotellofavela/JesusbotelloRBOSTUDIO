@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">RBO STUDIO</h1>
    <br>
    <h1 class="text-center">(SISTEMA OFICIAL)</h1>
    <br>
    <br>

    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('cliente.index') }}" class="btn btn-dark" >LISTADO DE CLIENTES</a> <!-- Botón azul oscuro -->
        <a href="{{ route('contrato.index') }}" class="btn btn-dark" >LISTADO DE CONTRATOS</a> <!-- Botón azul oscuro -->
        <a href="{{ route('transaccion.index') }}" class="btn btn-dark" >LISTADO DE TRANSACCIONES</a> <!-- Botón azul oscuro -->
        <a href="{{ route('equipo.index') }}" class="btn btn-dark">LISTADO DE EQUIPO FOTOGRÁFICO</a> <!-- Botón oscuro (predeterminado) -->
        <a href="{{ route('sesion.index') }}" class="btn btn-dark">LISTADO DE SESIONES</a> <!-- Botón azul claro oscuro -->

    </div>
    <div class="text-center">
        <img src="{{ asset('RSPNG.png') }}" class="img-fluid">
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('cliente.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR CLIENTES</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('contrato.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR CONTRATOS</a> <!-- Botón naranja oscuro -->
        <a href="{{ route('transaccion.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR TRANSACCIONES FINANCIERAS</a> <!-- Botón verde oscuro -->
        <a href="{{ route('equipo.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR EQUIPO FOTOGRAFICO</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('sesion.create') }}" class="btn btn-warning" style="background-color: #FFA500; border-color: #FFA500;">AGREGAR SESIONES</a> <!-- Botón naranja oscuro -->

    </div>
</div>
@endsection

