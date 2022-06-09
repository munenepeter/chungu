<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('shop', 'PagesController@shop');
$router->get('signin', 'PagesController@signin');
$router->get('dashboard', 'PagesController@dashboard');
 

//shop
$router->get('shop', 'ShopController@index');

$router->get('shop/earrings', 'ShopController@earrings');
$router->get('shop/earrings/(.*)/?', 'ShopController@show');

$router->get('shop/necklaces', 'ShopController@necklaces');
$router->get('shop/necklaces/(.*)/?', 'ShopController@show');

$router->get('shop/anklets', 'ShopController@anklets');
$router->get('shop/anklets/(.*)/?', 'ShopController@show');

$router->get('shop/bracelets', 'ShopController@bracelets');
$router->get('shop/bracelets/(.*)/?', 'ShopController@show');

$router->post('signin', 'AuthController@signin');
$router->get('signout', 'AuthController@signout');

$router->get('-/products', 'ProductController@index');

$router->get('-/addproduct', 'ProductController@create');
$router->post('-/addproduct', 'ProductController@store');


$router->get('-/addearrings', 'ProductController@earrings');
$router->post('-/addearrings', 'ProductController@addearrings');



$router->get('-/addnecklaces', 'ProductController@necklaces');
$router->post('-/addnecklaces', 'ProductController@addnecklaces');

$router->get('-/addanklets', 'ProductController@anklets');
$router->post('-/addanklets', 'ProductController@addanklets');

$router->get('-/addbracelets', 'ProductController@bracelets');
$router->post('-/addbracelets', 'ProductController@addbracelets');

$router->get('-/adduser', 'PagesController@users');
$router->post('-/addanklets', 'ProductController@addanklets');

//api
$router->get('api', 'ApiController@all');
$router->get('api/earrings', 'ApiController@earrings');

//sys
$router->get('-/logs', 'SystemController@index');
$router->post('-/addanklets', 'ProductController@addanklets');