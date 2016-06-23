<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*

Route::get('/', function () {
    return view('welcome');
});

*/

 Route::get('/', 'HomeController@index');
 Route::get('admin', 'AccountController@index');
Route::get('now', function () {
    return date("Y-m-d H:i:s");
});
 
/*
Route::get('/home',function(){
	return view ('home');
}); // 闭包路由  
*/
//Route::get('/home','HomeController@index');
//Route::post('/login','HomeController@indexpost');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/




Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');
});


