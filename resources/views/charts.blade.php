<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>
Highcharts.chart('container2', {
            navigation: {
                buttonOptions: 
                    {
                        enabled: false
                    }
                },
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: null
            },
            subtitle: {
                text: null
            },
            plotOptions: {
                column:{
                    colorByPoint: true
                },
                series:{
                    groupPadding:0.1
                },
            },
            xAxis: [{
                categories: data.categories,
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}%',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Index Complaint',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'No of Remedy Ticket',
                    style: {
                        color: '#333'
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color:'#333'
                    }
                },
                opposite: true
            }],
            tooltip: {
                series: {
                    animation: false
                },
                shared: true
            },           
            series: [{
                showInLegend: false, 
                name: 'No of Remedy Ticket',
                type: 'column',
                yAxis: 1,
                data: data.columnSeriesData,
                colors: [
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#ffc200', 
                                 '#2776ea'
                                 ], 
                    
            }, {
                showInLegend:false, 
                name: 'Index Complaint',
                type: 'spline',
                color:'transparent',
                data: data.lineSeriesData,    
                 marker: {
                              lineWidth: 2,
                              lineColor: 'red',
                              fillColor: 'red',           
                              radius: 5,
                          },            
            }]
        });
}

</script>