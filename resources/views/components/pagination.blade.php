<div class="pagination-wrapper">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if ($items->currentPage() > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $items->url(1) }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @endif

            @for ($i = 1; $i <= $items->lastPage(); $i++)
                <li class="page-item {{ $items->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $items->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if ($items->currentPage() < $items->lastPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $items->url($items->currentPage() + 1) }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
