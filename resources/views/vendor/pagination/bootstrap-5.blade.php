<style>
    .custom-btn {
        background-color: #FE8502;
        color: white;
        border: none;
        padding: 8px 16px;
        margin: 0 5px;
        border-radius: 8px;
        transition: transform 0.2s ease, background-color 0.3s ease;
        font-size: 18px;
    }

    .custom-btn:hover {
        background-color: #e37000;
        transform: scale(1.1);
        text-decoration: none;
    }

    .custom-btn.disabled-btn {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }
</style>


@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                            rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Memperlihatkan') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('sampai') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('dari') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('hasil') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">

                    @if ($paginator->hasPages())
                        <nav class="d-flex justify-content-center">
                            <ul class="pagination mb-0">
                                {{-- Tombol Prev --}}
                                @if ($paginator->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link custom-btn disabled-btn"
                                            aria-hidden="true">&#8592;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link custom-btn" href="{{ $paginator->previousPageUrl() }}"
                                            rel="prev" aria-label="Previous">&#8592;</a>
                                    </li>
                                @endif

                                {{-- Tombol Next --}}
                                @if ($paginator->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link custom-btn" href="{{ $paginator->nextPageUrl() }}"
                                            rel="next" aria-label="Next">&#8594;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link custom-btn disabled-btn"
                                            aria-hidden="true">&#8594;</span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
