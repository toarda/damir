<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->save();

        return redirect()->route('admin.index');
    }

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->save();

        return redirect()->route('admin.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.index');
    }

    public function vixod()
    {
        Auth::logout();

        return redirect()->route('index');
    }

}
