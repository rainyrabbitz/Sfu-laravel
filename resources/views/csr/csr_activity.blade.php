@extends('master')

@section('title', 'กิจกรรมกองจิตอาสา')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">กิจกรรม<span class="header2">กองจิตอาสา</span></p>
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
                            @foreach($csrActivities as $riskProgress)
                                    @if($riskProgress->year == $year)
                                        <div class="panel-footer">
                                            <a href="uploads/Csr-activities/{{$year}}/{{$riskProgress->file_path}}" target="_blank">{{$riskProgress->month}}</a>
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
