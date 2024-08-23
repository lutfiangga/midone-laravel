(function () {
    "use strict";

    // Chart
    if ($(".stacked-bar-chart-1").length) {
        let ctx = $(".stacked-bar-chart-1")[0].getContext("2d");
        let myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [...Array(16).keys()],
                datasets: [
                    {
                        label: "Html Template",
                        barPercentage: 0.5,
                        barThickness: 6,
                        maxBarThickness: 8,
                        minBarLength: 2,
                        backgroundColor: getColor("primary", 0.8),
                        data: helper.randomNumbers(-100, 100, 16),
                    },
                    {
                        label: "VueJs Template",
                        barPercentage: 0.5,
                        barThickness: 6,
                        maxBarThickness: 8,
                        minBarLength: 2,
                        backgroundColor: $("html").hasClass("dark")
                            ? getColor("darkmode.200")
                            : getColor("slate.300"),
                        data: helper.randomNumbers(-100, 100, 16),
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
                        stacked: true,
                        ticks: {
                            font: {
                                size: "12",
                            },
                            color: getColor("slate.500", 0.8),
                        },
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                    },
                    y: {
                        stacked: true,
                        ticks: {
                            font: {
                                size: "12",
                            },
                            color: getColor("slate.500", 0.8),
                            callback: function (value, index, values) {
                                return "$" + value;
                            },
                        },
                        grid: {
                            color: $("html").hasClass("dark")
                                ? getColor("slate.500", 0.3)
                                : getColor("slate.300"),
                            borderDash: [2, 2],
                            drawBorder: false,
                        },
                    },
                },
            },
        });
    }
})();
