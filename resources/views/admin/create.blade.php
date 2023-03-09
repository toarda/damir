@extends('layouts.admin')

@section('content')
    <h1>Create new post</h1>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
        <label for="image">Image URL</label>
        <input type="text" name="image" id="image" class="form-control">
        <button type="submit">Save</button>
    </form>
@endsection
