<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
	{{HTML::style('bower_components/foundation/css/foundation.css')}}
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			@yield('content')
  		</div>
  	</div>
</body>
</html>
