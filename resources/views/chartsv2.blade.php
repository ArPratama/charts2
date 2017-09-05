<html>
<head>
<title>Charts V.2</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/stock/highstock.js"></script>

        <!-- Scripts -->
        <script src={{asset("js/jquery-3.0.0.min.js")}}></script>
        <script src={{asset("js/tether-1.2.0.min.js")}}></script>
        <script src={{asset("js/bootstrap.min.js")}}></script>
        <script src={{asset("js/bootstrap-select.min.js")}}></script>



</head>
<body>
<div class="text-right">                           
    <select id="month_filter" class="btn custom-select">
            <option value=1>January</option>
            <option value=2>February</option>
            <option value=3>March</option>
            <option value=4>Aapril</option>
            <option value=5>May</option>
            <option value=6>June</option>
            <option value=7>July</option>
            <option value=8>August</option>
            <option value=9>September</option>
            <option value=10>October</option>
            <option value=11>November</option>
            <option value=12>December</option>
    </select>
        <select id="year_filter" class="btn custom-select">
            <option value=1>2017</option>
            <option value=2>2018</option>
 </select>
    <div class="btn btn-default">Submit</div>
</div>
<div class="row">
<div class="col-md-12">
    <div id="container" style="width: 80%; height: 400px; margin: 100 auto"></div>
</div>

<table>
<tr>
@foreach($data as $chartsdata)
<td>{{$chartsdata->data}}</td>
<td>{{$chartsdata->date}}</td>
@endforeach
</tr>
</table>
</body>
</html>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'line',
        zoomType: 'x',
        backgroundColor:'#25455e'
    },
    navigation: {
                buttonOptions: 
                {
                    enabled: false
                }
            },
    title: {
        text: 'Data Installer APK January 2017 <br> Total :',
        style: {
            color:'#fff'
        },
    },
    subtitle: {
        text: null
    },
  credits: {
            enabled: true,
            position: {
                align: 'right',
                x: -10,
                verticalAlign: 'bottom',
                y: -5
            },
            href: "",
            text: ""
        },
    xAxis: {
        categories: [@foreach($data as $element) '{{$element->date}}' , @endforeach],
        //min: 0,
        //max: 9,
        labels: {
            style:{
                color:'#fff'
            }
        },
    },
    yAxis: {
        min: 0,
        labels:{
            style:{
                color:'#fff'
            },
        },
        title: {
            text: null
        }
    },
    plotOptions: {
        series: {
            lineColor: '#fff',
            fillColor: '#fff'
        },
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: true
        }
    },
    series: [{
        name: 'total',
        showInLegend: false,
        color:'#638199',
        data: [@foreach($data as $element) {{$element->data}} , @endforeach]
    }],
    marker: {
                              lineWidth: 2,
                              lineColor: 'black',
                              fillColor: 'black',           
                              radius: 3,
                          },    
    // scrollbar: {
    //             enabled: true,
    //             barBackgroundColor: 'gray',
    //             barBorderRadius: 7,
    //             barBorderWidth: 0,
    //             buttonBackgroundColor: 'gray',
    //             buttonBorderWidth: 0,
    //             buttonArrowColor: 'yellow',
    //             buttonBorderRadius: 7,
    //             rifleColor: 'yellow',
    //             trackBackgroundColor: 'white',
    //             trackBorderWidth: 1,
    //             trackBorderColor: 'silver',
    //             trackBorderRadius: 7
    //         }
});

</script>