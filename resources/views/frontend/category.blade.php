<!-- @extends('frontend.layout')
@section('content')
<div class="container">
    <br>
    @if (count(array($categories)) > 0)
    <div class="col-sm-12">
        <ul class="list-unstyled mb-0">
            @foreach ($categories as $category)
            <li><a href="{{url('/frontend/'.$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endif
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
   <!-- {{ $menus->links('pagination::bootstrap-5');}}
</div>
@endsection -->