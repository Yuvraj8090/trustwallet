<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
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
    // Fetch Posts (cached, paginated)
    $posts = Cache::remember(
        'welcome_posts_page_' . request('page', 1),
        3600,
        function () {
            return Post::where('status', 'PUBLISHED')
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        }
    );

    // Fetch Pages (only ACTIVE ones)
    $pages = Cache::remember(
        'welcome_active_pages',
        3600,
        function () {
            return Page::active()
                ->orderBy('created_at', 'desc')
                ->get();
        }
    );

    return view('welcome', compact('posts', 'pages'));
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
