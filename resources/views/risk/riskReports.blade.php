@extends('master_old')

@section('title', 'เอกสารรายงาน')

@section('content')

    {{--check session is authorized--}}
    @if(!Session::has('isAuthorized'))
        <script type="text/javascript">
            window.location = "{{ url('/riskreport/authorize') }}";//here double curly bracket
        </script>
    @endif


    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12">
            <h2>
                <p class="header">เอกสาร<span class="header2">รายงาน</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd;"></div>
        <div class="col-md-12" style="margin-bottom: 70px"><h3>การควบคุมภายในและการบริหารความเสี่ยง อผม.</h3></div>

        <div class="col-md-12">
            <div class="panel text-center">
                <div class="panel-body" style="background-color: #FDEEF4">
                    <a href="/riskPlan" class="report-menu">แผนการประเมินผลการบริหารความเสี่ยงและการควบคุมภายใน อผม.</a>
                </div>
            </div>
        </div>

        {{--<div class="col-md-12" style="height: 1px; background-color: #31b0d5; margin-bottom: 30px"></div>--}}

        <div class="col-md-12">
            <div class="panel text-center">
                <div class="panel-body" style="background-color: #FDEEF4">
                    <a href="/riskProgress" class="report-menu">รายงานความก้าวหน้าแผนบริหารความเสี่ยงและควบคุมภายใน อผม. ประจำเดือน</a>
                </div>
            </div>
        </div>

        {{--<div class="col-md-12" style="height: 1px; background-color: #31b0d5; margin-bottom: 30px"></div>--}}

        <div class="col-md-12">
            <div class="panel text-center">
                <div class="panel-body" style="background-color: #FDEEF4">

                    <a href="/manageRisk" class="report-menu">รายงานบริหารความเสี่ยง อผม.</a>
                </div>
            </div>
        </div>

        {{--<div class="col-md-12" style="height: 1px; background-color: #31b0d5; margin-bottom: 30px"></div>--}}

        <div class="col-md-12">
            <div class="panel text-center">
                <div class="panel-body" style="background-color: #FDEEF4">

                    <a href="/control" class="report-menu">รายงานการควบคุมภายใน อผม. (สิ้นปี)</a>
                </div>
            </div>
        </div>

        {{--<div class="col-md-12" style="height: 1px; background-color: #31b0d5; margin-bottom: 30px"></div>--}}

        <div class="col-md-12">
            <div class="panel text-center">
                <div class="panel-body" style="background-color: #FDEEF4">
                    <a href="/meetingReport" class="report-menu">รายงานการประชุมคณะกรรมการ</a>
                </div>
            </div>
        </div>


    </div>

    @include('footer')

@endsection
