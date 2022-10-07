@extends('home')

@section('content')
    <h1 class="text-center my-2">Store</h1>

    <div class="grid-x grid-margin-x grid-margin-y">
        @foreach ($products as $product)
            <div class="product cell medium-6 large-3">
                <img src="{{$product->image}}" width="100px"/>
                <div>
                    <div>
                        <h5>{{$product->name}}</h5>
                        <span class="small">USD <b>${{$product->price}}</b></span>
                    </div>
                    <hr>
                    <p class="small text-justify">{{substr($product->description,0,120)}}...</p>
                    <div class="text-right">
                        <a class="button" href="/store/product/{{$product->id}}">See More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection