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
   return view ('welcome');
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

Route::get('/tickets', 'TicketsController@index');
Route::get('/posts', 'PostsController@home');
// Route::post('/map','MapControlle')

Route::get('/ticket/{slug?}', 'TicketsController@show');

Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');

Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

Route::get('sendemail', function () {
	$data = array(
	'name' => "Learning Laravel",
	);
	Mail::send('mail.welcome', $data, function ($message) {
	$message->from('champa250396@gmail.com', 'Learning Laravel');
	$message->to('thuydungcnptit@gmail.com')->subject('Learning Laravel test email');
	});
	return "Your email has been sent successfully";
});


Route::post('/comment', 'CommentsController@newComment');


Route::get('/example', function(){

 		return view('example',['name' => 'test']);

});





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