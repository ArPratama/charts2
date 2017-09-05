function constructGaugeChart(){
    var gaugeOptions = {

        chart: {
            type: 'solidgauge',
            height:260

        },
        
        credits: { enabled: false },

        title: null,

        pane: {
            center: ['50%', '50%'], // Gauge horizhontal, vertical position
            size: '10%',
            startAngle: -125,
            endAngle: 125,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '75%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.1, 'ff9800'], // green
                [0.5, '#ff9800'], // yellow
                [0.9, '#ff9800'] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -75 // Title label position
            },
            labels: {
                y: 16 // Min & Max value label Position
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: -75, // Inner label position
                    borderWidth: 0,
                    useHTML: true
                },
                startAngle: -125,
                endAngle: 125,
                innerRadius: '75%'
            }
        }
    };

    return gaugeOptions;
}

function constructGroupedColumn(){
    var stackedColumnOptions = {

        chart: {
            type: 'column'
        },
        
        credits: { enabled: false },

        title: {
            text: null
        },

        xAxis: {
            crosshair: true
        },

        yAxis: {
            title: {
                text: ''
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },

        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        }
    };

    return stackedColumnOptions;
}

function constructLineChart(){
    var lineOptions = {

        chart: {
            type: 'line'
        },
        
        credits: { enabled: false },

        legend: {
            enabled: false
        },

        yAxis: {
            labels: {
                enabled: false
            },
            title: {
                text: ''
            }
        },

        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        }
    };

    return lineOptions;
}