@extends('layouts.app')

@section('content')

    {{-- ====== Hero Support Sections ====== --}}
    <section class="animate-up">
        <div class="flex items-center gap-3 mb-4">
            <i class="fa-solid fa-star text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold ">Why Choose Professional Trust Wallet Support</h2>
        </div>
        <p class="text-[var(--text-muted)] mb-4">
            Encountered a transaction error or wallet issue? Our crypto support team provides real-time help to
            secure your assets and ensure smooth transactions.
        </p>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-[var(--bg-alt)] dark:bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-primary transition shadow-sm hover:scale-105">
                <i class="fa-solid fa-clock text-primary text-3xl mb-3"></i>
                <h3 class="font-semibold text-lg mb-2 text-white">24/7 Availability</h3>
                <p class="text-white">Global assistance anytime, anywhere with zero delays.</p>
            </div>
            <div class="bg-[var(--bg-alt)] dark:bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-primary transition shadow-sm hover:scale-105">
                <i class="fa-solid fa-bolt text-primary text-3xl mb-3"></i>
                <h3 class="font-semibold text-lg mb-2 text-white">Instant Resolutions</h3>
                <p class="text-white">Quick, accurate troubleshooting by blockchain specialists.</p>
            </div>
        </div>
    </section>

    {{-- ====== Helpline Section ====== --}}
    <section class="animate-up mt-16">
        <div class="flex items-center gap-3 mb-4">
            <i class="fa-solid fa-phone-volume text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold ">Trust Wallet Helpline Number</h2>
        </div>
        <p class="text-[var(--text-muted)] mb-4">
            Connect directly with Trust Wallet support for instant wallet recovery, sync issues, or stuck transactions.
        </p>

        <div class="bg-[var(--bg-alt)] dark:bg-gray-800 p-6 rounded-xl border border-gray-700">
            <ul class="grid md:grid-cols-2 gap-4">
                <li class="text-white"><i class="fa-solid fa-check text-primary"></i> Pending or failed transfers</li>
                <li class="text-white"><i class="fa-solid fa-check text-primary"></i> Gas fee optimization</li>
                <li class="text-white"><i class="fa-solid fa-check text-primary"></i> Wallet restoration issues</li>
                <li class="text-white"><i class="fa-solid fa-check text-primary"></i> Blockchain network errors</li>
            </ul>
        </div>

        <div class="text-center mt-8">
            <a href="tel:+15625832749"
               class="gradient-bg text-white px-8 py-3 rounded-full shadow-lg hover:scale-110 transition inline-flex items-center gap-2">
                <i class="fa-solid fa-phone"></i> Call Now: +1 5625832749
            </a>
        </div>
    </section>

    {{-- ====== Call & Chat Section ====== --}}
    <section class="animate-up mt-16">
        <div class="flex items-center gap-3 mb-4">
            <i class="fa-solid fa-comments text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold ">Trust Wallet Call & Chat Support</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-[var(--bg-alt)] dark:bg-gray-800 p-6 rounded-xl border border-gray-700 hover:scale-105 transition shadow-sm">
                <i class="fa-solid fa-phone text-primary text-3xl mb-3"></i>
                <h3 class="text-lg font-semibold mb-2 text-white">Call Support</h3>
                <p class="text-white">Speak to live crypto specialists who guide you through step-by-step solutions.</p>
            </div>
            <div class="bg-[var(--bg-alt)] dark:bg-gray-800 p-6 rounded-xl border border-gray-700 hover:scale-105 transition shadow-sm">
                <i class="fa-solid fa-message text-primary text-3xl mb-3"></i>
                <h3 class="text-lg font-semibold mb-2 text-white">Chat Support</h3>
                <p class="text-white">Instant, secure chat for real-time troubleshooting and screenshot-based help.</p>
            </div>
        </div>
    </section>

    {{-- ====== Safety Guidelines ====== --}}
    <section class="animate-up mt-16">
        <div class="flex items-center gap-3 mb-4">
            <i class="fa-solid fa-shield-halved text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold ">Safety & Privacy Guidelines</h2>
        </div>
        <ul class="space-y-3 ">
            <li><i class="fa-solid fa-lock text-primary mr-2"></i> Never share your recovery phrase — ever.</li>
            <li><i class="fa-solid fa-phone-slash text-primary mr-2"></i> Only call verified helpline numbers.</li>
            <li><i class="fa-solid fa-triangle-exclamation text-primary mr-2"></i> Avoid fake links and third-party sites.</li>
        </ul>
    </section>

{{-- ====== Trending Topics Section ====== --}}
@if(isset($posts) && $posts->count() > 0)
<section class="animate-up mt-20">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-fire text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold">Trending Topics</h2>
        </div>
        <div class="hidden md:block">
            <a href="{{ route('blog.index') }}" class="text-primary hover:underline">View All Posts →</a>
        </div>
    </div>

    {{-- Scrollable Cards --}}
    <div class="flex overflow-x-auto snap-x gap-6 pb-4 scrollbar-thin scrollbar-thumb-primary scrollbar-track-gray-800">
        @foreach ($posts as $post)
            <div
                class="min-w-[300px] max-w-[350px] snap-center flex-shrink-0 bg-[var(--bg-alt)] dark:bg-gray-800 border border-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-lg hover:-translate-y-1 transition transform">
                <a href="{{ route('blog.show', $post->slug) }}" target="_blank">
                    <img src="{{ asset('storage/app/public/' . $post->image) }}"
                        alt="{{ $post->title }}"
                        class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2 text-white hover:text-primary transition">
                            {{ $post->title }}
                        </h3>
                        <p class="text-sm text-gray-400 line-clamp-3">
                            {{ Str::limit($post->excerpt, 100) }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-10 text-center">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</section>
@endif


    {{-- ====== Final CTA ====== --}}
    <section class="text-center bg-[var(--bg-alt)] dark:bg-gray-800 mt-20 p-10 rounded-xl border border-primary shadow-lg animate-up">
        <i class="fa-solid fa-life-ring text-5xl text-primary mb-4 animate-bounce"></i>
        <h2 class="text-3xl font-bold mb-2 text-white">Need Help Right Now?</h2>
        <p class="text-white mb-6">Call our 24/7 verified Trust Wallet customer support.</p>
        <a href="tel:+15625832749"
           class="gradient-bg text-white px-8 py-3 rounded-full shadow-lg hover:scale-110 transition inline-flex items-center gap-2">
            <i class="fa-solid fa-phone"></i> Call +1 5625832749
        </a>
    </section>

@endsection
