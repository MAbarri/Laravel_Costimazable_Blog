<html>
<head>
  <link href="{{ url( elixir('css/sailor/bootstrap.min.css') ) }}" rel="stylesheet" />
  <link href="{{ url( elixir('js/jkit/css/jkit.css') ) }}" rel="stylesheet" />
  <link href="{{ url( elixir('css/sailor/font-awesome.css') ) }}" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
  <style media="screen">
    .lato-font{
            font-family: 'Lato';
            font-weight: bold;
    }
  </style>
</head>
  <body>
	<div>
		<h1 class="lato-font">Woops</h1>
		<div>
			<div class="parallax-container" data-jkit="[parallax:strength=1;axis=both]">
				<div class="parallax parallax1">500</div>
				<div class="parallax parallax2">404</div>
				<div class="parallax parallax3">Not found</div>
			</div>
		</div>
	</div>

    <script src="{{ url( elixir('js/sailor/jquery.min.js') ) }}"></script>
    <script src="{{ url( elixir('js/sailor/bootstrap.min.js') ) }}"></script>
    <script src="{{ url( elixir('js/jkit/jquery.easing.1.3.js') ) }}"></script>
    <script src="{{ url( elixir('js/jkit/jquery.jkit.1.2.16.min.js') ) }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    	$('body').jKit();
    });
    </script>
  </body>
</html>
