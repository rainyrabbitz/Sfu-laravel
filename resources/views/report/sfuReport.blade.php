@extends('master')

@section('title', 'รายงานการประชุม ควฝผ-อผม.')


@section('content')

    <div class="container-fluid" style="margin-bottom: 30%">
                <div class="col-md-12">
                    <h2>
                        <p class="header">รายงาน<span class="header2">การประชุม ควฝผ-อผม.</span></p>
                    </h2>
                </div>
                <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
                <div class="col-md-7" style="margin-top: 30px">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
        <div class="col-md-5 panel-group" id="accordion">
            @foreach($years as $year)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">ประจำปี {{$year}}</a>
                        </h4>
                    </div>
                    <div id="collapse{{$year}}" class="panel-collapse collapse">
                        @foreach($sfuReports as $sfuReport)
                            @if($sfuReport->year == $year)
                                <div class="panel-footer">
                                    <a href="uploads/Sfu-reports/{{$year}}/{{$sfuReport->file_path}}" target="_blank">{{$sfuReport->no}}</a>
                                </div>
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