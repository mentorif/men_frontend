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
Route::get('/country-region', ['as' => 'country-region', 'uses' => 'CommonController@getCountryRegion']);

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
    Route::post('/account/mentee-venture', ['as' => 'mentee-venture', 'uses' => 'AccountController@postMenteeVenture']);

    Route::get('/logout', [ 'as' => 'logout', 'uses' => 'UserController@getLogout']);

    Route::post('/account/profile-photo', ['as' => 'profile-photo', 'uses' => 'AccountController@postProfilePhoto']);
    Route::post('/account/mentee-personal', ['as' => 'mentee-personal', 'uses' => 'AccountController@postMenteePersonal']);

    Route::get('/account/business-venture', [ 'as' => 'home', 'uses' => 'AccountController@getBusinessVenture']);
    Route::get('/account/business-photo', [ 'as' => 'home', 'uses' => 'AccountController@getBusinessPhoto']);
    Route::get('/account/business-personal', [ 'as' => 'home', 'uses' => 'AccountController@getBusinessPersonal']);
    Route::get('/account/business-preview', [ 'as' => 'home', 'uses' => 'AccountController@getBusinessPreview']);

    Route::get('/account/ready', [ 'as' => 'home', 'uses' => 'AccountController@getAccountReady']);
});
