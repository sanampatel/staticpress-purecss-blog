---
pagination:
    collection: posts
    perPage: 5 {{-- Per page pages need to display --}}
---
@extends('_layouts.master')

@section('head')
    <title>{{ $settings->setting->seotitle}} | {{ $page->sitename }}</title> 
    <meta name="keywords" content="{{ $settings->setting->seokeywords }}">
    <meta name="description" content="{{ $settings->setting->seodescription }}">
@endsection

@section('content') 

	    <div class="content pure-u-1 pure-u-md-3-4">
	        <div>

				{{-- Search bar --}}
				<div id="vue-search">
					<search></search>
				</div>
				{{-- Search bar end --}}

	            {{-- A wrapper for all the blog posts --}}
	            <div class="posts">
	            	
	                {{-- A single blog posts --}}
	                @foreach ($pagination->items as $post)
			
						@include('_partials.components.post-preview')

					@endforeach
					{{-- A single blog posts end --}}


					{{-- Pagination --}}
					<div class="margin-top-large">
						@include('_partials.components.pagination')
					</div>
					{{-- Pagination end --}}
						                
	            </div>
	            {{-- Wrapper end --}}

	        </div>
	    </div>

@endsection