// http://code.highcharts.com/zips/Highcharts-4.0.1.zip

function parseArray(data) {
    var array = [];
    for (var i = 0; i < data.length; i++) {
        array.push([data[i].nombre, parseFloat(data[i].porcentaje)]);
    }
    return array;
}

function makeGraphic(datagraphic, titulo, type) {
    $('#graphic').empty();
    switch(type) {
        default:
        case 1:
            pieChart(datagraphic, titulo);
            break;
        case 2:
            circleDonut(datagraphic, titulo);
            break;
        case 3:            
            semiCircleDonut(datagraphic, titulo);
    }
}

function pieChart(datagraphic, titulo) {
    $('#graphic').highcharts({
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
            data: parseArray(datagraphic)
        }]
    });
}

function circleDonut(datagraphic, titulo) {
    $('#graphic').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: titulo,
            align: 'center',
            verticalAlign: 'middle',
            y: 0,
            x: -15
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
            innerSize: '70%',
            data: parseArray(datagraphic)
        }]
    });
}

function semiCircleDonut(datagraphic, titulo) {
    $('#graphic').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: titulo,
            align: 'center',
            verticalAlign: 'middle',
            y: -120
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
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            innerSize: '50%',
            data: parseArray(datagraphic)
        }]
    });
}