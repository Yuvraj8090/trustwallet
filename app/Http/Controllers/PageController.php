<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    /**
     * Display page based on slug
     */
    public function show($slug)
    {
        // Fetch page by slug and must be ACTIVE
        $page = Page::active()->where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
