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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

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

        .yukbaca-wrapper {
            position: relative;
        }

        .baca {
            margin-left: 87px;
        }

        .yukbaca-text {
            position: absolute;
            top: -10px;
            left: -35px;
            font-family: 'Righteous', sans-serif;
            font-size: 120px;
            color: #FE8502;
            font-weight: bold;
            line-height: 0.9;
        }


        .yukbaca-di {
            position: absolute;
            left: 330px;
            top: 45px;
            font-family: 'Dancing Script', cursive;
            font-size: 80px;
            color: #FFB600;
        }

        .cuny-logo {
            height: 100px;
            transition: transform 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        .lol {
            position: relative;
            top: 10px;
            left: 45px;
            color: white;
            font-size: 20px;
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

        .img-decor.a {
            top: -80px;
            right: 10px;
            width: 37%;
            transform: rotate(17deg);
        }

        .img-decor.b {
            bottom: -300px;
            right: 380px;
            width: 17%;
            transform: rotate(70deg);
        }

        .img-decor.c {
            bottom: -100px;
            right: 390px;
            width: 13%;
            transform: rotate(-10deg);
        }

        .img-decor.d {
            bottom: -130px;
            left: 300px;
            width: 15%;
            /* opacity: 0.9; */
            transform: rotate(20deg);
        }

        .img-decor.e {
            top: -160px;
            left: -45px;
            width: 20%;
            /* opacity: 0.9; */
        }

        .img-decor.y {
            top: -90px;
            right: 100px;
            width: 50%;
            /* opacity: 0.9; */
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
                    <div class="yukbaca-wrapper">
                        <div class="yukbaca-text">
                            <div>YUK</div>
                            <div class="yukbaca-di">di</div>
                            <div class="baca">BACA</div>

                            <p class="lol lead mb-0" style="color: white;">Baca blog seputar kuliner terbaik</p>
                        </div>
                    </div>
                    <!-- Tambahkan gambar ilustrasi -->
                    <img src="{{ asset('front/img/y.jpg') }}" alt="daun" class="img-decor y">
                    <img src="{{ asset('front/img/a.jpg') }}" alt="daun" class="img-decor a">
                    <img src="{{ asset('front/img/b.jpg') }}" alt="daun" class="img-decor b">
                    <img src="{{ asset('front/img/c.jpg') }}" alt="daun" class="img-decor c">
                    <img src="{{ asset('front/img/d.jpg') }}" alt="daun" class="img-decor d">
                    <img src="{{ asset('front/img/e.jpg') }}" alt="daun" class="img-decor e">

                </div>
            </div>
        </header>
    </div>

    <div id="konten" style="margin-top: 50px">
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
