<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $latestPosts = Post::orderBy('created_at', 'desc')->take(5)->get(); // retrieve 5 latest posts
        $newestPosts = Post::orderBy('created_at', 'asc')->take(5)->get(); // retrieve 5 newest posts

        return view('blog', [
            'latestPosts' => $latestPosts,
            'newestPosts' => $newestPosts,
        ]);
    }
}
