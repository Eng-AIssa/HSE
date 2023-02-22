function basicBarChart(data = [], element, categories) {

    let dynamicFunctionColors = ["#f35d5d", "#ced4dc", "#11ca6d", "#5671f0",];
    (dataColors = $('#' + element).data("dynamicFunctionColors")) && (dynamicFunctionColors = dataColors.split(","));
    let options = {
        legend: {
            show: !0,
            offsetY: 5,
            fontSize: 13,
            tooltipHoverFormatter: function (seriesName, opts) {
                return seriesName + ' - <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
            },
            onItemClick: {
                toggleDataSeries: !0,
            },
            onItemHover: {
                highlightDataSeries: !0,
            },
            itemMargin: {
                horizontal: 10,
            },
            /*offsetX: 40,*/
            inverseOrder: !0,
        },
        chart: {height: 380, type: "bar", toolbar: {show: !0}},
        plotOptions: {bar: {distributed: !0, horizontal: !0, barHeight: "20%"}},
        dataLabels: {enabled: !1},
        series: [{data: data}],
        colors: dynamicFunctionColors,
        xaxis: {categories: categories[0]},
        /*states: {hover: {filter: "none"}},*/
        grid: {padding: {bottom: 15}},
        tooltip: {
            y: {
                formatter: function (e) {
                    return e + " reports"
                },
                title: {
                    formatter: (seriesName) => '',
                },
            },
        }
    };

    (chart = new ApexCharts(document.querySelector('#' + element), options)).render();

}
