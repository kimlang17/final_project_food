<!-- @extends('frontend.layout')
@section('content')
<div class="container">
    <br>
    {{ Form::open(array('url'=>'/search','method'=>'get')) }}
    <div class="input-group">
        {{ Form::text('keyword',$keyword ?? '', array('placeholder'=>'Search', 'class'=>'form-control')) }}
        <span class="input-group-btn">
            {{ Form::submit('search',array('class'=>'btn btn-primary')) }}
        </span>
    </div>
    {{ Form::close() }}

    <br>
    <div class="row">
        @foreach($menus as $menu)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <a href="{{url('/show/'.$menu->id)}}">
                    <img src="/img/{{$menu->image}}" width="200px" alt="">
                </a>
                
                <div class="caption">
                    <h4>{{ $menu->name }}</h4>
                    <p>{{ $menu->description }}</p>
                    <p><strong>Price: </strong> {{ $menu->price }}$</p>
                    <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div> -->
    <!-- Pagination -->
    <!-- {{-- $menus->appends(request()->input())->links(); --}}
    {{ $menus->links('pagination::bootstrap-5');}}
</div>
@endsection -->