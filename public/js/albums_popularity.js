// http://code.highcharts.com/zips/Highcharts-4.0.1.zip

function format_chart_data(data) {
    var chart_data = [];
    for (var i = 0; i < data.length; i++) {
        chart_data.push([data[i].nombre, parseFloat(data[i].porcentaje)]);
    }
    return chart_data;
}

function refresh(datagraphic, titulo) {
    $('#albums_popularity').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: titulo
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: format_chart_data(datagraphic)
        }]
    });
}	