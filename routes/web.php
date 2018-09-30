<?php

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
//    return view('layout.public');
//});

Route::get('/', 'HomeController@getIndex');
Route::get('privacy-policy', 'StaticPagesController@getPrivacyPolicy');
Route::get('code-of-conduct', 'StaticPagesController@getCodeConduct');
Route::get('terms-of-use', 'StaticPagesController@getTermUse');
Route::get('test-me', function(){dd(env('APP_NAME'));});

// Public access
Route::middleware(['guest'])->group(function(){

    /*----------------------------Sign Up-------------------------*/
    Route::post('user/register-manual', 'UserController@postSignUp');

    /*----------------------------Sign In-------------------------*/
    Route::get('user/login', 'UserController@getSignIn');
    Route::post('user/login', [ 'as' => 'login', 'uses' => 'UserController@postSignIn']);

});


// private access
Route::middleware(['auth'])->group(function(){

    Route::get('/account', [ 'as' => 'home', 'uses' => 'AccountController@getIndex']);
    Route::post('/account/mentee-coc', [ 'as' => 'mentee-coc', 'uses' => 'AccountController@postMenteeCoc']);
    Route::post('/account/mentee-terms', [ 'as' => 'mentee-terms', 'uses' => 'AccountController@postMenteeTerms']);

});
