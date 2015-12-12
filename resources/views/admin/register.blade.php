@extends('master')

@section('content')

<div class="container-fluid side-body">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

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

                    <form class="col-md-12" role="form" method="POST" action="/reg">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group col-md-12">
                            <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group col-md-12">
                            <label>E-Mail Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Password</label>
                                <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Register Code</label>
                            <input type="password" class="form-control" name="register_code">
                        </div>

                        <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection