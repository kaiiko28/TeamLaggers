<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.js')}}">
    <link rel="stylesheet" href="{{ asset('/mdb/css/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>
<body>
    @yield('content')
    <img src="{{asset('/img/map.png')}}" alt="">
</body>
</html>