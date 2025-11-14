@extends('layouts.app')

{{-- ========================= SEO TAGS ========================= --}}
@section('title', $page->title . ' | ' . setting('site.title'))
@section('meta_description', $page->meta_description ?? setting('site.description'))
@section('meta_keywords', $page->meta_keywords ?? setting('site.meta_keywords'))

@section('content')

<div class="max-w-4xl mx-auto py-10 px-4">

    {{-- Page Title --}}
    <h1 class="text-4xl font-bold text-gray-900 mb-6">
        {{ $page->title }}
    </h1>

    {{-- Page Image --}}
    @if ($page->image)
        <img src="{{ ('storage/app/public/'.$page->image) }}"
             alt="{{ $page->title }}"
             class="w-full h-64 object-cover rounded-xl shadow-md mb-8">
    @endif

    {{-- Page Body --}}
    <div class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-p:text-gray-700 prose-a:text-blue-600">
        {!! $page->body !!}
    </div>

</div>

@endsection
