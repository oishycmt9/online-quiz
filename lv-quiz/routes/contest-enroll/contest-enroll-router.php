<?php

Route::post('contest-enroll',[
    'uses' => 'ContestEnrollmentController@enroll',
    'as' => 'contest-enroll'
]);

Route::get('/contest-enroll',[
    'uses' => 'ContestEnrollmentController@guestEnroll',
    'as' => '/contest-enroll'
]);

Route::get('contest-enroll/edit{id}',[
    'uses'=>'ContestEnrollmentController@edit',
    'as'=>'contest-enroll/edit'
]);

Route::post('contest-enroll/update',[
   'uses'=>'ContestEnrollmentController@update',
   'as'=>'contest-enroll/update'
]);

Route::get('contest-enroll/details/{id}',[
   'uses'=> 'ContestEnrollmentController@details',
   'as'=>'contest-enroll/details'
]);

Route::get('contest-enroll/delete/{id}',[
   'uses'=> 'ContestEnrollmentController@delete',
   'as'=> 'contest-enroll/delete'
]);

