<nav class="col-md-2 sidebar" style="background-color: #1e2f97;">
    <div class="sidebar-sticky">
        <h5 class="text-warning text-center my-3">                <img src="{{ asset('book.png') }}" alt="Logo Buku" style="width: 30px; height: 30px; margin-right: 10px;"><strong>Literasi Raya</strong></h5>
        <ul class="nav flex-column">
            <style>
                .sidebar .nav-link.active {
                    background-color: #17a2b8 !important;
                    color: #000000 !important; /* Biar teksnya tetap putih dan kontras */
                }
            </style>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('member') ? 'active' : '' }}" href="{{ route('member') }}">
                    <span data-feather="users"></span>
                    Kelola Anggota
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('buku') ? 'active' : '' }}" href="{{ route('buku') }}">
                    <span data-feather="book"></span>
                    Kelola Buku
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('pinjam') ? 'active' : '' }}" href="{{ route('pinjam') }}">
                    <span data-feather="file"></span>
                    Pinjam Buku
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('kembali') ? 'active' : '' }}" href="{{ route('kembali') }}">
                    <span data-feather="check-circle"></span>
                    Pengembalian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('kategori') ? 'active' : '' }}" href="{{ route('kategori') }}">
                    <span data-feather="tag"></span>
                    Kelola Kategori
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('user') ? 'active' : '' }}" href="{{ route('user') }}">
                    <span data-feather="user"></span>
                    Kelola Pengguna
                </a>
            </li>
        </ul>

        <!-- Tambahkan gif di bawah ul -->
        <div class="text-center">
            <img src="{{ asset('buku.gif') }}" alt="Gif Gugu" style="width: 220px; margin-top: 3px;">
        </div>
    </div>
</nav>
