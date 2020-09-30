<?php
Route::group([
    'namespace' => 'Sitebill\User\app\Http\Controllers',
    'middleware' => ['web'],
], function () {
    Route::get('profile', 'ProfileController@index')->name('sitebill.profile.index');
});


