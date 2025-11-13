@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title)
@section('meta_description', $post->meta_description)
@section('meta_keywords', $post->meta_keywords)

@section('content')
<div class="container py-5">
    <h1>{{ $post->getTranslatedAttribute('title') }}</h1>
    <p><small>Published on {{ $post->created_at->format('M d, Y') }}</small></p>

    @if ($post->image)
        <img src="{{ Voyager::image($post->image) }}" 
             alt="{{ $post->getTranslatedAttribute('title') }}" 
             class="img-fluid mb-4">
    @endif

    <div>{!! $post->getTranslatedAttribute('body') !!}</div>
</div>
@endsection
