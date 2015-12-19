@extends('master')

@section('title', 'รายงานความก้าวหน้าแผนบริหารความเสี่ยงและควบคุมภายใน อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">รายงาน<span class="header2">ความก้าวหน้าแผนบริหารความเสี่ยงและควบคุมภายใน อผม. ประจำเดือน</span></p>
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
                            @foreach($riskProgresses as $riskProgress)
                                @foreach($riskProgress as $aProgress)
                                    @if($aProgress->year == $year)
                                        <div class="panel-footer">
                                            <a href="uploads/Progresses/{{$year}}/{{$aProgress->file_path}}">{{$aProgress->month}}</a>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


    @include('footer')

@endsection
