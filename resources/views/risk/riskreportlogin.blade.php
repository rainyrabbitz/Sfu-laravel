@extends('master_old')

@section('title', 'เอกสารรายงาน')

@section('content')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container" style="margin-bottom: 30%">
        <div class="col-lg-12">
            <h2>
                <p class="header">เอกสาร<span class="header2">รายงาน</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd;"></div>
        <div class="col-md-12" style="margin-bottom: 70px"><h3>การควบคุมภายในและการบริหารความเสี่ยง อผม.</h3></div>

        <form class="col-md-12" action="/riskreport/checkpassword" method="post">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="form-group col-md-6 text-center">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="form-group col-md-6 text-center">
                <button class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
        </div>
        </form>
    </div>


    @include('footer')

@endsection