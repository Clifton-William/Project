@extends('front.layout.artikel')

@push('meta-seo')
    <meta name="author" content="{{ $article->User->name }}" />
    <meta name="description" value="{{ Str::limit(strip_tags($article->desc), 110, '...') }}">
    <meta name="keyword" value="{{ $article->title . ' - BacaYuk' }}">
    <meta property="og:type" value="article"/>
    <meta property="og:title" content="{{ $article->title . ' - BacaYuk' }}" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description" value="{{ Str::limit(strip_tags($article->desc), 110, '...') }}">
    <meta property="og:image" value="{{ asset('storage/back/' . $article->img) }}">
@endpush

@section('title', $article->title . ' - CUNY')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/' . $article->slug) }}"><img class="card-img-top single-img"
                            src="{{ asset('storage/back/' . $article->img) }}" alt="{{ $article->title }}" /></a>
                    <div class="card-body">
                        <div class="small text-muted">
                            <span class="ml-2">{{ $article->created_at->format('d-m-Y') }}</span>
                            <span class="ml-2">
                                <strong style="text-decoration: none; color: #e41f7b;">
                                    {{ $article->User->name }}</strong>
                                <a href="{{ url('category/' . $article->Category->slug) }}" class="text-warning"
                                    style="text-decoration: none;">{{ $article->Category->name }}</a>
                            </span>
                            <span class="ml-2">{{ $article->views }}</span>x dilihat
                        </div>
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{!! $article->desc !!}</p>

                        <div class="mt-5">
                            <p style="font-size: 15px">bagikan ini</p>
                            <a class="btn btn-primary" href="https://facebook.com/sharer.php?u={{ url()->current() }}"
                                target="_blank"> <i class="fab fa-facebook"></i> Facebook</a>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?text={{ url()->current() }}"
                                target="_blank"> <i class="fab fa-whatsapp"></i> whatsapp</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
