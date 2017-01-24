<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="og:title" content="@yield('title')" >
    <meta name="twitter:title" content="@yield('title')">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">
    <link rel="stylesheet" type="text/css" href="{{ url( elixir('css/application.css') ) }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <!-- css -->
    <link href="{{ url( elixir('css/sailor/bootstrap.min.css') ) }}" rel="stylesheet" />
    <link href="{{ url( elixir('css/sailor/flexslider.css') ) }}" rel="stylesheet" media="screen" />
    <link href="{{ url( elixir('css/sailor/cubeportfolio.min.css') ) }}" rel="stylesheet" />
    <link href="{{ url( elixir('css/sailor/style.css') ) }}" rel="stylesheet" />

    <link href="{{ url( elixir('css/sailor/theme.css') ) }}" rel="stylesheet" />
    <!-- Theme skin -->
    <link id="t-colors" href="{{ url( elixir('css/sailor/skins/default.css') ) }}" rel="stylesheet" />

    	<!-- boxed bg -->
      <link id="t-bodybg" href="{{ url( elixir('css/sailor/bodybg/bg10.css') ) }}" rel="stylesheet" type="text/css" />
      <link href="{{ url( elixir('js/sailor/google-code-prettify/prettify.css') ) }}" rel="stylesheet" />
      <link href="{{ url( elixir('css/sailor/font-awesome.css') ) }}" rel="stylesheet" />
      <link href="{{ url( elixir('css/sailor/custom-fonts.css') ) }}" rel="stylesheet" />
      <link href="{{ url( elixir('css/sailor/animate.css') ) }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
@include('partials.application.top')
<div class="container">
        @yield('content')
</div>
@include('partials.application.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>


<script src="{{ url( elixir('js/sailor/jquery.min.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/modernizr.custom.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/jquery.easing.1.3.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/bootstrap.min.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/flexslider/jquery.flexslider-min.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/flexslider/flexslider.config.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/jquery.appear.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/stellar.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/classie.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/uisearch.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/jquery.cubeportfolio.min.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/google-code-prettify/prettify.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/animate.js') ) }}"></script>
<script src="{{ url( elixir('js/sailor/custom.js') ) }}"></script>
<!-- <script src="{{ url( elixir('js/application.js') ) }}" type="text/javascript"></script> -->
<script type="text/javascript">


$('a[href*=#]').click(function(event){
  try {
      $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 500);
  }
  catch(err) {
  }
    event.preventDefault();
});
</script>
</body>
</html>
