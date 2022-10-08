<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('/', 'PagesController@index');
$router->get('shop', 'PagesController@shop');
$router->get('signin', 'PagesController@signin');
$router->get('privacy-policy', 'PagesController@privacy');
$router->get('dashboard', 'PagesController@dashboard');


//users routes
$router->get('-/account', 'UserController@account');
$router->get('-/account/edit', 'UserController@account_edit');
$router->post('-/account/edit', 'UserController@account_edit_store');

//sources routes
$router->get('-/sources', 'SourceController@index');
$router->post('-/sources', 'SourceController@store_source'); 

 
//shop
$router->get('shop', 'ShopController@index');
$router->get('cart', 'ShopController@cart_show');
$router->post('shop', 'ShopController@cart');
$router->get('shop/new-arrivals', 'ShopController@new_arrivals');
$router->get('shop/cart', 'ShopController@getCartItems');
$router->get('shop/{category}', 'ShopController@items');
$router->get('shop/{category}/{item}/?', 'ShopController@show');
$router->post('shop/like', 'ShopController@like');
$router->post('shop/cart', 'ShopController@cart_2');



$router->post('signin', 'AuthController@signin');
$router->get('signout', 'AuthController@signout');

//Products
$router->get('-/products', 'ProductController@index');
$router->get('-/product/create', 'ProductController@create');
$router->post('-/product/create', 'ProductController@store');
$router->post('-/products/update', 'ProductController@update');
$router->post('-/product/delete', 'ProductController@delete');

//Categories
$router->get('-/categories', 'CategoryController@index'); 
$router->post('-/categories', 'CategoryController@create');
$router->post('-/categories/delete', 'CategoryController@delete');

//Sales
$router->get('-/users', 'UserController@index'); 
$router->post('-/users', 'UserController@create');
$router->post('-/users/delete', 'UserController@delete');
$router->post('-/users/update', 'UserController@update');

//Sales
$router->get('-/sales', 'SaleController@index'); 
$router->post('-/sales', 'SaleController@create');
$router->post('-/sales/delete', 'SaleController@delete');
$router->post('-/sales/update', 'SaleController@update');

//api
$router->get('api', 'ApiController@index');
$router->get('api/all', 'ApiController@all');
$router->get('api/dashboard', 'ApiController@dashboard');
$router->get('api/{category}', 'ApiController@category');

//sys
$router->get('-/system-logs', 'SystemController@index'); 
$router->get('-/system-activity', 'SystemController@system_activity'); 

$router->get('test', 'SystemController@test');

//robots

$router->get('robots.txt', function (){
    return require __DIR__ ."/robots.txt";
});
