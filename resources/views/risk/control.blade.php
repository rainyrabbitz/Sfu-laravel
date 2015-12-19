@extends('master')

@section('title', 'รายงานการควบคุมภายใน อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">รายงาน<span class="header2">การควบคุมภายใน อผม. <small>(สิ้นปี)</small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-offset-3 col-md-6 panel-group" id="accordion">
                @foreach($years as $year)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                @foreach($controls as $control)
                                    @if($control->year == $year)
                                        <a href="/uploads/Control-reports/{{$control->file_path}}" target="_blank">ปี {{$year}}</a>
                                    @endif
                                @endforeach

                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


    @include('footer')

@endsection
