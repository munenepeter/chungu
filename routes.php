<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('shop', 'PagesController@shop');
$router->get('signin', 'PagesController@signin');

$router->get('shop', 'ShopController@index');
$router->get('shop/earrings', 'ShopController@earrings');
$router->get('shop/necklaces', 'ShopController@necklaces');
$router->get('shop/anklets', 'ShopController@anklets');
$router->get('shop/bracelets', 'ShopController@bracelets');

$router->post('signin', 'AuthController@login');