checkinDate = $(document.querySelector('#checkin-date')).flatpickr({
    altInput: true,
    altFormat: "d/m/Y",
    dateFormat: "Y-m-d",
    mode: "range",
    onChange: function (selectedDates, dateStr, instance) {
        handleCheckinDate(selectedDates, dateStr, instance);
    },
});

var handleCheckinDate = (selectedDates, dateStr, instance) => {
    minDate = selectedDates[0] ? new Date(selectedDates[0]) : null;
    maxDate = selectedDates[1] ? new Date(selectedDates[1]) : null;

    $.fn.dataTable.ext.search.push(
        function (settings, data) {
            var dateAdded = new Date(moment(data[4], 'DD MMM YYYY'));

            return (minDate === null && maxDate === null) ||
                (minDate === null && maxDate >= dateAdded) ||
                (minDate <= dateAdded && maxDate === null) ||
                (minDate <= dateAdded && maxDate >= dateAdded);
        }
    );
    datatable.draw();
}

// Clear Flatpickr
document.querySelector('#clear-checkin').addEventListener('click', e => { checkinDate.clear() });

checkoutDate = $(document.querySelector('#checkout-date')).flatpickr({
    altInput: true,
    altFormat: "d/m/Y",
    dateFormat: "Y-m-d",
    mode: "range",
    onChange: function (selectedDates, dateStr, instance) {
        handleCheckoutDate(selectedDates, dateStr, instance);
    },
});

var handleCheckoutDate = (selectedDates, dateStr, instance) => {
    minDate = selectedDates[0] ? new Date(selectedDates[0]) : null;
    maxDate = selectedDates[1] ? new Date(selectedDates[1]) : null;

    $.fn.dataTable.ext.search.push(
        function (settings, data) {
            var dateAdded = new Date(moment(data[5], 'DD MMM YYYY'));

            return (minDate === null && maxDate === null) ||
                (minDate === null && maxDate >= dateAdded) ||
                (minDate <= dateAdded && maxDate === null) ||
                (minDate <= dateAdded && maxDate >= dateAdded);
        }
    );
    datatable.draw();
}

// Clear Flatpickr
document.querySelector('#clear-checkout').addEventListener('click', e => { checkoutDate.clear() });

$(document.querySelector('#status')).on('change', e => {
    datatable.column(9).search(e.target.value).draw();
});

$(document.querySelector('#booking-no')).on('keyup', e => {
    datatable.column(1).search(e.target.value).draw();
});

$(document.querySelector('#guest')).on('keyup', e => {
    datatable.column(3).search(e.target.value).draw();
});
