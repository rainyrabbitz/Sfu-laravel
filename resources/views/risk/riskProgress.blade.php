@extends('master_old')

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
            <div class="col-md-3"></div>
            <div class="col-md-6 panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ประจำปี 2558</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">มกราคม</div>
                        <div class="panel-body">กุมภาพันธ์</div>
                        <div class="panel-body">มีนาคม</div>
                        <div class="panel-body">เมษายน</div>
                        <div class="panel-body">พฤษภาคม</div>
                        <div class="panel-body">มิถุนายน</div>
                        <div class="panel-body">กรกฎาคม</div>
                        <div class="panel-body">สิงหาคม</div>
                        <div class="panel-body">กันยายน</div>
                        <div class="panel-body">ตุลาคม</div>
                        <div class="panel-body">พฤศจิกายน</div>
                        <div class="panel-footer">ธันวาคม</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ประจำปี 2559</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">มกราคม</div>
                        <div class="panel-body">กุมภาพันธ์</div>
                        <div class="panel-body">มีนาคม</div>
                        <div class="panel-body">เมษายน</div>
                        <div class="panel-body">พฤษภาคม</div>
                        <div class="panel-body">มิถุนายน</div>
                        <div class="panel-body">กรกฎาคม</div>
                        <div class="panel-body">สิงหาคม</div>
                        <div class="panel-body">กันยายน</div>
                        <div class="panel-body">ตุลาคม</div>
                        <div class="panel-body">พฤศจิกายน</div>
                        <div class="panel-footer">ธันวาคม</div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('footer')

@endsection
