<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                    aria-current="{{ Request::is('dashboard') ? 'page' : '' }}" href="{{ url('dashboard') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('article') ? 'active' : '' }}" href="{{ url('article') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Articles
                </a>
            </li>

            @if (auth()->user()->role == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="{{ url('categories') }}">
                        <span data-feather="folder" class="align-text-bottom"></span>
                        Categories
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link {{ Request::is('config') ? 'active' : '' }}" href="{{ url('config') }}">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Config
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users') ? 'active' : '' }}" href="{{ url('users') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                    style="color: #e41f7b;">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="text-center">
        <a href="{{ asset('back/img/cute.gif') }}"><img class="card-img-top featured-img" src="{{ asset('front/img/me.jpg') }}" alt="Ola" /></a>
        <img src="{{ asset('back/img/cute.jpg') }}" alt="Gif Gugu" style="width: 220px; margin-top: 3px;">
    </div>

</nav>
