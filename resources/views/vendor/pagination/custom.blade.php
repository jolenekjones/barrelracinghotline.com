<style>
    .page-item.active .page-link {
    background-color: var(--bs-dark) !important;
    border-color: var(--bs-dark) !important;
    color: var(--bs-light) !important;
}
</style>
@if ($paginator->hasPages())
    <ul class="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span><i data-lucide="chevron-left"></i> Prev</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i data-lucide="chevron-left"></i> Prev
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Dots --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    Next <i data-lucide="chevron-right"></i>
                </a>
            </li>
        @else
            <li class="disabled">
                <span>Next <i data-lucide="chevron-right"></i></span>
            </li>
        @endif

    </ul>
@endif
