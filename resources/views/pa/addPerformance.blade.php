@extends('master')

@section('title', 'ข้อปฏิบัติการประเมินผลการดำเนินงานของ อผม.')

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
            <h3>เพิ่มไฟล์ของ ข้อปฏิบัติการประเมินผลการดำเนินงานของ อผม. (PA อผม.)</h3>
        </div>

        <form class="col-md-offset-3 col-md-6 text-center" action="/performances" method="post" enctype="multipart/form-data">
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
                <input type="submit" value="เพิ่มประกาศ" class="btn btn-default">
            </div>
        </form>

    </div>


    @include('footer')

@endsection