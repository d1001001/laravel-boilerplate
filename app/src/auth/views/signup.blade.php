@extends('auth::layout')
@section('content')
<div class="row">
	<div class="column small-4 small-centered">
		<h2>Sign Up</h2>
		@foreach($errors->all() as $error)
		<p><span class="error">{{$error}}</span></p>
		@endforeach
		{{Form::open(array('url' => '/register'))}}
		{{Form::text('email', null, array('placeholder' => 'E-mail'))}}
		{{Form::password('password', array('placeholder' => 'Password'))}}
		{{Form::submit('Sign Up', array('class' => 'button right'))}}
		{{Form::close()}}
	</div>
</div>
@endsection
