<?php
use Illuminate\Support\Facades\Redirect;

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
    //return view('shop.index');

    return Redirect::action('ProductsController@index');
});



//Route::resource('shopitems','ProductsController');

Route::get('shopitems','ProductsController@index')->name('list_products');


Route::get('add-to-cart/{id}','ProductsController@addToCart')->name('product_cart');
Route::get('view-cart','ProductsController@getCart')->name('view-cart');
Route::get('checkout','ProductsController@getCheckout')->name('checkout');
Route::post('checkout','ProductsController@postToStripe')->name('checkout1');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

