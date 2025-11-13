<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    /**
     * Display a listing of published posts.
     */
    public function index()
    {
        // Cache paginated posts for better performance
        $posts = Cache::remember('blog_posts_page_' . request('page', 1), 3600, function () {
            return Post::where('status', 'PUBLISHED')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        });

        return view('blog.index', compact('posts'));
    }

    /**
     * Show posts on the homepage (welcome view).
     */
    public function welcome()
{
    $posts = Cache::remember('welcome_posts_page_' . request('page', 1), 3600, function () {
        return Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->paginate(6); // 👈 paginated instead of get()
    });

    return view('welcome', compact('posts'));
}

    /**
     * Display a single post by slug.
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'PUBLISHED')
            ->firstOrFail();

        // Related posts: same category or latest fallback
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'PUBLISHED')
            ->latest()
            ->take(6)
            ->get();

        // If not enough related posts, fallback to random latest
        if ($relatedPosts->count() < 3) {
            $relatedPosts = Post::where('id', '!=', $post->id)
                ->where('status', 'PUBLISHED')
                ->inRandomOrder()
                ->take(6)
                ->get();
        }

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
