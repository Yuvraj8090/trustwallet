@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title)
@section('meta_description', $post->meta_description)
@section('meta_keywords', $post->meta_keywords)

@section('content')
<!-- ✅ Article Schema for SEO -->
@push('head')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "description": "{{ $post->meta_description }}",
    "image": "{{ Voyager::image($post->image) }}",
    "author": {
        "@type": "Person",
        "name": "Trust-Wallet",
    },
    "publisher": {
        "@type": "Organization",
        "name": "Trust-Wallet",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('assets/trust.svg') }}"
        }
    },
    "datePublished": "{{ $post->created_at->toIso8601String() }}",
    "dateModified": "{{ $post->updated_at->toIso8601String() }}"
}
</script>
@endpush

<section class="container mx-auto px-4 py-10 max-w-5xl">
    <article class="bg-white dark:bg-gray-900 shadow-lg rounded-2xl p-6 md:p-10 transition">
        <!-- Title & Meta -->
        <header class="mb-6 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-3 leading-tight">
                {{ $post->getTranslatedAttribute('title') }}
            </h1>
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                Published on {{ $post->created_at->format('M d, Y') }}
            </p>
        </header>

        <!-- Featured Image -->
        @if ($post->image)
            <div class="mb-6">
                <img  src="{{ asset('storage/app/public/' . $post->image) }}" 
                     alt="{{ $post->getTranslatedAttribute('title') }}"
                     class="rounded-xl shadow-md w-full object-cover h-[400px] md:h-[500px]" 
                     loading="lazy">
            </div>
        @endif

        <!-- Post Body -->
        <div class="prose prose-lg dark:prose-invert max-w-none leading-relaxed text-gray-800 dark:text-gray-300">
            {!! $post->getTranslatedAttribute('body') !!}
        </div>
    </article>

    <!-- Related Posts Section -->
    <section class="mt-16">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900 dark:text-white text-center">
            Related Articles
        </h2>
        <div class="flex overflow-x-auto space-x-6 pb-4 snap-x snap-mandatory scrollbar-hide">
            @foreach ($relatedPosts as $related)
                <a href="{{ route('blog.show', $related->slug) }}" 
                   class="flex-none w-72 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 snap-center">
                    <img  src="{{ asset('/storage/app/public/' . $post->image) }}" 
                         alt="{{ $related->title }}" 
                         class="rounded-t-xl h-48 w-full object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2 line-clamp-2">
                            {{ $related->title }}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-3">
                            {{ Str::limit(strip_tags($related->excerpt), 100) }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</section>
@endsection
