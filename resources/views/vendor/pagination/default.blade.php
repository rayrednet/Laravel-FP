@if ($paginator->hasPages())
    <nav>
        <ul class="flex justify-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md cursor-default">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">
                        <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md cursor-default">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <span class="px-4 py-2 bg-green-700 text-white rounded-md cursor-default">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md cursor-default">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
