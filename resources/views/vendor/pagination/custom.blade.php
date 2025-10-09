<style>
    li.disabled {
        color: #ccc;
        pointer-events: none;
        cursor: not-allowed;
    }
</style>
@if ($paginator->hasPages())
    <ul class="justify-center">
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a href="#"><i class="icon-keyboard_arrow_left"></i></a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"><i class="icon-keyboard_arrow_left"></i></a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">
                    {{ $element }}
                </li>
            @elseif (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            {{ $page }}
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"><i class="icon-keyboard_arrow_right"></i></a>
            </li>
        @else
            <li class="disabled">
                <i class="icon-keyboard_arrow_right"></i>
            </li>
        @endif
    </ul>
@endif
