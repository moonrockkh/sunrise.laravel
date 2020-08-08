<?php

use Illuminate\Support\Facades\Route;
use App\User;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('form', 'form');
Route::post('form/save', 'HomeController@save');

// route to get user list
Route::get('user', function(){
    return View::make('users.index')
        ->with('users', User::all());
});
// edit user
Route::get('user/edit/{id}', function($id){
    return View::make('users.edit')
        ->with('u', User::find(my_decrypt($id)));
});
Route::post('user/update', 'HomeController@update');