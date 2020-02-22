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
    return redirect('login');
});

Auth::routes();



//********************************************************* */ Frontend*******************************
Route::get('/fd',function(){
    return view('Frontend.layout.master.master');    
});

Route::get('/froendTest',function(){
    return view('test');
});

// ********************************************************************************************************

// ****************************************admin Panel*********************************
Route::get('/product',function(){
    return view('test1');
})->middleware('auth')->name('product');

Route::resource('pro','ProductController')->names('pro')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ipl',function(){
    return view('dd');
})->name('ipl');

Route::get('/icc',function(){
    return view('dd');
})->name('icc');

Route::get('/dd',function(){
    return view('dd');
})->name('dd');

Route::resource('products','ProductsController');

Route::get('/keypress',function(){
    return view('keypress');
});

Route::get('changepassword', 'ChangePasswordController@index')->name('changepassword');
Route::post('changepassword', 'ChangePasswordController@store')->name('change.password');



Route::get('/keypress','KeypressController@create')->name('keypress');
Route::post('/keypress','KeypressController@store');
Route::get('/test','KeypressController@getdata')->name('getdata');
Route::get('/key','keypressController@index')->name('index');
Route::get('/key/edit/{id}','keypressController@edit')->name('edit');
Route::patch('/key/update/{id}','keypressController@update')->name('update');
Route::delete('/key/{id}', 'keypressController@destroy')->name('key');

// ********************************************************************************************************