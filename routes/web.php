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


/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Product Route
|--------------------------------------------------------------------------
*/
Route::resource('products','ProductsController');

/*
|--------------------------------------------------------------------------
| Categories
|--------------------------------------------------------------------------
*/
Route::resource('categories','CategoriesController');


/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/
Route::get('/contact','HomeController@contact');

/*
|--------------------------------------------------------------------------
| Orders Route
|--------------------------------------------------------------------------
*/
Route::resource('orders','OrdersController');

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
   Route::get('dashboard','HomeController@dashboard');

   Route::get('upload/{id}',['as'=>'upload','uses'=>'ProductsController@uploadForm']);

   Route::post('upload-images',['as'=>'products.upload','uses'=>'ProductsController@storeImages']);

   Route::resource('products','ProductsController',['as'=>'admin']);

    Route::resource('orders','OrdersController',['as'=>'admin']);

    Route::resource('categories','CategoriesController',['as'=>'admin']);
});