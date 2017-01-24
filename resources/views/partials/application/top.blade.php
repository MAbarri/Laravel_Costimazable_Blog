<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<ul class="topleft-info">
								<li>
									<!-- <a href="{{  route('root') }}">{{ Session::get('current_lang')->site_title }}  </a> -->
									<i class="fa fa-phone"></i>
                 {{ Config::get('settings')->phoneNumber }}</li>
							</ul>
						</div>
						<div class="col-md-8">
              <ul class="nav navbar-nav navbar-right disable-navbar-paddings">
                @if(!empty(Config::get('settings')->facebook))
                <li><a target="_blank" href="{{ Config::get('settings')->facebook }}"><i class="fa fa-facebook"></i></a></li>
                @endif
                @if(!empty(Config::get('settings')->twitter))
                <li><a target="_blank" href="{{ Config::get('settings')->twitter }}"><i class="fa fa-twitter"></i></a></li>
                @endif
                @if(!empty(Config::get('settings')->email))
                <li><a target="_blank" href="mailto:{{ Config::get('settings')->email }}"><i class="fa fa-envelope"></i></a></li>
                @endif
              </ul>
						<div id="sb-search" class="sb-search">
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
          @include('partials.menu.application')
	</header>
	<!-- end header -->
