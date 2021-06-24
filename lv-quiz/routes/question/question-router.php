<?php
Route::get('question/create',[
'uses'=>'QuestionController@create',
'as'=>'question/create'
]);

Route::post('question/store',[
    'uses'=>'QuestionController@store',
    'as'=>'question/store'
]);

Route::get('question/show',[
    'uses'=>'QuestionController@show',
    'as'=>'question/show'
]);

Route::get('question/edit/{id}',[
    'uses'=>'QuestionController@edit',
    'as'=>'question/edit'
]);

Route::post('question/update',[
    'uses'=>'QuestionController@update',
    'as'=>'question/update'
]);

Route::get('question/details/{id}',[
    'uses'=>'QuestionController@details',
    'as'=>'question/details'
]);

Route::get('question/delete/{id}',[
    'uses'=>'QuestionController@delete',
    'as'=>'question/delete'
]);

