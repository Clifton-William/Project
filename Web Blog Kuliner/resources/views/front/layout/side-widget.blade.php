<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Cari</div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="cari artikel..." />
                    <button class="btn" style="background-color: #FE8502; color: white;" id="button-search"
                        type="submit">Go!</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Kategori</div>
        <div class="card-body">
            <div class="d-flex flex-wrap gap-1">
                @foreach ($categories as $item)
                    <a href="{{ url('category/' . $item->slug) }}" class="btn btn-sm text-white px-2 py-1"
                        style="background-color: #FFB600; color: white; font-size: 0.85rem; border-radius: 5px;">
                        {{ $item->name }} {{ $item->articles_count }}
                    </a>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Side widget -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Iklan</div>
        <div class="card-body">
            <a href="https://www.mcdonalds.co.jp/en/menu/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('front/img/hoho.gif') }}"
                    {{-- src="{{ $config['ads_widget'] }}" --}} alt="ads_widget" class="img-fluid" width="100%">
            </a><strong>マクドナルド </strong> allergen information only covers 8 ingredients which must be indicated on the
            label and 20 which are recommended
        </div>
    </div>

    <!-- Popular widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Artikel teratas</div>
        <div class="card-body">
            @foreach ($popular_posts as $item)
                <div class="card mb-2">
                    <div class="row g-0 align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('storage/back/thumbnail/' . $item->img) }}" alt="{{ $item->title }}"
                                class="img-fluid rounded" style="width: 100px; height: 75px; object-fit: cover;">
                        </div>

                        <div class="col-8">
                            <div class="card-body p-2">
                                <p class="card-title">
                                    <a href="{{ url('p/' . $item->slug) }}" style="text-decoration: none; color: #FE8502;">
                                        {{ $item->title }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
