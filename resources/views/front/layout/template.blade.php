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
            transition: transform 0.3s ease;
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

        .cuny-wrapper:hover .cuny-t {
            transform: scale(1.1);
        }

        .cuny-wrapper:hover img {
            transform: scale(1.1) rotate(5deg);
        }

        .cuny-logo {
            height: 100px;
            transition: transform 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        .btn-mulai-baca {
            font-size: 15px;
            background-color: #C17B29;
            font-weight: 400;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 35px;
            transition: all 0.3s ease;
        }

        .btn-mulai-baca:hover {
            background-color: #f5af00;
            color: #854700;
            font-weight: 450;
        }

        .squishy-baca {
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

        .squishy-baca:hover {
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

        .squishy-baca:hover i {
            animation: bounce 1s infinite;
        }

        .btn-mulai-baca:focus,
        .btn-mulai-baca:active,
        .squishy-baca:focus,
        .squishy-baca:active {
            outline: none !important;
            box-shadow: none !important;
            border: none !important;
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
            top: 20px;
            left: -400px;
            width: 65%;
            transform: rotate(55deg);
        }

        .img-decor.daun2 {
            top: 150px;
            right: -700px;
            width: 100%;
            transform: rotate(-100deg);
        }

        .img-decor.risol {
            bottom: -220px;
            left: -250px;
            /* opacity: 0.9; */
            width: 40%;
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
            top: -220px;
            left: -75px;
            width: 25%;
            /* opacity: 0.9; */
            transform: rotate(35deg);
        }
        .img-decor.daun3 {
            top: -475px;
            right: -520px;
            width: 70%;
            /* opacity: 0.9; */
            transform: rotate(250deg);
        }
        .img-decor.sate {
            top: -220px;
            right: -90px;
            width: 15%;
            /* opacity: 0.9; */
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
                <div class="text-center my-5" data-aos="fade-down">
                    <p class="lead mb-0" style="color: white; font-family: 'Righteous', sans-serif;">Baca blog seputar kuliner terbaik</p>
                    <div class="cuny-wrapper image-decor-wrapper" style="position: relative;">
                        <span class="cuny-t">WELC</span>
                        <img src="{{ asset('front/img/logo.jpg') }}" alt="Logo" class="cuny-logo" />
                        <span class="cuny-t">ME</span>
                    </div>
                    <!-- Tambahkan gambar ilustrasi -->
                    <img src="{{ asset('front/img/daun.jpg') }}" alt="daun" class="img-decor daun">
                    <img src="{{ asset('front/img/daun2.jpg') }}" alt="daun" class="img-decor daun2">
                    <img src="{{ asset('front/img/daun3.jpg') }}" alt="daun" class="img-decor daun3">
                    <img src="{{ asset('front/img/tomat.jpg') }}" alt="daun" class="img-decor tomat">
                    <img src="{{ asset('front/img/sate.jpg') }}" alt="daun" class="img-decor sate">
                    <img src="{{ asset('front/img/risol.jpg') }}" alt="risol" class="img-decor risol">
                    <img src="{{ asset('front/img/beff.jpg') }}" alt="beff" class="img-decor beff">

                    <a href="#konten" class="btn btn-mulai-baca squishy-baca" role="button">MULAI BACA</a>
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
