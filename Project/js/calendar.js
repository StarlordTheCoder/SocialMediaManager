/**
 * Created by Pascal on 22.01.2017.
 */

$(function() {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: new Date().toDateString(),
        defaultView: 'agendaWeek',
        editable: true,
        eventSources: [
            {
                url: 'input/LoadPostInput.php',
                color: 'yellow',   // a non-ajax option
                textColor: 'black' // a non-ajax option
            }
        ],
        eventClick: function(calEvent, jsEvent, view) {
            var data = [
                ["eventId", calEvent.id],
                ["eventContent", calEvent.content]
            ];

            $.ajax({
                type: 'POST',
                url: 'view/PostOnSocialMediaView.php',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#postCalendarContent').html(data);
                    $('#postOnSocialMediaDialog').modal();
                }
            });
            return false;
        }
    });
});

