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
$router->get('shop/anklets', 'ShopController@anklets');
$router->get('shop/bracelets', 'ShopController@bracelets');

$router->post('signin', 'AuthController@signin');
$router->get('signout', 'AuthController@signout');

$router->get('-/addearrings', 'EarringController@index');
$router->post('-/addearrings', 'EarringController@addearrings');

//api
$router->get('api', 'ApiController@all');
$router->get('api/earrings', 'ApiController@earrings');