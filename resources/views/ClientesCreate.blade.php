@extends('layouts.app')

@section('title', 'Agregar Cliente')

@section('content')
<div class="container mt-5">
    <h1 class="display-4">Agregar Cliente</h1>
    <hr class="my-4">
    @include('ClientesForm')
</div>
@endsection
