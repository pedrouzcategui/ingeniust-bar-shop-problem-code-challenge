@extends('home')

@section('content')
    <div class="grid-x grid-margin-x grid-margin-y" style="padding: 50px 0px">
        @if ($product)
            <div class="cell medium-6 large-6">
                <img src="{{ $product->image }}" width="300px" />
            </div>
            <div class="cell medium-6 large-6">
                <div>
                    <div>
                        <h3 class="bold">{{ $product->name }}</h3>
                        <p>USD <b>${{ $product->price }}</b></p>
                    </div>
                    <hr>
                    <p class="text-justify">{{ $product->description }}</p>
                </div>
            </div>
        @endif
    </div>
@endsection
