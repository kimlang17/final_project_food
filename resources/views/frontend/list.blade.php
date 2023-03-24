@extends('frontend.layout')
@section('content')
<div class="panel-body">
    <div class="col-lg-6">
        {{ Form::open(array('url'=>'/search','method'=>'get')) }}
        <div class="input-group">
            {{ Form::text('keyword',$keyword ?? '', array('placeholder'=>'Search', 'class'=>'form-control')) }}
            <span class="input-group-btn">
                <!-- {{ Form::submit('search',array('class'=>'fas fa-search btn btn-success p-3')) }} -->
                <button class="btn btn-success"><span class="fas fa-search"></span></button>
            </span>
        </div>
        {{ Form::close() }}
    </div>
    <br>
    <h1>All Menu</h1>
    <div class="row">
        <div class="col">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-3 "> 
                @foreach($menus as $menu)
                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="{{url('/show/'.$menu->id)}}">
                        <img src="/img/{{$menu->image}}" width="260px" height="175px" alt="">
                        </a>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{$menu->name}}</h5>
                                <p>{{$menu->category->name}}</p>
                                <b>{{$menu->price}} $ </b>
                                <hr>
                                <p>{{$menu->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>    
        
        <!-- Categories -->

        <div class="col-lg-3 col-md-3 col-12">
                <div class="shop-sidebar">
                    <!-- Single Widget -->
                    @if (count(array($categories)) > 0)
                    <div class="single-widget category">
                    <h3 class="title">Categories</h3>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        @foreach ($categories as $category)
                            <a href="{{url('/frontend/'.$category->id)}}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">{{$category->name}}</a>
                        @endforeach
                    </div>
                    </div>
                    @endif
                </div>
        </div>
    </div>

    <!-- Pagination -->
    {{ $menus->links('pagination::bootstrap-5');}}
</div>
@endsection