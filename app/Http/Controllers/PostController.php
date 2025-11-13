<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('blog.index', compact('posts'));
    }
    public function welcome()
    {
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('welcome', compact('posts'));
    }

    // Show single post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'PUBLISHED')->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
