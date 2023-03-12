@extends('layouts.admin')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('shop.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" id="image" class="form-control">
        </div>


        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
