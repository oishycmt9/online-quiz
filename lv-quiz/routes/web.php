<?php
require_once 'course/course-router.php';
require_once 'question/question-router.php';
require_once 'contest-info/contest-info-router.php';
require_once 'contest-question/contest-question-router.php';
require_once 'account/account-router.php';
require_once 'contest-enroll/contest-enroll-router.php';
require_once 'contest-result/contest-result-router.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'SiteController@home');
Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@contact');

