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
    return view('frontend.index');
});

Route::get('/connect',[
    'uses'=>'CustomerController@connect',
    'as'=> 'connect'
]);

Route::post('/signup',[
    'uses'=>'CustomerController@signup',
    'as'=> 'signup'
]);

Route::get('/logout',[
    'uses'=>'CustomerController@logout',
    'as'=> 'logout'
]);

Route::post('/signin',[
    'uses'=>'CustomerController@signin',
    'as'=> 'signin'
]);

/*********************    dashboard route     *************/

Route::get('/dashboard',[
    'uses'=>'CustomerController@dashboard',
    'as'=>'dashboard'
]);

Route::get('/transfert',[
    'uses'=>'TransfertController@home',
    'as'=> 'home'
]);

Route::post('/save-transfert',[
    'uses'=>'TransfertController@save',
    'as'=> 'save.transfert'
]);

Route::get('/histo',[
    'uses'=>'HistoController@transaction',
    'as'=>'transaction'
]);

/************************* Backend Route  ***********************/

Route::get('/users',[
    'uses'=>'AdminController@allUser',
    'as'=> 'all.users'
]);
Route::get('/transactions',[
    'uses'=>'AdminController@allTransaction',
    'as'=> 'all.transactions'
]);

Route::get('/admin', [
    'uses'=>'AdminController@home',
    'as'=> 'login'
]);

Route::get('/home', [
    'uses'=>'AdminController@index',
    'as'=> 'index'
]);

Route::post('/login', [
    'uses'=>'AdminController@login',
    'as'=> 'login'
]);
Route::get('/logoutadmin',[
    'uses'=>'AdminController@logoutAdmin',
    'as'=> 'logout.admin'
]);

