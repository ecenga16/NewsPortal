<ul class="pagination justify-content-end pagination-sm">
    @if ($paginator->onFirstPage())
    <li class="page-item disabled"><span class="page-link">Previous</span></li>
    @else
    <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">Previous</a></li>
    @endif

    @for ($i = 1; $i <= min(4, $paginator->lastPage()); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
            <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
        </li>
        @endfor

        @if ($paginator->lastPage() > 4)
        <li class="page-item disabled"><span class="page-link">...</span></li>
        @for ($i = $paginator->lastPage() - 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
            </li>
            @endfor
            @endif

            @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">Next</a></li>
            @else
            <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif
</ul>