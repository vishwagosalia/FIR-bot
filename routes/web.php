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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');
Route::get('/botman/chat', function() {
    return view('botman');
});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FirController@getpublicfir_dash')->name('welcome');

//Route::get('/firs','FIRController@getpublicfir')->name('public.fir');

Route::group(['prefix' => 'admin','middleware' => 'auth'],function () {

    Route::get('/dashboard', 'AdminController@index')->name('admin.index');

    Route::get('/table', function () {
        return view('admin.tables');
    })->name('admin.tables');

    Route::get('/create', function () {
        return view('admin.pages.user.create');
    })->name('admin.user.create');

    Route::get('/users', function () {
        return view('admin.pages.user.index');
    })->name('admin.user.index');

    Route::get('/firs', 'FirController@index')->name('admin.firs.index');
    Route::get('/firs/authenticate/{fir}', 'FirController@authenticate')->name('admin.firs.authenticate');
    Route::get('/firs/remove/{fir}', 'FirController@remove')->name('admin.firs.remove');

    Route::get('/crime-types', 'CrimeTypesController@index')->name('admin.crime_types.index');
//
//    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//
//    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
//
//
//    Route::get('products', 'ProductController@index')->name('admin.products.index');
//
//    Route::get('products', 'ProductController@index')->name('admin.products.index');

//    Route::get('product/create', 'ProductController@index')->name('admin.product.create');
//
//    Route::get('product/edit/{id}', 'ProductController@index')->name('admin.product.edit');
//
//    Route::post('product/delete/{id}', 'ProductController@index')->name('admin.product.delete');

});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
