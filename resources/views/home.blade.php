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
    {{-- <div class="menu-links text-center">
    <a href="{{ route('cliente.index') }}" class="btn btn-dark">LISTADO DE CLIENTES</a>
    <a href="{{ route('contrato.index') }}" class="btn btn-dark">LISTADO DE CONTRATOS</a>
    <a href="{{ route('transaccion.index') }}" class="btn btn-dark">LISTADO DE TRANSACCIONES</a>
    <a href="{{ route('equipo.index') }}" class="btn btn-dark">LISTADO DE EQUIPO FOTOGRÁFICO</a>
    <a href="{{ route('sesion.index') }}" class="btn btn-dark">LISTADO DE SESIONES</a>
</div> --}}

{{--
<div class="menu-links text-center">
        <a href="{{ route('cliente.create') }}" class="btn btn-dark">AGREGAR CLIENTES</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('contrato.create') }}" class="btn btn-dark">AGREGAR CONTRATOS</a> <!-- Botón naranja oscuro -->
        <a href="{{ route('transaccion.create') }}" class="btn btn-dark">AGREGAR TRANSACCIONES FINANCIERAS</a> <!-- Botón verde oscuro -->
        <a href="{{ route('equipo.create') }}" class="btn btn-dark">AGREGAR EQUIPO FOTOGRAFICO</a> <!-- Botón rojo oscuro -->
        <a href="{{ route('sesion.create') }}" class="btn btn-dark">AGREGAR SESIONES</a> <!-- Botón naranja oscuro -->
</div> --}}



    <div class="text-center">
        <img src="{{ asset('RSPNG.png') }}" class="img-fluid">
    </div>
    <br>
    <br>


    <div class="text-center">
            <!-- Coloca el calendario dentro de un div centrado -->
            <div style="width: 80%; margin: 0 auto;">
                <div id='calendar'></div>
            </div>
        </div>
    </div>


        <!-- Código de instalación Cliengo para jesusbotellofavela@gmail.com -->
        <!-- Código de instalación Cliengo para RBOSTUDIO --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/65404ddb0446800032aa8254/65404ddc0446800032aa8257.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
    </div>
</div>
@endsection

<!-- USO DEL CALENDARIO -->



@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'esLocale',
        eventColor: '#3788d8',
        initialView: 'dayGridMonth',
        views: {
            timeGridWeek: {
                locale: 'es',
                type: 'timeGrid',
                duration: { days: 7 },
                buttonText: 'week',
                titleFormat: { year: 'numeric', month: 'long', day: 'numeric', weekday: 'long' },
            },
            dayGridMonth: {
                dayHeaderFormat: { weekday: 'short' },
                dayMaxEventRows: 3, // Limita a 3 filas de eventos por día
            }
        },
        events: '/sesion/events',
        dateClick: function(info) {
            window.location.href = '/sesion/create?date=' + info.dateStr;
        },
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },
        themeSystem: 'bootstrap',
        height: 'auto',
    });
    calendar.render();
});


    </script>
@endpush
