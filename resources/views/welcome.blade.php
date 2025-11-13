@extends('layouts.app')

@section('content')
    <div class='container'>
        <h2 class="home-sub-title mb-30">Trending topics</h2>
        <div class='row row-gap2 justify-content-center' style="margin-top: 30px">
            @foreach ($posts as $post)
                <div class='col-xl-4 px-xl-14'>
                    <div class='row justify-content-center'>
                        <div class='col-12 p-5'>
                            <a class='card fw-horizontal p-8 plausible-event-name=TransferringFunds'
                                href='{{ route('blog.show', $post->slug) }}' target='_blank' aria-label='{{ $post->title }}'>
                                <div class='card-body col-12 px-20'
                                    style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                    <img src="{{ asset('storage/' . $post->image) }}" 
                                        alt="{{ $post->title }}">
                                    <p class='line-clamp-3 text-center'
                                        style="color: #1B1B1C;font-size: 25px;font-style: normal;font-weight: 700;line-height: 30px;letter-spacing: -0.25px; margin-top: 5px">
                                        {{ $post->title }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $posts->links() }}
        </div>

        <hr style="margin-top: 45px">
    </div>
@endsection
