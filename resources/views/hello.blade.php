<html>
<head>
<title>
New Blade
</title>

<style>
html, body{
    height:100%;
}

body{
    margin:0;
    padding:0;
    width:100%;
    display:table;
    font-weight:100;
    font-family: 'Lato';
}
.container{

    text-align: center;
    display : table-cell;
    vertical-align:middle;
}

.content{
    text-align:center;
    display:inline-block;
}

.title{
    font-size:96px;
}
</style>
</head>
<body>
<div class="container">
    <div class="content">
    <table border="1">
        <tr>
            <td>Data</td>
    </tr>
    @foreach($view as $db)
    <tr>
    <td>{{$db->id}}</td>
    <td>{{$db->isi}}</td>
    <td>{{$db->sample}}</td>
    </tr>

    @endforeach
    </table>
       <div class="title">Halo!</div>
    </div>
</div>
</body
</html>