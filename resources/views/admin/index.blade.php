@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <img style="width: 150px; height: 150px;" src="{{ $post->image }}"  alt="image">
                <td>
                    <a href="{{ route('admin.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('admin.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.create') }}">Create new post</a>
@endsection
