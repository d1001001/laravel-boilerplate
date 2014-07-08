@extends('auth::layout')
@section('content')
<div class="row">
	<div class="column small-4 small-centered">
		<h2>Login</h2>
		@foreach($errors->all() as $error)
		<p><span class="error">{{$error}}</span></p>
		@endforeach
		{{Form::open(array('url' => '/login'))}}
		{{Form::text('email', null, array('placeholder' => 'E-mail'))}}
		{{Form::password('password', array('placeholder' => 'Password'))}}
		{{Form::submit('Send', array('class' => 'button right'))}}
		{{Form::close()}}
		{{HTML::link('register', 'Sign up')}}
	</div>
</div>
@endsection
