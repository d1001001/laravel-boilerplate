<?php

Route::group(array('before'=>'Sentry'), function(){
	Route::get('/admin', 'Site\Admin\Controllers\IndexController@getIndex');
});
