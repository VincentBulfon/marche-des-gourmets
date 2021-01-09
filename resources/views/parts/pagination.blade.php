@if($paginator->hasPages())
<div
	class="pagination"
	id="paginate"
>
	@if($paginator->onFirstPage())
	<a
		class="pagination__previous"
		disabled
	>Précédent</a>
	@else
	<a
		href="{{$paginator->previousPageUrl()}}#paginate"
		rel="prev"
		class="pagination__previous"
	>Précédent</a>
	@endif
	@if($paginator->previousPageUrl())
	@if(($paginator->currentPage() - 2) > 0)
	<a
		href="{{$paginator->Url($paginator->currentPage() - 2)}}#paginate"
		class="page"
	>{{$paginator->currentPage() - 2}}</a>
	@endif
	<a
		href="{{$paginator->previousPageUrl()}}"
		class="page"
	>{{$paginator->currentPage() - 1}}</a>
	@endif
	<a
		href="{{$paginator->Url($paginator->currentPage())}}#paginate"
		class="page page--current"
	>{{$paginator->currentPage()}}</a>
	@if($paginator->hasMorePages())
	<a
		href="{{$paginator->nextPageUrl()}}"
		class="page"
	>{{$paginator->currentPage() + 1}}</a>
	@endif
	@if($paginator->lastPage() >= ($paginator->currentPage() + 2))
	<a
		href="{{$paginator->Url($paginator->currentPage() + 2)}}#paginate"
		class="page"
	>{{$paginator->currentPage() + 2}}</a>
	@endif
	@if($paginator->hasMorePages())
	<a
		href="{{ $paginator->nextPageUrl() }}#paginate"
		class="pagination__next"
	>Suivant</a>
	@else
	<a
		disabled
		class="pagination__next"
	>Suivant</a>
	@endif

</div>
@endif