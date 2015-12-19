@extends('master')

@section('title', 'Sign in')

@section('content')

    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops! </strong> There were some problems with your input. <br> <br>
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
                <div class="text-center">
                    <h3>เข้าสู่ระบบแอดมิน</h3>
                </div>
                    <form class="col-md-offset-3 col-md-6" role="form" action="/login" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="username or email" required="" autofocus="">
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" required="">
                        </div>
                        <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
                        </div>
                    </form>
    </div>

    @include('footer')

@endsection