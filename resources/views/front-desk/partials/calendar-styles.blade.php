<style>
    .fc-event {
        border-radius: 9px; /* Adjust the radius as needed */
    }
    .fc .fc-timeline-slot-cushion, .fc .fc-datagrid-cell-cushion {
        color: gray;
        font-size: 14px;
        padding-top: 17px;
        padding-bottom: 18px;
    }
    .fc-direction-ltr .fc-timeline-event:not(.fc-event-end)::after, .fc-direction-rtl .fc-timeline-event:not(.fc-event-start)::before, .fc-direction-ltr .fc-timeline-event:not(.fc-event-start)::before, .fc-direction-rtl .fc-timeline-event:not(.fc-event-end)::after {
        display: none;
    }
    /*.fc .fc-timeline-lane-frame, .fc .fc-datagrid-cell-frame, .fc .fc-timeline-slot-frame {
        height: 47px !important;
    }*/
</style>
