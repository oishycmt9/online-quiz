<?php
Route::get('/contest-question', 'ContestQuestionController@index');



Route::get('contest-question/create', [
    'uses' => 'ContestQuestionController@create',
    'as' => 'contest-question/create'
]);

Route::post('contest-question/store', [
    'uses' => 'ContestQuestionController@store',
    'as' => 'contest-question/store'
]);

Route::get('contest-question/show/{id}', [
    'uses' => 'ContestQuestionController@show',
    'as' => 'contest-question/show'
]);



Route::get('contest-question/delete/{id}', [
    'uses' => 'ContestQuestionController@delete',
    'as' => 'contest-question/delete'
]);

//Route::post('submit-mcq', [
//    'uses' => 'ContestQuestionController@submitMCQ',
//    'as' => 'submit-mcq'
//]);
