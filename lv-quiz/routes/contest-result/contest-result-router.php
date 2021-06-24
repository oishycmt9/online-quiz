<?php
Route::post('contest-result/store', [
    'uses' => 'ContestResultController@store',
    'as' => 'contest-result/store'
]);

Route::post('submit-mcq', [
    'uses' => 'ContestResultController@submitMCQ',
    'as' => 'submit-mcq'
]);

Route::get('contest-result/result',[
    'uses' => 'ContestResultController@result',
    'as' => 'contest-result/result'
]);

Route::get('contest-result/show',[
    'uses'=>'ContestResultController@showResult',
    'as'=>'contest-result/show'
]);
