@extends('master')

@section('title', 'ประกาศนโยบายและแผนการดำเนินงานของ อผม.')

@section('content')

    <div class="row" style="margin-bottom: 30%">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h2>
                    <p class="header">ประกาศ<span class="header2">นโยบายและแผนการดำเนินงานของ อผม.</span></p>
                </h2>
            </div>
            <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <ul>
                    @foreach($announces as $announce)
                        <li><a href="uploads/Announces/Announce-{{$announce->year}}/{{$announce->file_path}}"><h3>
                                    ปี {{$announce->year}} {{$announce->file_name}}</h3></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    @include('footer')

@endsection