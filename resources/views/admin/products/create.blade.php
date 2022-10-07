@extends('home')

@section('content')
    <h3 class="text-center bold">Create Product</h3>
    <form action="/admin/products/save" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid-container">
            <div class="grid-padding-x">
                <div class="medium-6 cell">
                    <label for="name">Wine Name
                        <input type="text" name="name" placeholder="Ex: Cavernet Sauvignon" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="description">Description
                        <textarea name="description" rows="5" placeholder="Ex: Lorem Ipsum Sit Amet" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="price">Price
                        <input type="text" value="{{ old('price') }}" name="price" placeholder="Price in US Dollars, Ex: 25.30 | 26" required>
                        @error('price')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="image">Wine Image
                        <input type="file" name="image" required>
                        @error('image')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <button type="submit" class="button success">
                        Create Product
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
