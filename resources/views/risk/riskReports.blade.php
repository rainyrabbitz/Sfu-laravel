@extends('master')

@section('title', 'เอกสารรายงาน')

@section('content')

    {{--check session is authorized--}}
    @if(!Session::has('isAuthorized'))
        <script type="text/javascript">
            window.location = "{{ url('/riskreport/authorize') }}";//here double curly bracket
        </script>
    @endif


    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12 well">
            <h2>
                <p class="header">เอกสาร<span class="header2">รายงาน</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd;"></div>
        <div class="col-md-12" style="margin-bottom: 70px"><h3>การควบคุมภายในและการบริหารความเสี่ยง อผม.</h3></div>

        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-plan" class="btn btn-secondary btn-lg btn-block" style="background-color: #d7c3d9; color: #666666">แผนการประเมินผลการบริหารความเสี่ยงและการควบคุมภายใน อผม.</a>
            </div>
        </div>
        {{--<div class="col-md-12" style="height: 1px; background-color: #31b0d5; margin-bottom: 30px"></div>--}}
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-progress" class="btn btn-secondary btn-lg btn-block" style="background-color: #d7c3d9; color: #666666">รายงานความก้าวหน้าแผนบริหารความเสี่ยงและควบคุมภายใน อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-management" class="btn btn-secondary btn-lg btn-block" style="background-color: #d7c3d9; color: #666666">รายงานบริหารความเสี่ยง อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/control-report" class="btn btn-secondary btn-lg btn-block" style="background-color: #d7c3d9; color: #666666">รายงานการควบคุมภายใน อผม. (สิ้นปี)</a>
            </div>
        </div>

        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/meetingReport" class="btn btn-secondary btn-lg btn-block" style="background-color: #d7c3d9; color: #666666">รายงานการประชุมคณะกรรมการ</a>
            </div>
        </div>



    </div>

    @include('footer')

@endsection
