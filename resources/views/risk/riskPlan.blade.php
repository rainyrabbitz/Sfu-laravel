@extends('master_old')

@section('title', 'แผนการประเมินผลการบริหารความเสี่ยงและการควบคุมภายใน อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12">
            <h2>
                <p class="header">แผนการประเมินผล<span class="header2">การบริหารความเสี่ยงและการควบคุมภายใน อผม.</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd;"></div>

        <div class="col-md-12 text-center" style="margin-top: 80px; margin-bottom: 30%">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">เลือกปี</a>
                            </h2>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">ประจำปี 2558</div>
                            <div class="panel-footer">ประจำปี 2558</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('footer')

@endsection
