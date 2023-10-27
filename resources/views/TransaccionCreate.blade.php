@extends('layouts.app')

@section('title', 'Agregar Transacciones financieras')

@section('content')
<a href="javascript:window.history.back()" class="btn btn-secondary">Regresar</a>
<div class="container mt-5">
    <h1 class="display-6">Agregar Transacciones financieras</h1>
    <hr style="color: #0056b2;" />
    @include('TransaccionForm')
</div>
@endsection

