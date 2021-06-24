<?php
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('course/create',[
    'uses'=>'CourseInfoController@create',
    'as'=>'course/create'
]);

Route::post('course/store',[
    'uses'=>'CourseInfoController@store',
    'as'=>'course/store'
]);

Route::get('course/show',[
    'uses'=>'CourseInfoController@show',
    'as'=>'course/show'
]);

Route::get('course/edit/{id}',[
   'uses'=>'CourseInfoController@edit',
   'as'=>'course/edit'
]);

Route::post('course/update',[
   'uses'=>'CourseInfoController@update',
   'as'=>'course/update'
]);

Route::get('course/details/{id}',[
   'uses'=>'CourseInfoController@details',
   'as'=>'course/details'
]);

Route::get('course/delete/{id}',[
   'uses'=>'CourseInfoController@delete',
   'as'=>'course/delete'
]);
