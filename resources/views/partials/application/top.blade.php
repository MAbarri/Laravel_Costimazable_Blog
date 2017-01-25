<!-- start header -->
	<header>
			<div class="top only-large-screen">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
							<div class="text-bold phone-number-margin">
								<!-- <a href="{{  route('root') }}">{{ Session::get('current_lang')->site_title }}  </a> -->
								<i class="fa fa-phone"></i>
								{{ Config::get('settings')->phoneNumber }}
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                @if(!empty(Config::get('settings')->facebook))
                <a class="social-media-costume-menu" target="_blank" href="{{ Config::get('settings')->facebook }}"><i class="fa fa-facebook"></i></a>
                @endif
                @if(!empty(Config::get('settings')->twitter))
                <a class="social-media-costume-menu" target="_blank" href="{{ Config::get('settings')->twitter }}"><i class="fa fa-twitter"></i></a>
                @endif
                @if(!empty(Config::get('settings')->email))
                <a class="social-media-costume-menu" target="_blank" href="mailto:{{ Config::get('settings')->email }}"><i class="fa fa-envelope"></i></a>
                @endif
						<div id="sb-search" class="sb-search sb-search-beside-social-media">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Click to start searching"></span>
							</form>
						</div>


						</div>
						</div>
					</div>
				</div>
			</div>
          @include('partials.menu.application')
	</header>
	<!-- end header -->
