@extends('layouts.app')

@section('title', 'Editar Sesiones Fotográficas')

@section('content')

<div class="container mt-5">
    <h1 class="display-6">Editar Sesiones Fotográficas</h1>
    <hr style="background-color: #0056b2; height: 2px; border: none; margin: 20px 0;">

    @include('SesionForm')
</div>
@endsection
