<x-layouts.app title="Revenue Management">
    <!--begin::Content container-->
     <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
        <!DOCTYPE html>
<html>
<head>
<div class="col-md-6 d-flex justify-content-center align-items-center">
    <h1>New Revenue</h1>
</div>

        <style>/* Style for the horizontal line */


</style>
</head>
<body>


<form action="{{ route('new.revenue') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>

    <div class="form-group row">
    <div class="col-md-5">
    <label for="date" class="col-md-2 col-form-label">Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <div class="col-md-5">
    <label for="time" class="col-md-2 col-form-label">Time:</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>
</div>


<div class="form-group">
    <label for="attachment">Receipt Upload:</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="attachment" name="attachment">
        <label for="attachment">attach a file or upload photo...</label>
    </div>
</div>


<div class="form-group row">
    <div class="col-md-5">
    <label for="billing" class="col-md-2 col-form-label">Billing:</label>
    <select class="form-control" id="billing" name="billing">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div class="col-md-5">
    <label for="Account" class="col-md-2 col-form-label">Account:</label>
    <select class="form-control" id="account" name="account">
            <option value="account1">Account 1</option>
            <option value="account2">Account 2</option>
            <!-- Add more options as needed -->
        </select>   
</div>
</div>



<div class="form-group row">
    <div class="col-md-3">
    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
        <input type="number" class="form-control" id="amount" name="amount" required>
    </div>

    <div class="col-md-3">
    <label for="vat" class="col-md-3 col-form-label">VAT:</label>
        <input type="number" class="form-control" id="vat" name="vat">
    </div>

    <div class="col-md-4">
    <label for="total" class="col-md-3 col-form-label">Total:</label>
        <input type="number" class="form-control" id="total" name="total" readonly>
    </div>
</div>

<div class="form-group row">
<label for="description" class="col-md-3 col-form-label">Description:</label>
    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter a description"></textarea>
</div>


    

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


    

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
