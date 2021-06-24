<?php
       /*Show All User*/

Route::get('account/all-users',[
    'uses'=>'UserInformationController@allUsers',
    'as'=>'account/all-users'
]);

Route::get('account/profile',[
    'uses'=>'UserInformationController@create',
    'as'=>'account/profile'
]);

Route::get('account/show', [
    'uses' => 'UserInformationController@show',
    'as' => 'account/show'
]);

Route::get('account/edit/{id}', [
    'uses'=>'UserInformationController@edit',
    'as'=>'account/edit'
]);

Route::post('account/update', [
    'uses'=>'UserInformationController@update',
    'as'=>'account/update'
]);

Route::get('account/details/{id}', [
    'uses' => 'UserInformationController@details',
    'as' => 'account/details'
]);

Route::get('account/delete/{id}', [
    'uses' => 'UserInformationController@delete',
    'as' => 'account/delete'
]);

      /*Authentication User Profile*/

Route::get('account/show-profile/{id}', [
    'uses' => 'UserInformationController@showProfile',
    'as' => 'account/show-profile'
]);

Route::get('account/edit-profile/{id}', [
    'uses' => 'UserInformationController@editProfile',
    'as' => 'account/edit-profile'
]);

Route::post('account/update-profile',[
    'uses' => 'UserInformationController@updateProfile',
    'as' => 'account/update-profile'
]);
