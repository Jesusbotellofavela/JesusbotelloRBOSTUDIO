import { Calendar } from '@fullcalendar/core';
import multiMonthPlugin from '@fullcalendar/multimonth';

document.addEventListener('DOMContentLoaded', function () {
  let calendarEl = document.getElementById('calendar');

  let calendar = new Calendar(calendarEl, {
    plugins: [multiMonthPlugin],
    initialView: 'multiMonthYear'
    // ... otras opciones
  });

  calendar.render();
});

