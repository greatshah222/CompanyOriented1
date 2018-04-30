<?php
Route::get('/','FrontController@index')->name('home');

Route::get('/menus','FrontController@menus')->name('menus');
Route::get('/menu','FrontController@menu')->name('menu');




Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/',function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::group(['middleware'=>'auth'],function ()
{
    Route::get('food-info', 'CheckoutController@food')->name('checkout.food');

});
Route::resource('address','AddressController');
Route::get('payment', 'CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment', 'CheckoutController@storePayment')->name('payment.store');







Route::get('/users/confirmation/{token}','Auth\RegisterController@confirmation')->name('confirmation');


