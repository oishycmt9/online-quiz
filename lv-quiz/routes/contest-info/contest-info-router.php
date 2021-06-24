<?php
 /*url of quiz contest start*/
Route::get('/contest', 'ContestInformationController@index');
/*url end*/

Route::get('contest-info/get-details/{id}', [
    'uses' => 'ContestInformationController@getDetails',
    'as' => 'contest-info/get-details'
]);

Route::get('contest-info/create', [
    'uses' => 'ContestInformationController@create',
    'as' => 'contest-info/create'
]);

Route::post('contest-info/store', [
    'uses' => 'ContestInformationController@store',
    'as' => 'contest-info/store'
]);

Route::get('contest-info/show', [
    'uses' => 'ContestInformationController@show',
    'as' => 'contest-info/show'
]);

Route::get('contest-info/edit/{id}', [
    'uses' => 'ContestInformationController@edit',
    'as' => 'contest-info/edit'
]);

Route::post('contest-info/update', [
    'uses' => 'ContestInformationController@update',
    'as' => 'contest-info/update'
]);

Route::get('contest-info/details/{id}', [
    'uses' => 'ContestInformationController@details',
    'as' => 'contest-info/details'
]);

Route::get('contest-info/delete/{id}', [
    'uses' => 'ContestInformationController@delete',
    'as' => 'contest-info/delete'
]);
