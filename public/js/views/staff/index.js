flatpickr = $(document.querySelector('#flatpickr')).flatpickr({
    altInput: true,
    altFormat: "d/m/Y",
    dateFormat: "Y-m-d",
    mode: "range",
    onChange: function (selectedDates, dateStr, instance) {
        handleFlatpickr(selectedDates, dateStr, instance);
    },
});

var handleFlatpickr = (selectedDates, dateStr, instance) => {
    minDate = selectedDates[0] ? new Date(selectedDates[0]) : null;
    maxDate = selectedDates[1] ? new Date(selectedDates[1]) : null;

    $.fn.dataTable.ext.search.push(
        function (settings, data) {
            var dateAdded = new Date(moment($(data[6]).text(), 'DD MMM YYYY'));

            return (minDate === null && maxDate === null) ||
                (minDate === null && maxDate >= dateAdded) ||
                (minDate <= dateAdded && maxDate === null) ||
                (minDate <= dateAdded && maxDate >= dateAdded);
        }
    );
    datatable.draw();
}

// Clear Flatpickr
document.querySelector('#clear').addEventListener('click', e => { flatpickr.clear() });

$(document.querySelector('#departments')).on('change', e => {
    datatable.column(5).search(e.target.value).draw();
});
