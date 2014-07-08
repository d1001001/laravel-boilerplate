<?php

Route::filter('Sentry', function(){
	if( !Sentry::check() ) {
		return Redirect::to('/login');
	}
});
