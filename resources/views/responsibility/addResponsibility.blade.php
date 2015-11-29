@extends('master')

@section('title', 'แก้ไขไฟล์')

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

    <div class="container-fluid side-body">

        <div class="col-md-12 text-center">
            <h2>เพิ่มไฟล์ของ ภารกิจหน้าที่แและความรับผิดชอบ</h2>
        </div>

        <form class="col-md-offset-3 col-md-6 text-center" action="/responsibility" method="post" enctype="multipart/form-data">
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