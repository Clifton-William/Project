@extends('front.layout.tentang')

@push('meta-seo')
    <meta name="description" value="About The Fastest and Latest Blog about entertaintment and historical world">
    <meta name="keyword" value="about bacayuk!, tentang baca yuk, bacayuk">
    <meta property="og:title" content="BacaYuk - About" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="BacaYuk" />
    <meta property="og:description" value="About The Fastest and Latest Blog about entertaintment and historical world">
    <meta property="og:image" value="http://127.0.0.1:8000/front/img/logo.jpg">
@endpush

@section('title', 'CUNY - About')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="fade-right">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm">
                    <a href="{{ asset('front/img/me.jpg') }}"><img class="card-img-top featured-img"
                            src="{{ asset('front/img/me.jpg') }}" alt="Ola" /></a>
                    <div class="card-body">
                        <div class="small text-muted" style="margin-top: 15px;">{{ date('d/m/Y') }}</div>
                        <h2 class="card-title"
                            style="font-family: 'Righteous', sans-serif; font-weight: 450; font-size: 35px;">
                            TENTANG BLOG <span style="color: #FE8502;">CUNY</span>
                        </h2>
                        <p class="card-text">
                        <p><span style="color: #FE8502;"><strong>CUNY</strong></span>, singkatan dari culiner yummy adalah
                            blog
                            kuliner yang mengangkat cita rasa lokal dari daerah Jawa Tengah, terutama Banjarnegara. Kami
                            berbagi cerita tentang makanan khas, jajanan legendaris, dan kuliner rumahan yang menggugah
                            selera.</p>

                        Logo <span style="color: #FE8502;"><strong>CUNY</strong></span> menampilkan wajah kucing dengan
                        sendok di tengah, simbol dari keingintahuan, kehangatan,
                        dan kenikmatan makan. Warna oranye melambangkan
                        semangat dan energi kami dalam menyajikan konten yang lezat dan bersahabat.
                        </p>
                        <style>
                            .floating-card {
                                background-color: #D99C59;
                                border-radius: 12px;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                                padding: 20px 15px;
                                margin-top: 15px;
                                text-align: center;
                                color: black;
                                height: auto;
                                min-height: 250px;
                                /* opsional agar tinggi seragam */
                            }

                            .floating-card h5 {
                                margin-top: 15px;
                                margin-bottom: 10px;
                                font-weight: bold;
                            }

                            .floating-card p {
                                margin: 0 auto;
                                line-height: 1.4;
                                max-width: 200px;
                            }

                            .float-img-1 {
                                animation: float1 3s ease-in-out infinite;
                            }

                            .float-img-2 {
                                animation: float2 4s ease-in-out infinite;
                                margin-top: 10px;
                            }

                            .float-img-3 {
                                animation: float3 5s ease-in-out infinite;
                            }

                            @keyframes float1 {

                                0%,
                                100% {
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-10px);
                                }
                            }

                            @keyframes float2 {

                                0%,
                                100% {
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-15px);
                                }
                            }

                            @keyframes float3 {

                                0%,
                                100% {
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-8px);
                                }
                            }

                            .squishy-bacu {
                                position: relative;
                                background-color: #C17B29;
                                color: white;
                                border-radius: 0.5rem;
                                font-size: 16px;
                                font-weight: 500;
                                padding: 12px 28px;
                                box-shadow:
                                    0 2px 0 0 #C17B29,
                                    0 4px 0 0 #a8661d,
                                    0 6px 0 0 #915616,
                                    0 8px 0 0 #7a470e,
                                    0 8px 16px 0 rgba(193, 123, 41, 0.5);
                                transition: all 0.3s ease;
                                overflow: hidden;
                                display: inline-block;
                            }

                            .squishy-bacu:hover {
                                transform: translateY(4px);
                                font-weight: 500;
                                background-color: #FFB600;
                                color: #ffffff;
                                box-shadow:
                                    0 1px 0 0 #FFB600,
                                    0 2px 0 0 #e2a200,
                                    0 3px 0 0 #c48f00,
                                    0 4px 0 0 #a77b00,
                                    0 4px 8px 0 rgba(255, 182, 0, 0.5);
                            }

                            .squishy-bacu:hover i {
                                animation: bounce 1s infinite;
                            }

                            .btn-mulai-bacu:focus,
                            .btn-mulai-bacu:active,
                            .squishy-bacu:focus,
                            .squishy-bacu:active {
                                outline: none !important;
                                box-shadow: none !important;
                                border: none !important;
                            }
                        </style>

                        <div class="row text-center mb-5">
                            <div class="col-md-4 mb-3">
                                <div class="floating-card">
                                    <img src="{{ asset('front/img/bo.jpg') }}" alt="Nama" class="float-img-1"
                                        style="height: 80px;">
                                    <h5>Nama</h5>
                                    <p>Merupakan singkatan dari Culiner Yummy</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="floating-card">
                                    <img src="{{ asset('front/img/bu.jpg') }}" alt="Warna" class="float-img-2"
                                        style="height: 80px;">
                                    <h5>Warna</h5>
                                    <p>Melambangkan semangat dan kenyamanan dalam membaca</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="floating-card">
                                    <img src="{{ asset('front/img/logo.jpg') }}" alt="Logo" class="float-img-3"
                                        style="height: 80px;">
                                    <h5>Logo</h5>
                                    <p>Simbol dari keingintahuan dan kenikmatan makan</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4 mb-5" style="font-family: 'Segoe UI', sans-serif;">
                            <h3 style="font-weight: bold; color: #FE8502; font-family: 'Righteous', sans-serif;">
                                Aktual, Faktual, dan Menggugah
                            </h3>
                            <p style="max-width: 600px; margin: 0 auto; font-size: 16px; line-height: 1.6;">
                                <span style="color: #FE8502;"><strong>CUNY</strong></span> hadir tidak hanya menyajikan
                                informasi seputar kuliner lokal,
                                tapi juga menghadirkannya secara <strong>aktual</strong> dengan kabar terbaru,
                                <strong>faktual</strong> karena ditelusuri langsung dari sumbernya,
                                dan <strong>menggugah</strong> lewat cerita serta visual yang membuatmu ingin segera
                                mencicipi setiap sajian yang diulas.
                            </p>
                        </div>

                        <a href="{{ url('/articles') }}" class="btn btn-mulai-bacu squishy-bacu" role="button"
                        style="display: block; width: fit-content; margin: 20px auto; margin-top: -20px;">
                        Lanjut Baca
                     </a>



                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
