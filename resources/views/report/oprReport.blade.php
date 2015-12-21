@extends('master')

@section('title', 'รายงานผลการดำเนินงาน อผม. (OPR)')

@section('content')

    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12 well">
            <h2>
                <p class="header">รายงาน<span class="header2">ผลการดำเนินงาน อผม.<small> (Organization Performance
                            Report: OPR)
                        </small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
        <div class="col-md-7" style="margin-top: 30px">
            <a href="#">
                <img class="img-responsive img-rounded" src="images/5.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-5 text-center" style="margin-bottom: 30%">
            <div class="col-md-12 panel-group" id="accordion">
                @foreach($years as $year)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">ประจำปี {{$year}}</a>
                            </h4>
                        </div>
                        <div id="collapse{{$year}}" class="panel-collapse collapse">
                            @foreach($oprReports as $track)
                                @if($track->year == $year)
                                    @if($track->period == 1)
                                        <div class="panel-body">
                                            <a href="/uploads/Opr-reports/{{$year}}/1/{{$track->file_path}}" target="_blank">6 เดือน</a>
                                        </div>
                                    @elseif($track->period == 2)
                                        <div class="panel-body">
                                            <a href="/uploads/Opr-reports/{{$year}}/2/{{$track->file_path}}" target="_blank">สิ้นปี</a>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    @include('footer')

@endsection