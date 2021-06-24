<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('', function () {
	return view('main/main');
});

// Route::get('main.css', function (){
// 	return css('main/main.css');
// });
// Route::get('main-vue.js', function (){
// 	return view('main/main-vue.js');
// });
// Route::get('main-jquery.js', function (){
// 	return view('main/main-jquery.js');
// });

Route::get('login', function () {
	return view('login/login');
});
// Route::get('login.css', function(){
// 	return view('login/login.css');
// });
// Route::get('login-vue.js', function(){
// 	return view('login/login-vue.js');
// });
// Route::get('login-jquery', function(){
// 	return view('login/login-jquery.js');
// });





// Route::group(["middleware" => "auth:sanctum"], function () {
Route::get('admin', function () {
	return view('admin/admin');
});
// });




// Route::get('admin.css', function(){
// 	return view('admin/admin.css');
// });
// Route::get('admin-vue.js', function(){
// 	return view('admin/admin-vue.js');
// });
// Route::get('admin-jquery.js', function(){
// 	return view('admin/admin-jquery.js');
// });
