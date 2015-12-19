@extends('master')

@section('title', 'รายงานการประชุม ควฝผ-อผม.')



    <div class="container-fluid" style="margin-bottom: 30%">
        <div class="col-md-10 text-center">
            @section('content')
                <div class="col-md-12">
                    <h2>
                        <p class="header">รายงาน<span class="header2">การประชุม ควฝผ-อผม.</span></p>
                    </h2>
                </div>
                <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 20px"></div>
                <div class="col-md-7" style="margin-top: 30px">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-5 form-inline">
                    <h3> เลือกปี</h3>
                </div>
                <div class="col-sm-3">
                    <select class="form-control">
                        <option>2558</option>
                        <option>2559</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <ul>
                        <li><h3>ครั้งที่ 1</h3></li>
                        <li><h3>ครั้งที่ 2</h3></li>
                        <li><h3>ครั้งที่ 3</h3></li>
                        <li><h3>ครั้งที่ 4</h3></li>
                        <li><h3>ครั้งที่ 5</h3></li>
                        <li><h3>ครั้งที่ 6</h3></li>
                        <li><h3>ครั้งที่ 7</h3></li>
                        <li><h3>ครั้งที่ 8</h3></li>
                        <li><h3>ครั้งที่ 9</h3></li>
                        <li><h3>ครั้งที่ 10</h3></li>
                        <li><h3>ครั้งที่ 11</h3></li>
                        <li><h3>ครั้งที่ 12</h3></li>
                        <li><h3>ครั้งที่ 13</h3></li>
                        <li><h3>ครั้งที่ 14</h3></li>
                        <li><h3>ครั้งที่ 15</h3></li>
                    </ul>
                </div>
        </div>
    </div>


    @include('footer')

@endsection