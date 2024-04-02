<script>
        var chart = {
            self: null,
            rendered: false
        };

        // Private methods
        var initChart = function(chart) {
            var element = document.getElementById("kt_charts_widget_18_chart");

            if (!element) {
                return;
            }

            var height = parseInt(KTUtil.css(element, 'height'));
            var labelColor = KTUtil.getCssVariableValue('--bs-gray-900');
            var borderColor = KTUtil.getCssVariableValue('--bs-border-dashed-color');

            var options = {
                series: [{
                    name: 'Occupancy',
                    data: $(element).data('values')
                }],
                chart: {
                    fontFamily: 'inherit',
                    type: 'bar',
                    height: height,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: ['35%'],
                        distributed: true,
                        borderRadius: 5,
                        dataLabels: {
                            position: "top" // top, center, bottom
                        },
                        startingShape: 'flat'
                    },
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: true,
                    offsetY: -28,
                    style: {
                        fontSize: '13px',
                        colors: [labelColor]
                    },
                    formatter: function() {
                        return '';
                    }
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                colors: ['#0062D1', '#6817CFCC', '#449C11CC', '#FF9F32CC', '#4E07A8CC', '#0062D1', '#1A2EE8CC', '#FF9F32CC', '#6817CFCC', '#099C31CC', '#0062D1', '#FF9F32CC'],
                xaxis: {
                    categories: $(element).data('keys'),
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: KTUtil.getCssVariableValue('--bs-gray-500'),
                            fontSize: '13px'
                        }
                    },
                    crosshairs: {
                        fill: {
                            gradient: {
                                opacityFrom: 0,
                                opacityTo: 0
                            }
                        }
                    }
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    tickAmount: 5,
                    labels: {
                        style: {
                            colors: KTUtil.getCssVariableValue('--bs-gray-500'),
                            fontSize: '13px'
                        },
                        formatter: function(val) {
                            return val + "%";
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px'
                    },
                    y: {
                        formatter: function (val) {
                            return  + val + '%'
                        }
                    }
                },
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                }
            };

            chart.self = new ApexCharts(element, options);

            // Set timeout to properly get the parent elements width
            setTimeout(function() {
                chart.self.render();
                chart.rendered = true;
            }, 200);
        }

        initChart(chart);

        // Update chart on theme mode change
        KTThemeMode.on("kt.thememode.change", function() {
            if (chart.rendered) {
                chart.self.destroy();
            }

            initChart(chart);
        });

</script>
