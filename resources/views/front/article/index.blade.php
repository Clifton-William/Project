@extends('front.layout.artikel')

@push('meta-seo')
    <meta name="description"
        value="Article Category BacaYuk The Fastest and Latest Blog about entertaintment and historical world">
    <meta name="keyword" value="list article bacayuk!, articles baca yuk, artikel bacayuk">
    <meta property="og:title" content="All category - Article" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description"
        value="Article Category BacaYuk The Fastest and Latest Blog about entertaintment and historical world">
    <meta property="og:image" value="http://127.0.0.1:8000/front/img/logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <style>
        .baca.wave-text {
            text-align: center;
            font-size: 48px;
            margin-right: 80px;
            margin-bottom: 100px;
            font-weight: bold;
            margin-top: 20px;
        }

        .wave-text span {
            display: inline-block;
            animation: wave 2s ease-in-out infinite;
        }

        .wave-text span:nth-child(1) {
            animation-delay: 0s;
        }

        .wave-text span:nth-child(2) {
            animation-delay: 0.1s;
        }

        .wave-text span:nth-child(3) {
            animation-delay: 0.2s;
        }

        .wave-text span:nth-child(4) {
            animation-delay: 0.3s;
        }

        .wave-text span:nth-child(5) {
            animation-delay: 0.4s;
        }

        .wave-text span:nth-child(6) {
            animation-delay: 0.5s;
        }

        .wave-text span:nth-child(7) {
            animation-delay: 0.6s;
        }

        .wave-text span:nth-child(8) {
            animation-delay: 0.7s;
        }

        @keyframes wave {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
@endpush

@section('title', 'CUNY - Article')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="mb-4">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group mb-4">
                    <input class="form-control" type="text" name="keyword" placeholder="cari artikel..." />
                    <button class="btn" style="background-color: #FE8502; color: white;" id="button-search"
                        type="submit">Go!</button>
                    @if ($keyword)
                        <a href="{{ url('articles') }}" class="btn btn-secondary">back</a>
                    @endif
                </div>
            </form>

            @if ($keyword)
                <p style=" font-family: 'Righteous', sans-serif;">hasil pencarian : <strong
                        style="color: #FFB600">{{ $keyword }}</strong></p>
            @endif

            <div class="row">
                @forelse ($articles as $item)
                    <div class="col-lg-4" data-aos="fade-up">
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
                                <a class="btn" style="background-color: #FE8502; color: white;"
                                    href="{{ url('p/' . $item->slug) }}">Baca →</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div style="text-align: center; margin-top: 40px;">
                        <img src="{{ asset('front/img/duck.gif') }}" alt="Duck GIF" style="width: 150px;">
                        <div class="baca glitch-text wave-text" style=" font-family: 'Righteous', sans-serif;">
                            <span>N</span><span>O</span><span>T</span><span>F</span><span>O</span><span>U</span><span>N</span><span>D</span>
                        </div>
                    </div>
                @endforelse

                <div class="flex justify-center mt-4">
                    {{ $articles->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
