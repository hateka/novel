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


Route::get('all', function()
{

    $user_data = DB::table('users')
    ->join('text', 'users.user_id', '=', 'text.user_id')
    ->join('img', 'users.user_id', '=', 'img.user_id')
    ->get(array('name', 'text', 'code'));


    return ['user_data'=>$user_data];

});

//img paste page
Route::get('post/img', function () {
    return view('post_img');
});

//tag and text page
Route::post('post/text', 'PostController@confirm_img');

//post api
Route::post('post', 'PostController@index');




