@extends('layouts.app')

@section('title', 'Latest Crypto & Trust Wallet Articles | Expert Guides & Tips')
@section('meta_description', 'Explore the latest crypto and Trust Wallet articles — expert tutorials, security updates, and blockchain insights for traders and investors.')
@section('meta_keywords', 'Trust Wallet blog, crypto news, wallet recovery, blockchain updates, crypto tutorials, DeFi')

@section('content')
<section class="container mx-auto px-4 py-12 animate-up">

    {{-- SEO Heading --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-[var(--primary-color)] mb-2">
                🔥 Trending Crypto & Trust Wallet Topics
            </h1>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl">
                Stay ahead in the crypto world with expert-written guides and updates from our Trust Wallet specialists.
            </p>
        </div>
    </div>

    {{-- Posts Grid --}}
    @if ($posts->count() > 0)
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <article 
                    class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md hover:shadow-lg border border-gray-200 dark:border-gray-700 transition transform hover:-translate-y-1 duration-300">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block group" aria-label="{{ $post->title }}">
                        {{-- Image --}}
                        @if ($post->image)
                            <img src="{{ asset('storage/app/public/' . $post->image) }}" 
                                 alt="{{ $post->title }}" 
                                 loading="lazy"
                                 class="w-full h-56 object-cover group-hover:opacity-90 transition" />
                        @endif

                        {{-- Body --}}
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white group-hover:text-[var(--primary-color)] transition">
                                {{ $post->title }}
                            </h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-3 line-clamp-3">
                                {{ Str::limit(strip_tags($post->excerpt ?? $post->body), 120) }}
                            </p>
                            <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                <span><i class="fa-regular fa-calendar text-[var(--primary-color)] mr-1"></i>
                                    {{ $post->created_at->format('M d, Y') }}
                                </span>
                                <span><i class="fa-solid fa-user text-[var(--primary-color)] mr-1"></i>
                                    {{ $post->author->name ?? 'Admin' }}
                                </span>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10 text-center">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @else
        {{-- No Posts Fallback --}}
        <div class="text-center py-16">
            <i class="fa-solid fa-newspaper text-5xl text-gray-400 mb-4"></i>
            <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">No Posts Available</h3>
            <p class="text-gray-500">Check back later for the latest crypto and Trust Wallet updates.</p>
        </div>
    @endif

</section>
@endsection
