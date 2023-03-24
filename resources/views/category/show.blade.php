@extends('admin.layout')
@section('content')
<h1 class="text-danger">Detail</h1>
<table>
    <tr height="100px">
        <td class="text-danger"><b>Name: </b></td>
        <td>{{$category->name}}</td>
    </tr>
    <tr>
        <td class="text-danger"><b>Description: </b></td>
        <td>{{$category->description}}</td>
    </tr>
</table>
<br><br>
<a class="btn btn-secondary" href="{{url('/category')}}">Back</a>
@endsection