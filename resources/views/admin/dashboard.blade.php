@extends('home')

@section('content')
    <div class="flex justify-between">
        <h4 class="my-2">Admin Dashboard</h4>
        <a href="/admin/products/create" class="button success">Create New Product</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>USD ${{$product->price}}</td>
                    <td class="flex">
                        <a href="/admin/products/edit/{{$product->id}}" class="button primary mb-0 mr-2">Edit</a>
                        <form action="/admin/products/delete/{{$product->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="button m-0">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
