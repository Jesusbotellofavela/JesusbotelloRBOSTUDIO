@extends('layouts.app')

@section('title', 'Agregar Contrato')

@section('content')
<div class="container mt-5">
    <h1 class="display-4">Agregar Contrato</h1>
    <hr class="my-4">
    @include('ContratoForm')
</div>
@endsection
