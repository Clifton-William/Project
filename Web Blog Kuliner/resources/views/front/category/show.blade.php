@extends('front.layout.template')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$article->slug) }}"><img class="card-img-top single-img" src="{{ asset('storage/back/' . $article->img) }}"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $article->created_at->format('d-m-Y') }}</div>
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{!! $article->desc !!}</p>
                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
