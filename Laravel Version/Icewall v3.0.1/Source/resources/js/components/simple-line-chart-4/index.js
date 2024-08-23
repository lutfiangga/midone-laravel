(function () {
    "use strict";

    // Chart
    if ($(".simple-line-chart-4").length) {
        let ctx = $(".simple-line-chart-4")[0].getContext("2d");
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
                        data: [
                            0, 200, 250, 200, 700, 550, 650, 1050, 950, 1100,
                            900, 1200,
                        ],
                        borderWidth: 2,
                        borderColor: getColor("primary", 0.8),
                        backgroundColor: "transparent",
                        pointBorderColor: "transparent",
                        tension: 0.4,
                    },
                    {
                        label: "# of Votes",
                        data: [
                            0, 300, 400, 560, 320, 600, 720, 850, 690, 805,
                            1200, 1010,
                        ],
                        borderWidth: 2,
                        borderDash: [2, 2],
                        borderColor: $("html").hasClass("dark")
                            ? getColor("darkmode.100")
                            : getColor("slate.400"),
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
    }
})();
