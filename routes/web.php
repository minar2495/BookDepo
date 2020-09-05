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

Route::get('/', 'HomeController@index');
// Route::view('list','book.list');
Route::view('register','user.register');

Route::post('register','UserRegister@saveUser');

//Book
Route::view('addbook','book.add');
Route::post('add','Book@add');
Route::get('list','Book@show');
Route::post('filter','Book@filter');

//user
Route::view('cart','user.cart');
Route::view('/login', 'user.login');
Route::post('/login','UserRegister@login');
Route::get('/logout',function(){
    session()->forget('data');
    return redirect('/');
});

//For Admin
Route::view('addtype','admin.addbooktype');
Route::post('addCategory','admin\AddCategory@addCategory');
Route::view('addCategory','admin.addBookCategory');

Route::group(['middleware' => 'authentication'], function () {
    
});