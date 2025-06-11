<button class="btn btn-primary d-md-none menu-toggle">☰</button>

<div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @if (request()->routeIs('home'))
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-secondary">Keluar</a>
            </div>
        </div>
    @endif
</div>
