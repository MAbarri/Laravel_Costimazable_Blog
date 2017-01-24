
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{ Config::get('settings')->logo }}" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">

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
            </div>
        </div>
