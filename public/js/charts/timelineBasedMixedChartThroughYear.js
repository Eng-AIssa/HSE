function stageBasedMixedChartThroughYear(element, labels, mixedData) {
    colors = ["#6658dd", "#1abc9c", "#f672a7"];
    (dataColors = $("#" + element).data("colors")) && (colors = dataColors.split(","));
    options = {
        chart: {
            height: 380,
            type: "line",
            toolbar: {
                show: !0,
                tools: {
                    download: !0,
                    zoom: !0,
                    reset: !0,
                    selection: !1,
                    zoomin: !1,
                    zoomout: !1,
                    pan: !1,
                },
            },
        },
        stroke: {
            width: [0, 2, 4],
            curve: "smooth",
        },
        plotOptions: {bar: {columnWidth: "50%"}},
        colors: colors,
        series: [
            {name: "Inprogress", type: "column", data: mixedData['processing']},
            {name: "Completed", type: "area", data: mixedData['closed']},
            {name: "Overdue", type: "line", data: mixedData['overdue']}
        ],
        fill: {
            opacity: [.85, .25, 1],
            gradient: {
                inverseColors: !1,
                shade: "light",
                type: "vertical",
                opacityFrom: .85,
                opacityTo: .55,
                stops: [0, 100, 100, 100]
            }
        },
        labels: labels,
        markers: {size: 0},
        legend: {
            offsetY: 7,
            height: 20
        },
        xaxis: {type: "category"},
        yaxis: {
            axisBorder: {show: !0,},
            axisTicks: {show: !0,},
            title: {text: "Reports #"}
        },
        tooltip: {
            shared: !0, intersect: !1, y: {
                formatter: function (e) {
                    return void 0 !== e ? e.toFixed(0) + " points" : e
                }
            }
        },
        grid: {
            borderColor: "#f1f3fa",
            padding: {
                left: 20,
                bottom: 10
            }
        }
    };
    (stageBasedMixedChartThroughYear = new ApexCharts(document.querySelector("#" + element), options)).render();
}
