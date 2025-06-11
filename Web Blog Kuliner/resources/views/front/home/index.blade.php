@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="The Fastest and Latest Blog about entertaintment and historical world">
    <meta name="keyword" value="bacayuk!, baca yuk, bacayuk">
    <meta property="og:title" content="BacaYuk - Home" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description" value="The Fastest and Latest Blog about entertaintment and historical world">
    <meta property="og:image" value="{{ asset('storage/back/' . $latest_post->img) }}">
@endpush


@section('title', 'CUNY - Home')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm" data-aos="fade-right">
                    <a href="{{ url('p/' . $latest_post->slug) }}"><img class="card-img-top featured-img"
                            src="{{ asset('storage/back/' . $latest_post->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}
                            <strong style="text-decoration: none; color: #e41f7b;">
                                {{ $latest_post->User->name }}</strong>
                            <strong><a href="{{ url('category/' . $latest_post->Category->slug) }}" class="text-warning"
                                    style="text-decoration: none;">
                                    {{ $latest_post->Category->name }}
                                </a></strong>
                        </div>
                        <h2 class="card-title">{{ $latest_post->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 250, '...') }}</p>
                        <a class="btn" style="background-color: #FE8502; color: white;" href="{{ url('p/' . $latest_post->slug) }}">Baca →</a>

                    </div>
                </div>

                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach ($articles as $item)
                        <div class="col-lg-6" data-aos="fade-up">
                            <!-- Blog post-->
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ url('p/' . $item->slug) }}"><img class="card-img-top post-img"
                                        src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-m-Y') }} <span
                                            style="color: #e41f7b;">{{ $item->User->name }}</span>

                                        <a href="{{ url('category/' . $item->Category->slug) }}" class="text-warning"
                                            style="text-decoration: none;">
                                            {{ $item->Category->name }}
                                        </a>
                                    </div>
                                    <h2 class="card-title h4">{{ $item->title }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 110, '...') }}</p>
                                    <a class="btn" style="background-color: #FE8502; color: white;"href="{{ url('p/' . $item->slug) }}">Baca →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div>
                    {{ $articles->links() }}
                </div>
            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
