@extends('master_old')

@section('title', 'ผลความก้าวหน้าของนโยบายและแผนการดำเนินงานของ อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">ผลความก้าวหน้า<span class="header2">ของนโยบายและแผนการดำเนินงานของ อผม.<small>(ประจำเดือน)</small></span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-3"></div>
            <div class="col-md-6 panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ประจำปี 2557</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ประจำปี 2558</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('footer')

@endsection
