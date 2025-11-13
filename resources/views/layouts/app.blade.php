<!DOCTYPE html>
<html lang="en" class="transition-colors duration-500">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- ✅ Dynamic SEO Title --}}
    <title>
        @yield('title', $post->seo_title ?? setting('site.title', 'Trust Wallet Customer Support | 24/7 Helpline +1 5625832749'))
    </title>

    {{-- ✅ Meta Description / Keywords --}}
    <meta name="description" content="@yield('meta_description', $post->meta_description ?? setting('site.description', 'Get 24/7 Trust Wallet customer support for wallet recovery, transaction help, and blockchain assistance. Call +1 5625832749 for instant help.'))">
    <meta name="keywords" content="@yield('meta_keywords', $post->meta_keywords ?? setting('site.meta_keywords', 'Trust Wallet support, Trust Wallet helpline, crypto wallet recovery, blockchain help, wallet troubleshooting'))">
    <meta name="author" content="{{ setting('site.title', 'Trust Wallet Support Team') }}">
    <meta name="robots" content="index, follow">

    {{-- ✅ Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- ✅ Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

    {{-- ✅ Open Graph (Facebook / LinkedIn) --}}
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ setting('site.title', 'Trust Wallet Support') }}" />
    <meta property="og:title" content="@yield('title', $post->seo_title ?? setting('site.title', 'Trust Wallet Support'))" />
    <meta property="og:description" content="@yield('meta_description', $post->meta_description ?? setting('site.description', 'Get 24/7 Trust Wallet support and help.'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/trust.svg') }}" />

    {{-- ✅ Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', $post->seo_title ?? setting('site.title', 'Trust Wallet Support'))" />
    <meta name="twitter:description" content="@yield('meta_description', $post->meta_description ?? setting('site.description', 'Instant Trust Wallet customer help and recovery.'))" />
    <meta name="twitter:image" content="{{ asset('assets/trust.svg') }}" />

    {{-- ✅ Google Analytics (from Voyager settings) --}}
    @if (setting('site.google_analytics_tracking_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>
    @endif
@stack('head')
    {{-- ✅ CSS & Frameworks --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    {{-- ✅ Core Styles --}}
    <style>
        :root {
            --primary-color: #0500ff;
            --text-main: #1a1a1a;
            --text-muted: #555;
            --bg-main: #ffffff;
            --bg-alt: #f9fafb;
        }

        .text-primary { color: var(--primary-color); }
        .bg-primary { background-color: var(--primary-color); }
        .gradient-bg { background: linear-gradient(135deg, #0500ff 0%, #1a1aff 100%); }

        .animate-fade { animation: fadeIn 1s ease-in-out; }
        .animate-up { animation: slideUp 1s ease-in-out; }

        @keyframes fadeIn {
            from { opacity: 0; } to { opacity: 1; }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        html {
            transition: background-color 0.4s, color 0.4s;
        }
    </style>
</head>

<body class="font-sans overflow-x-hidden bg-[var(--bg-main)] text-[var(--text-main)] transition-colors duration-500">

    <!-- Navbar -->
    <nav class="backdrop-blur-md   shadow sticky top-0 z-50 animate-fade">
        <div class="container mx-auto flex justify-between items-center px-6 py-3">
            <a href="{{ route('welcome') }}">
            <h1 class="text-2xl font-bold flex items-center gap-2 text-[var(--text-main)] dark:text-white">
                <img src="https://twtholders.trustwallet.com/assets/trust.svg" alt="" srcset="">
            </h1>
            </a>

            <div class="flex items-center gap-3">
                <!-- Theme Toggle Button -->
<ul class="hidden md:flex items-center gap-8 font-medium">
    {{-- Home Link --}}
    <li>
        <a href="{{ route('welcome') }}"
           class="transition-colors duration-200
                  {{ request()->routeIs('welcome') 
                      ? 'text-primary font-semibold' 
                      : 'oklch(14.7% 0.004 49.25)' }}">
            Home
        </a>
    </li>

    {{-- Blog Link --}}
    <li>
        <a href="{{ route('blog.index') }}"
           class="transition-colors duration-200
                  {{ request()->routeIs('blog.index') 
                      ? 'text-primary font-semibold' 
                      : 'oklch(14.7% 0.004 49.25)' }}">
            Blogs
        </a>
    </li>
</ul>


                <a href="tel:+15625832749"
                    class="gradient-bg text-white px-5 py-2 rounded-lg shadow-md hover:scale-105 transition flex items-center gap-2">
                    <i class="fa-solid fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @include('layouts.hero')

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16 space-y-16">
            @yield('content')
        <!-- Why Choose -->
        
    </main>

    <!-- Footer -->
    <footer
        class="bg-[var(--bg-alt)] dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 py-8 text-center text-[var(--text-muted)] dark:text-gray-400">
        <div class="space-y-3">
            <p><i class="fa-solid fa-lock text-primary"></i> Official Trust Wallet Support © 2025</p>
            <p>24/7 Helpline: <span class="text-[var(--text-main)] dark:text-white font-semibold">+1 5625832749</span>
            </p>
        </div>
    </footer>

    <!-- Theme Script -->
    <script>
        const toggle = document.getElementById('themeToggle');
        const html = document.documentElement;

        function setTheme(theme) {
            html.classList.toggle('dark', theme === 'dark');
            localStorage.setItem('theme', theme);
        }

        function loadTheme() {
            const saved = localStorage.getItem('theme');
            if (saved) setTheme(saved);
            else setTheme('light');
        }

        toggle.addEventListener('click', () => {
            const isDark = html.classList.contains('dark');
            setTheme(isDark ? 'light' : 'dark');
        });

        loadTheme();
    </script>
</body>

</html>
