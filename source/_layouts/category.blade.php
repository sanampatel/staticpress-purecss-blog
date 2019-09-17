@extends('_layouts.master')

@section('content')
	<div class="content pure-u-1 pure-u-md-3-4">
		<h2>
			Posts tagged of category '{{ ucwords($page->name()) }}'
		</h2>
		<div class="mt-12 mb-12 post-wrapper">
			@forelse (posts_filter_cat($posts, $page) as $post)
				@include('_partials.components.post-preview')
			@empty
				<p>No posts to show.</p>
			@endforelse
		</div>	
	</div>
@endsection