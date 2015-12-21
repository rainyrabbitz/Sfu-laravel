@extends('master')

@section('title', 'คำสั่งแต่งตั้งคณะทำงานและวางแผน ประจำฝ่ายการผลิตเหมืองแม่เมาะ')

@section('content')

{{--if has error(from add comemandController)--}}
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

    <div class="container-fluid">

        <div class="col-md-12 text-center">
            <h2>
                <p style="color: #5c7cef">เพิ่มไฟล์ของ
                    <span class="header2"> คำสั่งแต่งตั้งคณะทำงานและวางแผน ประจำฝ่ายการผลิตเหมืองแม่เมาะ</span></p>
            </h2>
        </div>
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="height: 2px; background-color: #c0c0c0; margin-bottom: 50px"></div>
        </div>
        <form class="col-md-offset-3 col-md-6 text-center" action="/commands" method="post" enctype="multipart/form-data">
            {{--always required csrf_token--}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="form-group">
                <input type="file" name="file" class="form-control input-lg">
            </div>

            <div class="form-group">
                <input type="submit" value="เพิ่มประกาศ" class="btn btn-default">
            </div>
        </form>

    </div>


    @include('footer')

@endsection