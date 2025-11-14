@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>{{ $page->title }}</h1>
    <div>{!! $page->body !!}</div>
</div>
@endsection
