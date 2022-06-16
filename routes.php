<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('shop', 'PagesController@shop');
$router->get('signin', 'PagesController@signin');
$router->get('dashboard', 'PagesController@dashboard');
$router->get('profile', 'PagesController@profile');
 

 
//shop
$router->get('shop', 'ShopController@index');
$router->get('shop/{category}', 'ShopController@category');
$router->get('shop/{category}/-/{item}/?', 'ShopController@show');

// $router->get('shop/offers', 'ShopController@offers');
// $router->get('shop/offers/{item}/?', 'ShopController@showoffer');

// $router->get('shop/earrings', 'ShopController@earrings');
// $router->get('shop/earrings/{item}', 'ShopController@show');

// $router->get('shop/necklaces', 'ShopController@necklaces');
// $router->get('shop/necklaces/{item}/?', 'ShopController@show');

// $router->get('shop/anklets', 'ShopController@anklets');
// $router->get('shop/anklets/{item}/?', 'ShopController@show');

// $router->get('shop/bracelets', 'ShopController@bracelets');
// $router->get('shop/bracelets/{item}/?', 'ShopController@show');

$router->post('signin', 'AuthController@signin');
$router->get('signout', 'AuthController@signout');

$router->get('-/products', 'ProductController@index');
$router->get('-/addproduct', 'ProductController@create');
$router->post('-/addproduct', 'ProductController@store');

$router->get('-/categories', 'CategoryController@index'); 
$router->post('-/categories', 'CategoryController@create');
$router->post('-/categories/delete', 'CategoryController@delete');

$router->get('-/users', 'UserController@index'); 
$router->post('-/users', 'UserController@create');
$router->post('-/users/delete', 'UserController@delete');
$router->post('-/users/update', 'UserController@update');

//api
$router->get('api', 'ApiController@all');
$router->get('api/{category}', 'ApiController@category');

//sys
$router->get('-/logs', 'SystemController@index'); 
$router->get('test', 'SystemController@test');


//$router->get('test/{one}', 'SystemController@test_1');

// $router->get('test/one/', function($one){
//      echo $one;
// });


$router->get('test/{one}/', 'SystemController@test_1');
$router->get('test/{one}/{two}/?', 'SystemController@test_2');

//$router->get('test/{category}', 'SystemController@test_category');