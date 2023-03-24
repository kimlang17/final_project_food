@extends('admin.layout')
@section('content')
<main>
	<div class="container-fluid">
		<h1 class="mt-4">Create Category</h1>
        @if(Session::has('category_create'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Primary!</strong> {!! session('category_create') !!}
        </div>
        @endif
        @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Something is Wrong</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
        @endif
		<div class="card mb-4">
			<div class="card-body">
            {!! Form::open(['url' => 'category']) !!}
			{!! Form::label('name', 'Name: ') !!}
			{!! Form::text('name', '',array('class'=>'form-control')) !!}
            <br>
            {!! Form::label('description', 'Description: ') !!}
			{!! Form::textarea('description', '',array('class'=>'form-control')) !!}
            <br>
			{!! Form::submit('Create',array('class'=> 'btn btn-success')) !!}
            <a class="btn btn-secondary" href="{{('/category')}}">Back</a>
            {!! Form::close() !!}
			</div>
		</div>
    </div>
</main>
@endsection