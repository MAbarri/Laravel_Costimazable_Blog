<footer>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-lg-4">
      <div class="widget">
        <h4>{{ trans('application.contact_us') }}</h4>
        <address>
        <strong>{{ Config::get('settings')->owner }}</strong><br>
         {{Config::get('settings')->address }}</address>
        <p>
          <i class="icon-phone"></i>{{Config::get('settings')->phoneNumber }}<br>
          <i class="icon-envelope-alt"></i> {{Config::get('settings')->email }}
        </p>
      </div>
    </div>
    <div class="col-sm-4 col-lg-4">
      <div class="widget">
        <h4>{{ trans('application.pages') }}</h4>
        <ul class="link-list">
        @if(count(Session::get('current_lang')->pages))
            <li>
                @foreach(Session::get('current_lang')->pages->toHierarchy() as $node)
                    {!! renderMenuNode($node) !!}
                @endforeach
            </li>
        @endif
        </ul>
      </div>
    </div>
    <div class="col-sm-4 col-lg-4">
      <div class="widget">
        <h4>{{ trans('application.newsletter_title') }}</h4>
        <p>{{ trans('application.newsletter_description') }}</p>
        <form class="" action="/subscribe" method="post">
                  <div class="form-group multiple-form-group input-group">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                      <input type="email" name="email" class="form-control">
                      <span class="input-group-btn">
                          <button type="submit" class="btn btn-theme btn-add">{{ trans('application.newsletter_subscribe') }}</button>
                      </span>
                  </div>
        </form>
        @if ($errors->any())
          @if ( $errors->first() == "success")
            <div class="alert alert-success">
							<strong> {{ trans('application.subscribe_success') }} </strong>{{ trans('application.subscribe_success_msg') }}
						</div>
            @elseif ( $errors->first() == "exists")
            <div class="alert alert-danger">
							<strong>{{ trans('application.subscribe_fail') }}</strong>{{ trans('application.subscribe_fail_msg') }}
						</div>
            @endif
        @endif
      </div>

      <p><strong>{{ trans('application.language') }}</strong>
      {{ Session::get('current_lang')->title }}</p>
      @include('partials.common.languages', ['languages' => Config::get('languages'), 'route' => 'app.language.change' ])
    </div>
  </div>
</div>
<div id="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="copyright">
          <p>&copy; {{ trans('application.copyright') }}</p>
                      <div class="credits">
                          {{ trans('application.copyright1') }}<a href="#">{{ trans('application.copyright2') }}</a>
                      </div>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="social-network">
          @if(!empty(Config::get('settings')->facebook))
          <li><a target="_blank" href="{{ Config::get('settings')->facebook }}" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          @endif
          @if(!empty(Config::get('settings')->twitter))
          <li><a target="_blank" href="{{ Config::get('settings')->twitter }}" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          @endif
          @if(!empty(Config::get('settings')->email))
          <li><a target="_blank" href="mailto:{{ Config::get('settings')->email }}" data-placement="top" title="Email"><i class="fa fa-envelope"></i></a></li>
          @endif
          <!-- <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>

<script>
    @if(!empty(Config::get('settings')->analytics_id))
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '{{ Config::get('settings')->analytics_id }}', 'auto');
        ga('send', 'pageview');
    @endif
    @if(!empty(Config::get('settings')->disqus_shortname))
        var disqus_shortname = '{{ Config::get('settings')->disqus_shortname }}',
            disqus_config = function () {
                this.language = "{{ session('language_code') }}";
            };
        (function() {
            var d = document, s = d.createElement('script');
            s.src = '//'+ disqus_shortname + '.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    @endif
</script>
