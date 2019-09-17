@extends('_layouts.master')

@section('content')


	<div class="content pure-u-1 pure-u-md-3-4">
		
		{{-- Content --}}
		<section class="post">
			<div class="post-header">
        		<h1 class="post-title">
        			{{ ucwords($page->title) }}	
        		</h1>
        		<p class="post-meta">
					<span>{{ date('F j, Y', $page->date) }}</span>
		           	<span>•</span>
		           	<span>Posts under 
		           		<a href="/categories/{{ $page->categories }}" title="View posts in - {{ $page->categories }}" class="post-category post-category-pure uppercase">
							{{ ucwords($page->categories) }}	
						</a>
					</span>
	            </p>
	            @if ($page->image)
					<div class="margin-top-medium">
						<img width="100%" height="100%" src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}" class="featured-img">
					</div>
				@endif

				<div class="post-description">
					@yield('postContent')
				</div>

				<div class="margin-small">
					<span class="mr-1">Tags: </span>
					@if ($page->tags)
						@foreach ($page->tags as $i => $tag)
							<a href="/tags/{{ $tag }}">
								<span class="color-red tag capitalize" title="View articles in {{ $tag }}">
									{{ $tag }}
								</span>
							</a>
							@if (! $loop->last)
								,
							@endif
						@endforeach
					@endif
				</div>
				
			</div>
		</section>
		{{-- Content end --}}

		{{-- Post pagination --}}
		<nav class="padding-medium">
			<div class="inline-block text-left">
				@if ($next = $page->getNext())
					<a class="color-red" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
						&LeftArrow; {{ ucwords($next->title) }}
					</a>
				@endif
			</div>
			<div class="inline-block text-right">
				@if ($previous = $page->getPrevious())
					<a class="color-red" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
						{{ ucwords($previous->title) }} &RightArrow;
					</a>
				@endif
			</div>
		</nav>
		{{-- Post pagination end --}}

		{{-- Disqus commnet section --}}
			@include('_partials.comments')
		{{-- Disqus commnet section end --}}
	</div>

@endsection