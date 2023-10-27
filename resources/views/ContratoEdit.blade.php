@extends('layouts.app')

@section('title', 'Editar Contrato')

@section('content')
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
<div class="container mt-5">
    <h1 class="display-4">Editar Contrato</h1>
    <hr class="my-4">
    @include('ContratoForm')
</div>
@endsection
