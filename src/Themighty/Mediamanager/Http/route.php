<?php
Route::get('packagetest', [
    'uses'=>'Themighty\Mediamanager\Http\Controllers\MediaController@getHome'
]);