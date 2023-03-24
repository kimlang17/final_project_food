@extends('admin.layout')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success"><em>{!! session('success') !!}</em>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
</div>
@endif
@if(Session::has('errors'))
<div class="alert alert-danger"><em>{!! $errors->first() !!}</em>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
</div>
@endif
@if(Session::has('message'))
<div class="alert alert-success"><em>{!! session('message') !!}</em>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
</div>
@endif
<form action="{{ route('admin.login.post') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
        <div class="col-md-6">
            <input type="text" id="email_address" class="form-control" name="email" required autofocus>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <br><br>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
        <div class="col-md-6">
            <input type="password" id="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="1"> Remember Me
                </label>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-success">
            Login
        </button>
    </div>
</form>
@endsection