<?php

/*Admin Routes*/
Route::group(['middleware'=>['web','admin']],function(){
    Route::get('/adminpanel','AdminController@index');
    Route::resource('/adminpanel/users','UserController');
    Route::resource('/adminpanel/products','ProductController');
    Route::get('/chart','UserController@userChart');

    Route::get('/productChart','ProductController@productChart');
    
    Route::get('/productSalesChart','ProductController@productSalesChart');

});




/*End Admin Routes*/



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/products/showall', 'ProductController@showAllProducts');
Route::get('/products/addtocart', 'ProductController@addToCart');
Route::get('/products/categories/samsung', 'ProductController@samsung');
Route::get('/products/categories/huawei', 'ProductController@huawei');
Route::get('/products/categories/oppo', 'ProductController@oppo');
Route::get('/products/categories/motrola', 'ProductController@motrola');
Route::get('/products/categories/iphone', 'ProductController@iphone');

//cart

Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');
Route::get('/cart/destroy/{id}', 'CartController@destroy');
Route::get('/checkout', 'CheckoutController@index');
Route::post('/addAddress', 'CheckoutController@addAddress')->middleware('auth');
//user personal informationn


Route::get('/UserEditInfo', 'UserController@UserEditInfo')->middleware('auth');

Route::get('/singleproduct/{id}', 'ProductController@singleProduct')->middleware('auth');
Route::get('/contactUs', 'UserController@contactUs');
