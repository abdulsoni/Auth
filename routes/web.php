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

//Route::get('/', 'ListController@show');
Auth::routes();
Route::get('/', 'UserController@getHome')->name('index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'UserController@getHome')->name('index');
Route::get('/dashboard', 'UserController@getBack')->name('dashboard');
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
//Route::get('logout', 'UserController@Adminlogout')->name('logout');
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::group([
    // 'prefix'     => 'admin',web
    'middleware' => [
        'auth',
        'admin'
    ],
], function() {
    Route::get('dashboard', 'UserController@index')->name('dashboard');
});
Route::group([
    'prefix'     => 'user',
    'middleware' => [
        'auth',
    ],
], function() {
//    Route::get('reports','UserReportsController@UserReports')->name('UserReports');
//    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
