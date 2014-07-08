<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
	{{HTML::style('bower_components/foundation/css/foundation.css')}}
	{{HTML::style('style.css')}}
  </head>
  <body>
	  <nav class="top-bar">
		  <ul class="title-area">
			  <li class="name">
				  <h1><a href="">Title</a></h1>
			  </li>
		  </ul>
		  <section class="top-bar-section">
			  <ul class="right">
				  <li class="has-dropdown active">
					  <a href="#">John Doe</a>
					  <ul class="dropdown">
						  <li><a href="{{URL::to('login/out')}}">Logout</a></li>
					  </ul>
				  </li>
			  </ul>
		  </section>
	  </nav>
	  <div class="container">
		  <div class="columns small-2" id="sidenav">
			  <ul class="side-nav">
				  <li>
				  	<ul class="side-nav">
				  		<li><a href="{{URL::to('admin/orders')}}">Orders</a></li>
				  		<li><a href="{{URL::to('admin/products')}}">Products</a></li>
				  		<li><a href="{{URL::to('admin/attributes')}}">Attributes</a></li>
				  		<li><a href="{{URL::to('admin/coupons')}}">Coupons</a></li>
				  		<li><a href="{{URL::to('admin/customers')}}">Customers</a></li>
				  	</ul>
				  </li>
			  </ul>
		  </div>
		  <div class="columns small-10">
			  <div class="row top15">
				  @yield('content')
			  </div>
		  </div>
	  </div>
  </body>
</html>
