function basicColumnChart(columnsData = [], element, categories) {

    /*total = [], processing = [], closed = [], overdue = [], loc = []*/
    let systemStaticsColors = ["#5671f0", "#11ca6d", "#CED4DC", "#f35d5d"];

    (dataColors = $('#' + element).data("systemStaticsColors")) && (systemStaticsColors = dataColors.split(","));
    let options = {
        chart: {
            height: 380,
            type: "bar",
            toolbar: {show: !0}
        },
        //bars properties
        plotOptions: {
            bar: {
                horizontal: !1,
                endingShape: "rounded",
                columnWidth: "35%",
            }
        },
        //number on the bars
        dataLabels: {
            enabled: !0,
            background: {enabled: true},
            style: {
                fontSize: '12px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                fontWeight: 'bold',
                colors: ['rgba(59,60,61,0.68)'],
            }
        },
        //properties of bars borders
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"],
        },
        colors: systemStaticsColors,
        //map key names and values - x-axis
        series: columnsData,
        //labels of x-axis
        xaxis: {
            categories: categories,
            axisBorder: {show: !0,},
            axisTicks: {show: !0,},
            crosshairs: {
                show: !0,
                width: 'tickWidth',
            }
        },
        yaxis: {
            axisBorder: {show: !0,},
            axisTicks: {show: !0,}
        },
        //space between map key and ...
        legend: {
            offsetY: 5,
            fontSize: 13,
            tooltipHoverFormatter: function (seriesName, opts) {
                return seriesName + ' - <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
            },
            itemMargin: {horizontal: 10},
        },
        fill: {opacity: 1},
        grid: {
            show: !0,
            //background colors behind the bars
            row: {
                colors: ["transparent", "transparent"],
                opacity: 0.2,
            },
            borderColor: '#90A4AE',
            yaxis: {
                lines: {show: !0,}
            },
            //space between the key map and x-axis labels
            padding: {
                bottom: 15,
                left: 30,
            }
        },
        tooltip: {
            y: {
                formatter: function (e) {
                    return /*"$ " +*/ e + " reports"
                }
            },
            shared: !0,
            followCursor: !0,
        },
        labels: [''],
    };

    (basicStageBasedChart = new ApexCharts(document.querySelector('#' + element), options)).render();

}

function updateStageBasedChartReports(reports, chartData = []) {

    let toBeRemoved = [];
    let basicStageBasedTotal = chartData['total'];
    let basicStageBasedProcessing = chartData['processing'];
    let basicStageBasedClosed = chartData['closed'];
    let basicStageBasedOverdue = chartData['overdue'];

    $('#stage-based-checkboxes-container input').each(function () {
        if (!$(this).is(':checked')) {
            toBeRemoved.push($(this).val())
        }
    })
    toBeRemoved.reverse();
    for (let i = 0; i < toBeRemoved.length; i++) {
        reports.splice(toBeRemoved[i], 1);
        basicStageBasedTotal.splice(toBeRemoved[i], 1);
        basicStageBasedProcessing.splice(toBeRemoved[i], 1);
        basicStageBasedClosed.splice(toBeRemoved[i], 1);
        basicStageBasedOverdue.splice(toBeRemoved[i], 1);
    }

    let basicStageBasedChartValues =
        [
            {name: 'Total', data: basicStageBasedTotal},
            {name: 'Processing', data: basicStageBasedProcessing},
            {name: 'Closed', data: basicStageBasedClosed},
            {name: 'Overdue', data: basicStageBasedOverdue},
        ];

    basicStageBasedChart.updateOptions({
        series: basicStageBasedChartValues,
        xaxis: {categories: reports},
    })
}
