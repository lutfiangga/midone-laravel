(function () {
    "use strict";

    // Chart
    if ($(".simple-line-chart-1").length) {
        $(".simple-line-chart-1").each(function () {
            let ctx = $(this)[0].getContext("2d");
            let myChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [
                        {
                            label: "# of Votes",
                            data:
                                $(this).data("random") !== undefined
                                    ? helper.randomNumbers(0, 5, 12)
                                    : [
                                          0, 200, 250, 200, 500, 450, 850, 1050,
                                          950, 1100, 900, 1200,
                                      ],
                            borderWidth: 2,
                            borderColor:
                                $(this).data("line-color") !== undefined
                                    ? $(this).data("line-color")
                                    : getColor("primary", 0.8),
                            backgroundColor: "transparent",
                            pointBorderColor: "transparent",
                            tension: 0.4,
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                display: false,
                            },
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                        },
                        y: {
                            ticks: {
                                display: false,
                            },
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                        },
                    },
                },
            });
        });
    }
})();
