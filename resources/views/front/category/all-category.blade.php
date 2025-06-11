@extends('front.layout.kategori')
 
@push('meta-seo')
    <meta name="description" value="All Category BacaYuk The Fastest and Latest Blog about entertaintment and historical world">
    <meta name="keyword" value="list category bacayuk!, daftar baca yuk, kategori bacayuk">
    <meta property="og:title" content="All category - BacaYuk" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description" value="All Category BacaYuk The Fastest and Latest Blog about entertaintment and historical world">
    <meta property="og:image" value="http://127.0.0.1:8000/front/img/logo.jpg">
@endpush

@section('title', 'All category - CUNY')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="mb-4">

            <p style=" font-family: 'Righteous', sans-serif;">Semua kategori : <strong></strong></p>

            <div class="row">
                @foreach ($category as $item)
                    <div class="col-lg-3 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                            <div class="text-center">
                                <span>
                                    <a href="{{ url('category/'.$item->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <i class="fas fa-folder fa-2x"></i>
                                    </a>
                                </span>
                                <h5 class="card-title mt-2">
                                    <a href="{{ url('category/'.$item->slug) }}"
                                        class="text-decoration-none text-dark">
                                        {{ $item->name }} {{ $item->articles_count }}
                                    </a>
                                </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
