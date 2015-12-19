<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{!! asset('css/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/side.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('images/icon1.png') !!}" rel="shortcut icon" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png"/>

    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('css/bootstrap/js/bootstrap.min.js') !!}"></script>

</head>
<body>

<div class="container-fluid" style="background-color: #bce8f1">
    <div class="row">
        <img class="col-md-2" src="{!! asset('images/LogoOnly.gif') !!}" style="max-width: 180px">
        <div class="col-md-10 titlehead text-center">
            <h1 class="col-md-12" style="color: #777777">คณะทำงานวิชาการและวางแผน ประจำฝ่ายผลิตเหมืองแม่เมาะ</h1>
            <h2 class="col-md-12" style="color: #777777">(ควผฝ - อผม.)</h2>
        </div>
    </div>
</div>
@include('menu')
<!-- Header -->

    @yield('content')


</body>
</html>