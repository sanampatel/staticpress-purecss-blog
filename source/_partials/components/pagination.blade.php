<nav aria-label="..." class="pagination mt-10">
	@if ($previous = $pagination->previous)
		{{-- Previous --}}
		<a
			href="{{ $previous }}"
			title="Previous Page"
			class="pagination-link"
		>Previous</a>
	@endif
	@foreach ($pagination->pages as $pageNumber => $path)
		<a
		href="{{ $path }}"
		title="Go to Page {{ $pageNumber }}"
		class="pagination-link {{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}"
	>{{ $pageNumber }}</a>
	@endforeach
	@if ($next = $pagination->next)
		{{-- Next --}}
		<a
			href="{{ $next }}"
			title="Next Page"
			class="pagination-link"
		>Next</a>
	@endif
</nav>