@extends('layouts.application')

@section('title'){{ getTitle() }}@endsection
@section('description'){{ getDescription() }}@endsection

@section('content')
	<section id="content">
		<div class="row">
			<div class="col-lg-12">
			<div class="col-lg-8">
				<div class="searchtitle">
				<p class="lead">{{ count($pages) }} result(s) found for '{{ $search }}' term</p>
				</div>


	        @if(count($pages))
					@foreach($pages as $page)

				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#">{{ $page->title }}</a></h3>
							</div>
						</div>
						<p>
							 {{ $page->description }}
						</p>
						<div class="bottom-article">
							<a href="/page/{{$page->slug}}" class="readmore pull-right">Continue reading <i class="fa fa-angle-right"></i></a>
						</div>
				</article>
					@endforeach
	  			@endif
		</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form action="/search">
					  <div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search..">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="cat">
					@if(count(Session::get('current_lang')->pages))
					  @foreach(Session::get('current_lang')->pages->toHierarchy() as $node)
					    @if($node->active)
					    <li>
					      {!! renderMenuNode($node) !!}
					    </li>
					    @endif
					  @endforeach
					@endif
					</ul>
				</div>

				@if(count($popularSeaches))
				<div class="widget">
					<h5 class="widgetheading">Popular Searchs</h5>
					<ul class="tags">
							@foreach($popularSeaches as $oneSearch)
							<li><a href="#">{{ $oneSearch->value }}</a></li>
							@endforeach
					</ul>
				</div>
				@endif

				</aside>
			</div>
			</div>
		</div>
	</section>
@endsection
