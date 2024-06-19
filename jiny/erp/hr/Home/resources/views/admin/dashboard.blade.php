<x-theme theme="admin.sidebar">
    <div class="wrapper">

        @includeIf("jinyerp-hr-home::layouts.sidebar")

        <div class="main">
            <x-theme-header></x-theme-header>
            <x-theme-main>
                <h1>HR 인사관리</h1>

                <ul>
                    <li><a href="/hr/admin/worktype">근무형태</a></li>
                </ul>




            </x-theme-main>
            <x-theme-footer></x-theme-footer>
        </div>

    </div>
</x-theme>


{{--



        <x-row>
            <x-col-3>직원</x-col-3>
            <x-col-3>국가</x-col-3>
            <x-col-3>직급</x-col-3>
            <x-col-3>분과</x-col-3>
        </x-row>


        <x-row>
            <x-col-4>
                <x-card>
                    <x-card-header>
                        직급분포
                    </x-card-header>
                    <x-card-body>
                        <div class="chart chart-sm">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chartjs-doughnut" width="667" height="250"
                                style="display: block; width: 667px; height: 250px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                // Doughnut chart
                                new Chart(document.getElementById("chartjs-doughnut"), {
                                    type: "doughnut",
                                    data: {
                                        labels: ["Other","","",""

                                        ],
                                        datasets: [{
                                            data: [260, 125, 54, 146],
                                            backgroundColor: [
                                                window.theme.primary,
                                                window.theme.success,
                                                window.theme.warning,
                                                "#dee2e6"
                                            ],
                                            borderColor: "transparent"
                                        }]
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        cutoutPercentage: 65,
                                        legend: {
                                            display: false
                                        }
                                    }
                                });
                            });
                        </script>
                    </x-card-body>

                </x-card>
            </x-col-4>
            <x-col-8>
                <x-card>
                    <x-card-header>
                        직원수
                    </x-card-header>
                    <x-card-body>
                        <div class="chart">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="chartjs-line" style="display: block; width: 667px; height: 300px;" width="667" height="300"
                                class="chartjs-render-monitor">
                            </canvas>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                // Line chart
                                new Chart(document.getElementById("chartjs-line"), {
                                    type: "line",
                                    data: {
                                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                        datasets: [{
                                            label: "Sales ($)",
                                            fill: true,
                                            backgroundColor: "transparent",
                                            borderColor: window.theme.primary,
                                            data: [2115, 1562, 1584, 1892, 1487, 2223, 2966, 2448, 2905, 3838, 2917, 3327]
                                        }, {
                                            label: "Orders",
                                            fill: true,
                                            backgroundColor: "transparent",
                                            borderColor: "#adb5bd",
                                            borderDash: [4, 4],
                                            data: [958, 724, 629, 883, 915, 1214, 1476, 1212, 1554, 2128, 1466, 1827]
                                        }]
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                        legend: {
                                            display: false
                                        },
                                        tooltips: {
                                            intersect: false
                                        },
                                        hover: {
                                            intersect: true
                                        },
                                        plugins: {
                                            filler: {
                                                propagate: false
                                            }
                                        },
                                        scales: {
                                            xAxes: [{
                                                reverse: true,
                                                gridLines: {
                                                    color: "rgba(0,0,0,0.05)"
                                                }
                                            }],
                                            yAxes: [{
                                                ticks: {
                                                    stepSize: 500
                                                },
                                                display: true,
                                                borderDash: [5, 5],
                                                gridLines: {
                                                    color: "rgba(0,0,0,0)",
                                                    fontColor: "#fff"
                                                }
                                            }]
                                        }
                                    }
                                });
                            });
                        </script>
                    </x-card-body>
                </x-card>
            </x-col-8>
        </x-row> --}}

