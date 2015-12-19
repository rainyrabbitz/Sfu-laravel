@extends('master')

@section('title', 'รายงานผลการดำเนินงาน อผม. (OPR)')

@section('content')

    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12">
            <h2>
                <p class="header">รายงาน<span class="header2">ผลการดำเนินงาน อผม.<small> (Organization Performance
                            Report: OPR)
                        </small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
        <div class="col-md-7" style="margin-top: 30px">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5 form-inline">
            <h3> เลือกปี</h3>
        </div>
        <div class="col-sm-3">
            <select class="form-control">
                <option>2558</option>
                <option>2559</option>
            </select>
        </div>
        <div class="col-md-5">
            <ul>
                <li><h4>6 เดือน</h4></li>
                <li><h4>สิ้นปี</h4></li>
            </ul>
        </div>
    </div>


    @include('footer')

@endsection