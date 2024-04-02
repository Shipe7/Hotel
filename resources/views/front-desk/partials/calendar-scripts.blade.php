<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            now: '{{ now() }}',
            editable: false,
            firstDay: 1,
            aspectRatio: 1.2 /*2.9*/,
            scrollTime: '00:00',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'resourceTimelineDay,resourceTimelineWeek,resourceTimelineMonth,resourceTimelineYear'
            },
            buttonText: {
                today: "View Today"
            },
            /*eventResizeStop: function (resizeInfo) {
                // Retrieve the event object from the resizeInfo
                const event = resizeInfo.event;

                // Calculate the new start and end dates
                const newStart = event.start.toISOString(); // Format the date to ISO string
                const newEnd = resizeInfo.end ? resizeInfo.end.toISOString() : null; // Check if there's an end date

                console.log('Event resized. New start:', newStart, 'New end:', newEnd);
            },*/
            initialDate: new Date(Date.parse('{{ $from ?? now() }}')).toISOString().split('T')[0],
            customButtons: {
                promptResource: {
                    text: '+ room',
                    click: function() {
                        var title = prompt('Room name');
                        if (title) {
                            calendar.addResource({ title: title });
                        }
                    }
                }
            },
            initialView: 'resourceTimelineWeek',
            views: {
                resourceTimelineWeek: {
                    type: 'resourceTimeline',
                    /*duration: { days: 8 },
                    buttonText: 'Week',*/
                    slotDuration: { days: 1 },
                    slotLabelFormat: { weekday: 'short', month: 'short', day: 'numeric' },
                    titleFormat: { year: 'numeric', month: 'long', day: 'numeric' }
                },
                resourceTimelineMonth: {
                    type: 'resourceTimeline',
                    slotLabelFormat: { weekday: 'short', month: 'short', day: 'numeric' },
                },
                resourceTimelineYear: {
                    type: 'resourceTimeline',
                    slotLabelFormat: { weekday: 'short', month: 'short', day: 'numeric' },
                },
            },
            resourceAreaWidth: '180px',
            resourceAreaHeaderContent: 'Rooms',
            eventContent: function(arg) {
                return {
                    html: '<div>' + arg.event.title + '</div>' + '<div class="fs-9">' + '2 guests' /*arg.event.extendedProps.summary*/ + '</div>'
                };
            },
            resources:  @js(route('api.calendar-rooms.index')),
            events: @js(route('api.calendar-reservations.index')),
        });

        calendar.render();

        document.getElementById('rooms').addEventListener('change', function (e) {
        fetch(e.target.value)
            .then(response => response.json())
            .then(data => {
                calendar.setOption('resources', data);
                calendar.setOption('aspectRatio', 3);
            })
        });

        document.getElementById('search').addEventListener('keyup', function (e) {
            fetch(@js(route('api.calendar-reservations.index')) + '?q=' + e.target.value)
                .then(response => response.json())
                .then(data => {
                    calendar.setOption('events', data);
                })
        });

        document.getElementById('from-date').addEventListener('change', function (e) {
            var parts = e.target.value.split('/');
            var formattedDate = parts[2] + '-' + parts[1] + '-' + parts[0];
            calendar.gotoDate(formattedDate);
        });
    });
</script>
