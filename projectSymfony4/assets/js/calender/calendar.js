import { Calendar } from '@fullcalendar/core';
import allLocales from '@fullcalendar/core/locales-all';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin ,interactionPlugin ],
        locales: allLocales,
        locale: 'en',
        defaultView: 'dayGridMonth',
       // defaultView: 'agendaWeek',
        firstDay: 5,
        weekNumbers: true,
        selectable: true,
        dateClick: function(info) {
            alert('Clicked on: ' + info.dateStr);
           // alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            info.dayEl.style.backgroundColor = 'red';
        },
        editable: true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },

        events: "json-events.php",
        eventRender : function(calEvent, $event) {
            calEvent.distributor } //this is my new field
    });

    calendar.render();

});