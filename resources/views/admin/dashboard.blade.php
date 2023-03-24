@extends('admin.layout')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <p>You are Logged In </p>
    <p>User ID: {{$user->id}}</p>
    <p>User Name: {{$user->name}}</p>
    <p>User Email: {{$user->email}}</p>
</div>
@endsection