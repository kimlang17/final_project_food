@extends('admin.layout')
@section('content')

<h1>Category</h1>
    <a class="btn btn-success" href="{{url('/category/create')}}">Create New</a>
    <br><br>
    @if(Session::has('category_delete'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {!! session('category_delete') !!}
                </div>
    @endif
    <table class="table table-bordered">
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Description</td>
    <td>Edit</td>
    <td>Delete</td>
    </tr>
    @foreach($categories as $category)
    <tr>
    <td>{{$category->id}}</td>
    <td><a class="text-success" href="{{url('/category/'.$category->id)}}">{{$category->name}}</a></td>
    <td>{{$category->description}}</td>
    <td><a class="btn btn-success" href="{{url('/category/'.$category->id.'/edit')}}">Edit</a></td>
    <td>
    {!! Form::open(array('url'=>'category/'. $category->id, 'method'=>'DELETE')) !!}
    {!! csrf_field() !!}
    {!! method_field('DELETE') !!}
        <button class="btn btn-danger delete">Delete</button>
    {!! Form::close() !!} 
    </td>
    </tr>
    @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
	<script>
            $(".delete").click(function() {
                var form = $(this).closest('form');
                $('<div></div>').appendTo('body')
                    .html('<div><h6> Are you sure ?</h6></div>')
                    .dialog({
                        modal: true,
                        title: 'Delete message',
                        zIndex: 10000,
                        autoOpen: true,
                        width: 'auto',
                        resizable: false,
                        buttons: {
                            Yes: function() {
                                $(this).dialog('close');
                                form.submit();
                            },
                            No: function() {
                                $(this).dialog("close");
                                return false;
                            }
                        },
                        close: function(event, ui) {
                            $(this).remove();
                        }
                    });
                return false;
            });
        </script>
@endsection
