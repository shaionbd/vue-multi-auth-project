<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// 
//  admin login 
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/admin'

], function ($router) {

    Route::post('login', 'AdminAuth\AuthController@login');
    Route::post('logout', 'AdminAuth\AuthController@logout');
    Route::post('refresh', 'AdminAuth\AuthController@refresh');
    Route::post('me', 'AdminAuth\AuthController@me');
    Route::post('password/reset', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');

});

//  student login 
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/student'

], function ($router) {

    Route::post('login', 'StudentAuth\AuthController@login');
    Route::post('signup', 'StudentAuth\RegisterController@register');
    Route::post('activate', 'StudentAuth\RegisterController@activate');
    Route::post('logout', 'StudentAuth\AuthController@logout');
    Route::post('refresh', 'StudentAuth\AuthController@refresh');
    Route::post('me', 'StudentAuth\AuthController@me');
    
    Route::post('password/reset', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('info/{id}', 'StudentAuth\AuthController@getInfo');

});

//  teacher login 
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/teacher'

], function ($router) {

    Route::post('login', 'TeacherAuth\AuthController@login');
    Route::post('signup', 'TeacherAuth\RegisterController@register');
    Route::post('activate', 'TeacherAuth\RegisterController@activate');
    Route::post('logout', 'TeacherAuth\AuthController@logout');
    Route::post('refresh', 'TeacherAuth\AuthController@refresh');
    Route::post('me', 'TeacherAuth\AuthController@me');

    Route::post('password/reset', 'TeacherAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('info/{id}', 'TeacherAuth\AuthController@getInfo');

});

// main api are calling from here
// 
############################### Admin ##############################
Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => '/admin'
], function ($router) {
    Route::get('/dashboard/counter', 'Admin\DashboardController@getCounter');
    
});

############################### Student ################################
Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => '/student'
], function ($router) {
    Route::get('/dashboard/counter', 'Student\DashboardController@getCounter');
    
});

############################### Teacher ################################
Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => '/student'
], function ($router) {
    Route::get('/dashboard/counter', 'Student\DashboardController@getCounter');
    
});