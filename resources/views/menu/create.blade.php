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
            <!-- It Create the new Category -->

                {!! Form::open(array('url'=>'menu', 'files'=>'true')) !!}
		        {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id',$categories,null ,array('class'=>'form-select')) !!}
                
               
                <br>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',null, array('class'=>'form-control')) !!}

                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price',null, array('class'=>'form-control')) !!}

                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description',null, array('class'=>'form-control')) !!}
                <br>    
                {!! Form::submit('Create', array('class'=>'btn btn-success')) !!}

                <a class="btn btn-secondary" href="{!! url('/menu')!!}">Back</a>

                {!! Form::close() !!}
			</div>
		</div>
    </div>
</main>
@endsection