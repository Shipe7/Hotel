<x-layouts.app title="Revenue Management">
    <!--begin::Content container-->
     <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
        <!DOCTYPE html>
<html>
<head>


<style>/* Style for the horizontal line */

    .full-screen-card {
            position: absolute;
            top: 20;
            left: 60;
            width: 60%;
            height: 75%;
            /* display: flex; */
            justify-content: right;
            align-items: center;
            background-color: white;
        }

        .full-screen-card .card-px {
            max-width: 100%;
        }

.form-container{
    position: absolute;
            top: 20;
            left: 60;
            width: 50%;
            height: 75%;
            justify-content: center;
            align-items: center;
            background-color: white; 
            /* display: flex; */
            flex-direction: column; /* Stack content vertically */
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
}

    /* Style for the green checkbox */
.form-check-input[type="checkbox"]:checked {
    background-color: green;
    border-color: green;
}




</style>
</head>
<body>



   
<div class="form-container">
<form action="{{ route('newcb.revenue') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div>
    <h5>New Cashbook</h5>

    <div class="form-group row">
    <div class="col-md-5">
    <label for="cashbook" class="col-form-label">Cashbook Name:</label>
        <input type="text" class="form-control" id="cashbook" name="cashbook" required>
    </div>

   <div class="col-md-5">
    <label for="year" class="col-md-1 col-form-label">Year:</label>
    <select class="form-select" id="year" name="year" required>
        <option value="" disabled selected>Select a year</option>
        <?php
        $currentYear = date("Y");
        for ($year = $currentYear - 10; $year <= $currentYear + 10; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>
</div>


</div>


<div class="form-group row">
<div class="col-md-5">
    <label for="cashbook" class="col-form-label">Cashbook Name for Report:</label>
        <input type="text" class="form-control" id="cashbook" name="cashbook" required>
    </div>


<div class="col-md-5">
    <label for="amount" class="col-form-label">Initial Balance:</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="amount" name="amount" required>
    </div>
</div>
    </div>
<!-- <hr>    -->
<br>
<h5 style="text-align: center; font-family: 'YourFont', sans-serif;">EXTENSIONS</h5>


<div class="form-group">
    <label for="timeframe" class="col-form-label">Timeframe template of cashbook:</label>
    <br>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="custom" name="timeframe" value="custom">
        <label class="form-check-label" for="custom">Custom</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="monthly" name="timeframe" value="monthly">
        <label class="form-check-label" for="monthly">Monthly</label>
    </div>
</div>



<div class="form-check form-switch form-check-custom form-check-solid me-10">
    <div class="row align-items-center">
        <div class="col">
            <label class="form-check-label" for="org_write" style="font-size: 16px; color: black; font-weight: bold;" >Create Default Account</label>
        </div>
        <div class="col-auto" style="margin-left: 280px;">
            <input class="form-check-input h-30px w-50px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div>
    </div>
</div>






    

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
</div>


    

</body>
</html>
           
    <!--end::Content container-->

    @push('scripts')
        <script src="{{ asset('js/widgets.bundle.js') }}"></script>
        {{--<script src="{{ asset('js/custom/widgets.js') }}"></script>--}}
        <script>
            var charts = document.querySelectorAll('.mixed-widget-4-chart');

            [].slice.call(charts).map(function(element) {
                var height = parseInt(KTUtil.css(element, 'height'));

                if ( !element ) {
                    return;
                }

                var color = element.getAttribute('data-kt-chart-color');

                var baseColor = KTUtil.getCssVariableValue('--bs-' + color);
                var lightColor = KTUtil.getCssVariableValue('--bs-' + color + '-light' );
                var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-700');

                var options = {
                    series: [75],
                    chart: {
                        fontFamily: 'inherit',
                        height: height,
                        type: 'radialBar',
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                margin: 0,
                                size: "35%"
                            },
                            dataLabels: {
                                showOn: "always",
                                name: {
                                    show: false,
                                    fontWeight: '700'
                                },
                                value: {
                                    color: labelColor,
                                    fontSize: "10px",
                                    fontWeight: '600',
                                    offsetY: 5,
                                    show: true,
                                    formatter: function (val) {
                                        return val + '%';
                                    }
                                }
                            },
                            track: {
                                background: lightColor,
                                strokeWidth: '100%'
                            }
                        }
                    },
                    colors: [baseColor],
                    labels: ["Progress"]
                };

                var chart = new ApexCharts(element, options);
                chart.render();
            });
        </script>
    @endpush
</x-layouts.app>
