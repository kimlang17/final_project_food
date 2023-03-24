@extends('admin.layout')
@section('content')
<h1 class="text-danger">Detail</h1>
<table>
    <tr height="50px">
        <td class="text-danger"><b>Name: </b></td>
        <td>{{$menu->name}}</td>
    </tr>
    <tr height="50px">
        <td class="text-danger"><b>Category: </b></td>
        <td>{{$menu->category->name}}</td>
    </tr>
    <tr height="50px">
        <td class="text-danger"><b>Price: </b></td>
        <td>{{$menu->price}}</td>
    </tr>
    <tr>
        <td class="text-danger"><b>Description: </b></td>
        <td>{{$menu->description}}</td>
    </tr>
</table>
<br><br>
<div>{!! Html::image('/img/'.$menu->image, $menu->name, array('width'=>'300')) !!}</div>
<br><br>
<a class="btn btn-secondary" href="{{url('/menu')}}">Back</a>
@endsection