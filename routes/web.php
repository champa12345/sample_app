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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/mail', 'PagesController@mail');
Route::get('/category', function ()
{
	return view ('category');
})->name('proflie');

Route::post('/contact', 'TicketsController@store');
//
Route::get('/posts','PagesController@post');
Route::post('/posts', 'PostsController@store');


// Route::post('/map','MapControlle')


// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/', function ()    {
//         // Uses Auth Middleware
//     });

//     Route::get('user/profile', function () {
//         return view ('author');
//     });
// })->name('profile');

// Route::get('user/profile', function () {
//     return view('proflie');
// })->name('proflie');

// Route::get('posts', function () { 
//     return view('post');
// })->name('posts');

// Route::group(['namespace' => 'Admin'], function () {
//     Route::get('/', function ()    {
//         //code
//     });

//     Route::get('posts', function () {
//         //code
//     });
// });