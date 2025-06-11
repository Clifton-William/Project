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

        .yukbaca-orapper {
            position: relative;
        }

        .apa {
            margin-right: -90px;
        }

        .api {
            margin-right: -90px;
        }

        .baca {
            margin-left: 87px;

        }

        .yukbaca-text {
            position: absolute;
            top: -50px;
            right: 75px;
            font-family: 'Righteous', sans-serif;
            font-size: 120px;
            color: #FE8502;
            font-weight: bold;
            line-height: 0.9;
        }

        .yukbaca-oext {
            position: absolute;
            top: -50px;
            left: -35px;
            font-family: 'Righteous', sans-serif;
            font-size: 120px;
            color: #FE8502;
            font-weight: bold;
            line-height: 0.9;
        }


        .wave-text span {
            display: inline-block;
            animation: wave 2s ease-in-out infinite;
            font-size: inherit;
            /* biar ikut ukuran font dari .baca */
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

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }








        .btn-mulai-baca {
            font-size: 15px;
            background-color: #C17B29;
            margin-right: -90px;
            font-weight: 400;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 35px;
            transition: all 0.3s ease;
        }

        .btn-mulai-bacu {
            font-size: 15px;
            background-color: #C17B29;
            margin-right: -90px;
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
            background-color: #1877F2;
            color: #ffffff;
            box-shadow:
                0 1px 0 0 #166bda,
                0 2px 0 0 #145fc2,
                0 3px 0 0 #1253aa,
                0 4px 0 0 #104792,
                0 4px 8px 0 rgba(24, 119, 242, 0.5);

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
            background-color: #25D366;
            color: #ffffff;
            box-shadow:
                0 1px 0 0 #1ebe5d,
                0 2px 0 0 #1aa652,
                0 3px 0 0 #168f47,
                0 4px 0 0 #12783b,
                0 4px 8px 0 rgba(37, 211, 102, 0.5);
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

        .squishy-baci {
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

.squishy-baci:hover {
    transform: translateY(4px);
font-weight: 500;
background-color: #EA4335;
color: #ffffff;
box-shadow:
    0 1px 0 0 #d43b2f,
    0 2px 0 0 #bf342a,
    0 3px 0 0 #aa2d24,
    0 4px 0 0 #95251e,
    0 4px 8px 0 rgba(234, 67, 53, 0.5);

}

.squishy-baci:hover i {
    animation: bounce 1s infinite;
}

.btn-mulai-baci:focus,
.btn-mulai-baci:active,
.squishy-baci:focus,
.squishy-baci:active {
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
}

.squishy-bace {
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

.squishy-bace:hover {
    transform: translateY(4px);
font-weight: 500;
background-color: #C13584;
color: #ffffff;
box-shadow:
    0 1px 0 0 #b03077,
    0 2px 0 0 #9e2a69,
    0 3px 0 0 #8c245c,
    0 4px 0 0 #7a1e4e,
    0 4px 8px 0 rgba(193, 53, 132, 0.5);
}

.squishy-bace:hover i {
    animation: bounce 1s infinite;
}

.btn-mulai-bace:focus,
.btn-mulai-bace:active,
.squishy-bace:focus,
.squishy-bace:active {
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
}

.squishy-baco {
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

.squishy-baco:hover {
    transform: translateY(4px);
font-weight: 500;
background-color: #FBBC05;
color: #ffffff;
box-shadow:
    0 1px 0 0 #e0a904,
    0 2px 0 0 #c69604,
    0 3px 0 0 #ab8303,
    0 4px 0 0 #916f02,
    0 4px 8px 0 rgba(251, 188, 5, 0.5);

}

.squishy-baco:hover i {
    animation: bounce 1s infinite;
}

.btn-mulai-baco:focus,
.btn-mulai-baco:active,
.squishy-baco:focus,
.squishy-baco:active {
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
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



        .img-decor.jo {
            position: absolute;       /* tambahkan ini */
            z-index: 0;
            top: -300px;
            right: -120px;
            width: 65%;
            /* opacity: 0.9; */
            transform: rotate(180deg);
            pointer-events: none;
        }

        .img-decor.po {
            bottom: -377px;
            left: -120px;
            width: 65%;
            /* opacity: 0.9; */
        }

        .img-decor.lo {
            bottom: -377px;
            left: 340px;
            width: 43%;
            /* opacity: 0.9; */
        }

        .cuny-logo {
            position: absolute;
            margin-left: -25px;
            height: 100px;
            transition: transform 0.3s ease;
        }
        .cuny-k {
            margin-left: -5px;
        }
        .cuny-n {
            margin-left: 75px;
        }
        .img-decor.d {
            top: -115px;
            right: 230px;
            width: 65%;
            /* transform: rotate(20deg); */
        }
        .img-decor.hkk {
            top: -130px;
            right: 120px;
            width: 15%;
            transform: rotate(50deg);
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
                    {{-- <img src="{{ asset('front/img/y.jpg') }}" alt="daun" class="img-decor d"> --}}
                    <img src="{{ asset('front/img/lo.jpg') }}" alt="daun" class="img-decor lo">
                    <img src="{{ asset('front/img/po.jpg') }}" alt="daun" class="img-decor po">
                    <img src="{{ asset('front/img/jo.jpg') }}" alt="daun" class="img-decor jo">
                    <div class="yukbaca-wrapper">
                        <div class="yukbaca-text">
                            <div class="apa">KA</div>
                            <div class="baca glitch-text wave-text">
                                MI
                            </div>
                            <a href="https://www.facebook.com" class="btn btn-mulai-baca squishy-baca" role="button"
                                target="_blank">Facebook</a>
                        </div>
                    </div>
                    <div class="yukbaca-orapper">
                        <div class="yukbaca-oext">
                            <div class="api">
                                <span class="cuny-k">K</span>
                                <img src="{{ asset('front/img/logo.jpg') }}" alt="Logo" class="cuny-logo" />
                                <span class="cuny-n">N</span>
                            </div>
                            <div class="baca glitch-text wave-text">
                                TAK
                            </div>
                            <a href="https://www.whatsapp.com" class="btn btn-mulai-bacu squishy-bacu" role="button"
                                target="_blank">WhatsApp</a>
                        </div>
                    </div>
                    <img src="{{ asset('front/img/hkk.jpg') }}" alt="daun" class="img-decor hkk">

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
