@extends('master')

@section('title', 'รายงานการบริหารความเสี่ยง อผม.')

@section('content')



    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">รายงาน<span class="header2">การบริหารความเสี่ยง อผม.</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-offset-3 col-md-6 panel-group" id="accordion">
                @foreach($years as $year)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">ประจำปี {{$year}}</a>
                            </h4>
                        </div>
                        <div id="collapse{{$year}}" class="panel-collapse collapse">
                            @foreach($riskManagements as $riskManagement)
                                @if($riskManagement->year == $year)
                                    @if($riskManagement->period == 1)
                                        <div class="panel-body">
                                            <a href="/uploads/Risk-management/{{$year}}/1/{{$riskManagement->file_path}}">ไตมาสที่ 1</a>
                                        </div>
                                    @elseif($riskManagement->period == 2)
                                        <div class="panel-body">
                                            <a href="/uploads/Risk-management/{{$year}}/2/{{$riskManagement->file_path}}">ไตมาสที่ 2</a>
                                        </div>
                                    @elseif($riskManagement->period == 3)
                                        <div class="panel-body">
                                            <a href="/uploads/Risk-management/{{$year}}/2/{{$riskManagement->file_path}}">ไตมาสที่ 3</a>
                                        </div>
                                    @elseif($riskManagement->period == 4)
                                        <div class="panel-body">
                                            <a href="/uploads/Risk-management/{{$year}}/2/{{$riskManagement->file_path}}">ไตมาสที่ 4</a>
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
