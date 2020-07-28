<div style="text-align: center; margin-top:30px;"> 
{{$posts->links()}}
</div>
<div class="pagination-plugin">
    <ul class="pagination-list">
    <!-- {{$posts->links()}} -->
    <!-- @if ($posts->hasPages())
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if ($posts->onFirstPage())
                <li class="prev disabled"><a href="#">Previous</a></li>
            @else
                <li class="next"><a href="{{ $posts->previousPageUrl() }}"> Previous</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($posts as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-numbers disabled"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($posts as $page => $url)
                        @if ($page == $posts->currentPage())
                            <li class="page-numbers current"><a href="#">{{ $page }}</a></li>
                        @else
                            <li class="page-numbers"><a href="{{ $url }}">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($posts->hasMorePages())

                <li class="next"><a href="{{ $posts->nextPageUrl() }}">Next</a></li>
            @else

                <li class="next disabled"><a href="#">Next</a></li>
            @endif
        </ul>
    @endif -->

        <!-- <ul class="pagination-list">
            <li class="prev"><a href="#">Prev</a></li>
            <li class="page-numbers"><a href="#">1</a></li>
            <li class="page-numbers current"><a href="#">2</a></li>
            <li class="page-numbers"><a href="#">3</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul> -->
</div>