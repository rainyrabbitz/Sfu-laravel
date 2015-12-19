@extends('master')

@section('title', 'เพิ่มไฟล์')

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

    <div class="container">
            <div class="col-md-12 text-center">
                <h2>เพิ่มไฟล์ของ ผลความก้าวหน้าของนโยบาย</h2>
            </div>

            <form class="col-md-offset-3 col-md-6 text-center" action="/risk-progress" method="post" enctype="multipart/form-data">
                {{--always required csrf_token--}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <input type="file" name="file" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <select class="form-control input-lg" name="year">
                        <option value="2555">2555</option>
                        <option value="2556">2556</option>
                        <option value="2557">2557</option>
                        <option value="2558">2558</option>
                        <option value="2559">2559</option>
                        <option value="2560">2560</option>
                        <option value="2561">2561</option>
                        <option value="2562">2562</option>
                        <option value="2563">2563</option>
                        <option value="2564">2564</option>
                        <option value="2565">2565</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control input-lg" name="month">
                        <option value="01">มกราคม</option>
                        <option value="02">กุมภาพันธ์</option>
                        <option value="03">มีนาคม</option>
                        <option value="04">เมษายน</option>
                        <option value="05">พฤษภาคม</option>
                        <option value="06">มิถุนายน</option>
                        <option value="07">กรกฎาคม</option>
                        <option value="08">สิงหาคม</option>
                        <option value="09">กันยายน</option>
                        <option value="10">ตุลาคม</option>
                        <option value="11">พฤศจิกายน</option>
                        <option value="12">ธันวาคม</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="เพิ่มประกาศ" class="btn btn-default">
                </div>
            </form>
    </div>


    @include('footer')

@endsection