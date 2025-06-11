<nav class="navbar navbar-expand-lg navbar-dark py-3" style="background-color: #D99C59;">
    <style>
        .navbar-nav .nav-link {
            color: #000 !important;
            font-weight: normal;
            transition: 0.3s;
            font-size: 15px;
            font-weight: 580;
            border-radius: 5px;
        }

        .navbar-nav .nav-link:hover{
            background-color: #BF8F5B;
        }
        .navbar-nav .nav-link.active {
            background-color: #C17B29;
            /* saat hover: hitam */
            color: #fff !important;
            /* teks putih */
        }

        .navbar-brand-centered {
            font-size: 30px;
            font-weight: bold;
            color: white;
            text-align: center;
            width: 100%;
        }

        .navbar-nav {
            justify-content: center;
            width: 100%;
        }

        .dropdown-menu {
            background-color: #C17B29;
            /* Warna latar belakang dropdown */
            border: 1px solid rgba(0, 0, 0, 0.15);
        }

        .dropdown-menu .dropdown-item {
            color: #000000;
            /* Warna teks */
            transition: 0.3s;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #C17B29;
            /* Saat hover */
            color: #fff;
        }
 
    </style>

    <div class="container flex-column">
        <!-- CUNY Title Centered -->
        <div class="navbar-brand-centered " style="margin-top: 20px;">CUNY</div>

        <!-- Nav Links Below -->
        <div class="collapse navbar-collapse justify-content-center" style="margin-left: 65px; margin-top: 40px;">
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-5">
                    <a class="nav-link cool-hover {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">BERANDA</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('articles') ? 'active' : '' }}"
                        href="{{ url('/articles') }}">ARTIKEL</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">TENTANG</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                        href="{{ url('/contact') }}">KONTAK</a>
                </li>

                <!-- Dropdown Kategori -->
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        KATEGORI
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category_navbar as $item)
                            <li><a class="dropdown-item"
                                    href="{{ url('category/' . $item->slug) }}">{{ $item->name }}</a></li>
                        @endforeach
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('all-category') }}">semua</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
