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

        .apa {
            margin-right: -170px;
        }

        .baca {
            margin-left: 87px;

        }

        .yukbaca-text {
            position: absolute;
            top: -10px;
            right: 38px;
            font-family: 'Righteous', sans-serif;
            font-size: 120px;
            color: #FE8502;
            font-weight: bold;
            line-height: 0.9;
        }


        .yukbaca-di {
            position: absolute;
            right: 230px;
            top: 35px;
            font-family: 'Dancing Script', cursive;
            font-size: 80px;
            color: #FFB600;
        }
        .wave-text span {
    display: inline-block;
    animation: wave 2s ease-in-out infinite;
    font-size: inherit; /* biar ikut ukuran font dari .baca */
}

.wave-text span:nth-child(1) {
    animation-delay: 0s;
}
.wave-text span:nth-child(2) {
    animation-delay: 0.2s;
}
.wave-text span:nth-child(3) {
    animation-delay: 0.4s;
}
.wave-text span:nth-child(4) {
    animation-delay: 0.6s;
}

@keyframes wave {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
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
            animation: float 4s ease-in-out infinite;
        }
        .img-decur {
            position: absolute;
            z-index: 0;
            transition: transform 0.3s ease;
            height: auto;
        }
        .img-decor.f {
            top: -20px;
            left: 420px;
            width: 8%;
            transform: rotate(17deg);
        }

        .img-decor.l {
            bottom: -350px;
            left: 25px;
            width: 10%;
            transform: rotate(70deg);
        }

        .img-decor.k {
            bottom: -350px;
            right: 525px;
            width: 9%;
                }

                .img-decur.o {
            bottom: -377px;
            left: 20px;
            width: 55%;
            /* opacity: 0.9; */
        }

        .img-decur.ki {
            bottom: -420px;
            right: -150px;
            width: 17%;
            transform: rotate(-20deg);
        }

        .img-decur.ku {
            bottom: -410px;
            left: -165px;
            width: 16%;
            transform: rotate(17deg);
        }

        .img-decur.ke {
            bottom: -20px;
            right: -150px;
            width: 17%;
            transform: rotate(0deg);
        }

        .img-decur.y {
            bottom: -160px;
            right: -120px;
            width: 140%;
            transform: rotate(-120deg);
                }

                .img-decur.d {
            bottom: -290px;
            left: -130px;
            width: 15%;
            /* opacity: 0.9; */
            transform: rotate(20deg);
        }

        @keyframes float {
    0% { transform: translateY(0) rotate(var(--rotate, 0deg)); }
    50% { transform: translateY(-10px) rotate(var(--rotate, 0deg)); }
    100% { transform: translateY(0) rotate(var(--rotate, 0deg)); }
}

.img-decor.f { top: -20px; left: 420px; width: 8%; --rotate: 17deg; }
.img-decor.l { bottom: -350px; left: 25px; width: 10%; --rotate: 70deg; }
.img-decor.k { bottom: -350px; right: 525px; width: 9%; --rotate: 0deg; }

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
                            {{-- <img src="{{ asset('front/img/y.jpg') }}" alt="daun" class="img-decur y"> --}}

                            <div class="apa">APA</div>
                            <div class="yukbaca-di">itu</div>
                            <div class="baca glitch-text wave-text">
                                <span>C</span><span>U</span><span>N</span><span>Y</span>
                            </div>


                            <p class="lol lead mb-0" style="color: white;">Ayo kenali cuny lebih baik lagi</p>
                        </div>
                    </div>
                    <img src="{{ asset('front/img/f.jpg') }}" alt="daun" class="img-decor f">
                    <img src="{{ asset('front/img/o.jpg') }}" alt="daun" class="img-decur o">
                    <img src="{{ asset('front/img/l.jpg') }}" alt="daun" class="img-decor l">
                    {{-- <img src="{{ asset('front/img/d.jpg') }}" alt="daun" class="img-decur d"> --}}
                    <img src="{{ asset('front/img/k.jpg') }}" alt="daun" class="img-decor k">
                    {{-- <img src="{{ asset('front/img/ku.jpg') }}" alt="daun" class="img-decur ku">
                    <img src="{{ asset('front/img/ki.jpg') }}" alt="daun" class="img-decur ki"> --}}


                </div>
            </div>
        </header>
    </div>

    <div id="konten" style="margin-top: 50px">
        @yield('content')
    </div>

    <footer class="py-5" style="background-color: #D99C59; margin-top: 50px">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="footer-left d-flex">
                <span class="footer-orange">SELAMAT&nbsp;</span>
                <span class="footer-yellow">MEMBACA</span>
            </div>

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
