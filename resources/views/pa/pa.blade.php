@extends('master')

@section('title', 'ข้อปฏิบัติการประเมินผลการดำเนินงานของ อผม. (PA อผม.)')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">ข้อปฏิบัติ<span class="header2">การประเมินผลการดำเนินงานของ อผม.<small>  (PA อผม. รูปเล่ม)</small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-3"></div>
            <div class="col-md-6 panel-group" id="accordion">
                @foreach($performances as $performance)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="/uploads/Performances/Performance-{{$performance->year}}/{{$performance->file_path}}">ประจำปี {{$performance->year}}</a>
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>


    @include('footer')

@endsection
