@extends('master_old')

@section('title', 'ติดตามความก้าวหน้าการประเมินผลการดำเนินงานของ อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">ติดตาม<span class="header2">ความก้าวหน้าการประเมินผลการดำเนินงานของ อผม. เทียบกับเกณฑ์</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-3"></div>
            <div class="col-md-6 panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ประจำปี 2558</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">6 เดือน</div>
                        <div class="panel-body">สิ้นปี</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ประจำปี 2559</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">6 เดือน</div>
                        <div class="panel-body">สิ้นปี</div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('footer')

@endsection
