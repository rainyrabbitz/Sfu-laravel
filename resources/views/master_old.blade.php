<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{!! asset('css/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('images/icon1.png') !!}" rel="shortcut icon" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />

    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('css/bootstrap/js/bootstrap.min.js') !!}"></script>

</head>
<body>

<!-- Header -->
<div class="container-fluid" style="background-color: #dcdcdc">
    <div class="row">
        <img class="col-md-2" src="{!! asset('images/LogoOnly.gif') !!}" style="max-width: 180px">
        <div class="col-md-10 titlehead text-center">
            <h1 class="col-md-12" style="color: #777777">คณะทำงานวิชาการและวางแผนประจำฝ่ายผลิตเหมืองแม่เมาะ</h1>
            <h2 class="col-md-12" style="color: #777777">(ควผฝ - อผม.)</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
        <div class="col-md-3"></div>
        <div class="col-md-9">

            <div class="row">
                <img class="col-md-2" src="{!! asset('images/LogoOnly.gif') !!}" style="max-width: 180px">

                <div class="col-md-10 titlehead text-center" style="margin-bottom: 2%">
                    <h1 class="col-md-12" style="color: #737373; font-size: 50px">คณะทำงานวิชาการและวางแผน</h1><h1>ประจำฝ่ายผลิตเหมืองแม่เมาะ</h1>
                    <h2 class="col-md-12" style="color: #777777">(ควผฝ - อผม.)</h2>
                </div>
            </div>
            <div class="col-md-12" style="height: 4px; background-color: #9479bd; margin-bottom: 20px"></div>

        </div>
    </div>
</div>


@include('menu')

@yield('content')

</body>
</html>