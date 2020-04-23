$(document).ready(function() {
    var calendar = $('#calendar').fullcalendar({
        editable: true,
        selectable: true,
        selectHelper: true,
        header: {
            left: 'prev, next day',
            center: 'title',
            left: 'month, agendaWeek, agendaDay'
        },
        buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
        },
        events: 'agenda.php',
    });
});