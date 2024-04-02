<div class="btn-group">
    <span @class([
        'btn', 'btn-sm', 'w-90px', 'ps-3', 'pe-0', 'text-start',
        'btn-primary'   => $reservation->isConfirmed(),
        'btn-success'   => $reservation->isCheckedIn(),
        'btn-warning'   => $reservation->isCheckedOut(),
        'btn-secondary' => $reservation->isDueIn(),
        'btn-danger'    => $reservation->isDueOut(),
    ])>
        {{ $reservation->status }}
    </span>
    <button @class([
        'btn', 'btn-sm', 'dropdown-toggle', 'px-3', 'dropdown-toggle-split',
        'btn-primary'   => $reservation->isConfirmed(),
        'btn-success'   => $reservation->isCheckedIn(),
        'btn-warning'   => $reservation->isCheckedOut(),
        'btn-secondary' => $reservation->isDueIn(),
        'btn-danger'    => $reservation->isDueOut(),
    ])
            data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
    </button>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
        <div class="menu-item px-3">
            <button class="menu-link px-2 w-100 btn btn-sm" onclick="event.stopPropagation()">
                Adjust Reservation
            </button>
        </div>
    </div>
</div>
