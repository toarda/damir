<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);// retrieve 5 latest posts


        return view('blog', [
            'posts' => $posts,
        ]);
    }
}
