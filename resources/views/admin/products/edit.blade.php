@extends('home')

@section('content')
    <h3 class="text-center bold">Edit Product</h3>
    <form action="/admin/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid-container">
            <div class="grid-padding-x">
                <div class="medium-6 cell">
                    <label for="name">Wine Name
                        <input type="text" name="name" placeholder="Ex: Cavernet Sauvignon" value="{{ old('name') ? old('name') : $product->name }}" required>
                        @error('name')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="description">Description
                        <textarea name="description" rows="5" placeholder="Ex: Lorem Ipsum Sit Amet" required>{{ old('description') ? old('description') : $product->description }}</textarea>
                        @error('description')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="price">Price
                        <input type="text" value="{{ old('price') ? old('price') : $product->price }}" name="price" placeholder="Price in US Dollars, Ex: 25.30 | 26" required>
                        @error('price')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="image">Wine Image
                        <input type="file" name="image">
                        @error('image')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                    <p>Actual Image</p>
                    <img src="/storage/{{$product->image}}" width="100" alt="">
                </div>
                <div class="medium-6 cell">
                    <button class="button success">
                        Edit Product
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
