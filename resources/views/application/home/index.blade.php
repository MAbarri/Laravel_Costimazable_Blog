@extends('layouts.application')

@section('title'){{ getTitle() }}@endsection
@section('description'){{ getDescription() }}@endsection

@section('content')
		<div class="row">
			<div class="col-lg-12">
        @if(count($slides))
				<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
        			@foreach($slides as $slide)
              <li>
                <img src="{{ $slide->image }}" alt="{{ $slide->title }}" />
                <div class="flex-caption">
                    <h3>{{ $slide->title }}</h3>
					          <p>{{ $slide->description }}</p>
					          <a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
        			@endforeach
            </ul>
        </div>
				<!-- end slider -->
  			@endif
        @if(count($homeSections))
				@foreach($homeSections as $section)
				<div id="{{ $section -> title }}">
					    {!! html_entity_decode($section->content) !!}
					</div>
				@endforeach
  			@endif

			</div>
		</div>
@endsection
