@extends('master')

@section('title', 'ติดตามความก้าวหน้าการประเมินผลการดำเนินงานของ อผม.')

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
            <h3>เพิ่มไฟล์ของ รายงานผมการดำเนินงาน อผม.</h3>
        </div>

        <form class="col-md-offset-3 col-md-6 text-center" action="/sfu-report" method="post" enctype="multipart/form-data">
            {{--always required csrf_token--}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <input type="file" name="file" class="form-control input-lg">
            </div>

            <div class="form-group">
                <select class="form-control input-lg" name="no">
                    <option value="1">ครั้งที่ 1</option>
                    <option value="2">ครั้งที่ 2</option>
                    <option value="3">ครั้งที่ 3</option>
                    <option value="4">ครั้งที่ 4</option>
                    <option value="5">ครั้งที่ 5</option>
                    <option value="6">ครั้งที่ 6</option>
                    <option value="7">ครั้งที่ 7</option>
                    <option value="8">ครั้งที่ 8</option>
                    <option value="9">ครั้งที่ 9</option>
                    <option value="10">ครั้งที่ 10</option>
                    <option value="11">ครั้งที่ 11</option>
                    <option value="12">ครั้งที่ 12</option>
                    <option value="13">ครั้งที่ 13</option>
                    <option value="14">ครั้งที่ 14</option>
                    <option value="15">ครั้งที่ 15</option>
                    <option value="16">ครั้งที่ 16</option>
                    <option value="17">ครั้งที่ 17</option>
                    <option value="18">ครั้งที่ 18</option>
                    <option value="19">ครั้งที่ 19</option>
                    <option value="20">ครั้งที่ 20</option>
                </select>
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