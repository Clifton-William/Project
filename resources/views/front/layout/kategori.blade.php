<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="robots" content="index, follow">
    @stack('meta-seo')
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}" />
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @stack('css')
    <style>
        .banner_taital {
            width: 100%;
            float: left;
            font-size: 80px;
            color: #FE8502;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Righteous', sans-serif;
        }

        .cuny-t {
            font-size: 120px;
        }



        .cuny-wrapper {
            display: flex;

            justify-content: center;
            align-items: center;
            font-size: 100px;
            overflow: hidden;
            font-weight: bold;
            color: #FE8502;
            font-family: 'Righteous', sans-serif;
            text-transform: uppercase;
            transition: transform 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }


        .img-decor {
            position: absolute;
            z-index: 0;
            transition: transform 0.3s ease;
            height: auto;
        }

        .img-decor.daun {
            top: 120px;
            left: -190px;
            width: 30%;
            transform: rotate(5deg);
        }

        .img-decor.daun2 {
            top: 130px;
            right: -190px;
            width: 30%;
            transform: rotate(-5deg);
        }

        .img-decor.risol {
            bottom: -180px;
            right: -250px;
            /* opacity: 0.9; */
            width: 50%;
            transform: rotate(-10deg);
        }

        .img-decor.beff {
            top: 155px;
            right: -180px;
            width: 27%;
            /* opacity: 0.9; */
            transform: rotate(20deg);
        }

        .img-decor.tomat {
            top: -185px;
            left: -55px;
            width: 25%;
            /* opacity: 0.9; */
            transform: rotate(25deg);
        }

        body {
            overflow-x: hidden;
        }

        .img-decor.daun3 {
            top: -140px;
            right: -10px;
            width: 25%;
            /* opacity: 0.9; */
            transform: rotate(-25deg);
        }
        .img-decor.sate {
            top: 140px;
            left: 35px;
            width: 45%;
            transform: rotate(20deg);
        }

        .footer-left {
    font-size: 50px;
    font-weight: bold;
    font-family: 'Righteous', sans-serif;
    text-transform: uppercase;
}

.footer-orange {
    color: #FECB05;
}

.footer-yellow {
    color: #FE8502;
}

.footer-right a {
    color: white;
    text-decoration: none;
    font-family: 'Righteous', sans-serif;
    transition: color 0.3s ease;
}

.footer-right a:hover {
    color: #FECB05;
    text-decoration: none;
}

.social-icons i {
    color: white;
}

    </style>
</head>

<body>
    @include('front.layout.navbar')

    <div style="background-color: #D99C59;">
        <header class="py-5 border-bottom" style="background-color: #D99C59; min-height: 75vh;">
            <div class="container">
                <img src="{{ asset('front/img/y.jpg') }}" alt="daun" class="img-decor sate">
                <div class="text-center my-5" data-aos="fade-down">
                    <p class="desc lead mb-0" style="color: white; font-family: 'Righteous', sans-serif;">Temukan kategori menarik di setiap artikel</p>
                    <div class="cuny-wrapper">
                        <span class="cuny-t">KATEGORI</span>
                    </div>
                    <!-- Tambahkan gambar ilustrasi -->
                    <img src="{{ asset('front/img/y.jpg') }}" alt="risol" class="img-decor risol">
                    <img src="{{ asset('front/img/ki.jpg') }}" alt="daun" class="img-decor daun">
                    <img src="{{ asset('front/img/ku.jpg') }}" alt="daun" class="img-decor daun2">
                    <img src="{{ asset('front/img/ko.jpg') }}" alt="daun" class="img-decor daun3">
                    <img src="{{ asset('front/img/ke.jpg') }}" alt="daun" class="img-decor tomat">
                    {{-- <img src="{{ asset('front/img/daun3.jpg') }}" alt="beff" class="img-decor beff"> --}}
                </div>
            </div>
        </header>
    </div>

    <div id="konten" style="margin-top: 100px">
        @yield('content')
    </div>

    <footer class="py-5" style="background-color: #D99C59; margin-top: 50px">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <!-- Kiri: Teks -->
            <div class="footer-left d-flex">
                <span class="footer-orange">SELAMAT&nbsp;</span>
                <span class="footer-yellow">MEMBACA</span>
            </div>

            <!-- Kanan: Ikon dan link -->
            <div class="footer-right text-end">
                <div class="social-icons mb-2">
                    <a href="https://www.youtube.com/" class="me-2"><i class="fab fa-youtube fa-lg"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
                <div class="footer-links">
                    <a href="{{ url('/about') }}" class="me-3" style="color: white; font-family: 'Righteous', sans-serif;">Tentang Kami</a>
                    <a href="{{ url('/contact') }}" style="color: white; font-family: 'Righteous', sans-serif;">Kontak Kami</a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('js')
</body>

</html>
