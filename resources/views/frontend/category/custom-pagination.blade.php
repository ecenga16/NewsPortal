@if ($paginator->hasPages())
<ul class="pager">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="previous disabled"><span><i class="las la-step-backward"></i></span></li>
    @else
    <li class="previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="la la-backward"
                aria-hidden="true"></i></a></li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active"><span class="active">{{ $page }}</span></li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="las la-forward"
                aria-hidden="true"></i></a></li>
    @else
    <li class="next disabled"><span><i class="las la-step-forward"></i></span></li>
    @endif
</ul>
@endif