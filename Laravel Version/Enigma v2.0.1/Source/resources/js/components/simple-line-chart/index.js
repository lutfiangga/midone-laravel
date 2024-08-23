(function () {
    "use strict";

    // Chart
    if ($(".simple-line-chart").length) {
        $(".simple-line-chart").each(function () {
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
                            data: helper.randomNumbers(0, 5, 12),
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
