@extends('admin.layout')
@section('content')
                @if (count($menus) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>All Menu</h1>
                    </div>
                    <a class="btn btn-success" href="{{url('/menu/create')}}">Create New</a>
                    <br><br>
                    @if(Session::has('menu_delete'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>Primary!</strong> {!! session('menu_delete') !!}
                                </div>
                    @endif
                    <div class="panel-body">
                        <table class="table table-striped task-table align-center">
                            <thead>
                                <td>ID</td>
                                <td>Food Name</td>
                                <td>Category Name</td>
                                <td>Price</td>
                                <td>Picture</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                <td>{{$menu->id}}</td>
                                <td><a class="text-success" href="{{url('/menu/'.$menu->id)}}">{{$menu->name}}</a></td>

                                <td>{{$menu->category->name}}</td>
                                <td>{{$menu->price}}</td>
                                <td>
                                    <div>{{Html::image('/img/' .$menu->image, $menu->name, array('width'=>'150'))}}</div>
                                </td>
                                <td><a class="btn btn-success" href="{{url('/menu/'.$menu->id.'/edit')}}">Edit</a></td>
                                <td>
                                {!! Form::open(array('url'=>'menu/'. $menu->id, 'method'=>'DELETE')) !!}
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                    <button class="btn btn-danger delete">Delete</button>
                                {!! Form::close() !!} 
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
                @endif
@endsection