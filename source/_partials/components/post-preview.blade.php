{{-- Featured post --}}
@if($post->featured)
	<div class="pure-u-1 pure-u-md-3-4 pure-u-lg-3-4">
		<section class="post">
			<div class="post-header">
				<h2 class="post-title">
					<a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="post-title">
						{{ ucwords($post->title) }}	
					</a>
				</h2>

				<p class="post-meta">
					<span>{{ date('F j, Y', $post->date) }}</span>
		           	<span>•</span>
		           	<span>Posts under 
		           		<a href="/categories/{{ $post->categories }}" title="View posts in - {{ $post->categories }}" class="post-category post-category-pure uppercase">
							{{ ucwords($post->categories) }}	
						</a>
					</span>
	            </p>
	        </div>

	        <div class="post-description">
	            <p>
	                {!! $post->excerpt(200) !!}
	            </p>
	        </div>
	    </section>
	</div>

	<div class="pure-u-1 pure-u-md-1-5 pure-u-lg-1-5 margin-top-large">
		
		{{-- Featured image --}}
		@if($post->image)
			<img width="100%" height="100%" alt="{{ basename($post->image) }}" src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}" class="featured-img">
		@endif
		{{-- Featured image end --}}

	</div>
	<hr>
@else
{{-- Featured post end --}}


{{-- Posts --}}
<section class="post">
    <div class="post-header">
        <h2 class="post-title">
        	<a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="post-title">
				{{ ucwords($post->title) }}	
			</a>
        </h2>
        <p class="post-meta">
           	<span>{{ date('F j, Y', $post->date) }}</span>
           	<span>•</span>
           	<span>Posts under 
           		<a href="/categories/{{ $post->categories }}" title="View posts in - {{ $post->categories }}" class="post-category post-category-pure uppercase">
					{{ ucwords($post->categories) }}	
				</a>
			</span>
        </p>
    </div>

    <div class="post-description">
        <p>
            {!! $post->excerpt(200) !!}
        </p>
    </div>
</section>

@if (! $loop->last)
	<hr>
@endif 

@endif
{{-- Posts end --}}