@extends('layouts.admin')

@section('content')
    <h1>Products</h1>

    <a href="{{ route('shop.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <img style="width: 150px; height: 150px;" src="{{ $product->image }}"  alt="image">
                <td>
                    <a href="{{ route('shop.edit', $product->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('shop.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
