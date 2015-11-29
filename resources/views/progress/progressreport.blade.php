@extends('master_old')

@section('title', 'รายงานความก้าวหน้าและประเมินผลแผนปฏิบัติการ อผม.')

@section('content')

    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12">
            <h2>
                <p class="header">รายงาน<span class="header2">ความก้าวหน้าและประเมินผลแผนปฏิบัติการ อผม.<small> (ประจำเดือน)</small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <ul>
                <li><h3>มกราคม</h3></li>
                <li><h3>กุมภาพันธ์</h3></li>
                <li><h3>มีนาคม</h3></li>
                <li><h3>เมษายน</h3></li>
                <li><h3>พฤษภาคม</h3></li>
            </ul>
        </div>
    </div>


    @include('footer')

@endsection