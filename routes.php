<?php
//get routes

$router->get('', 'PagesController@index');
$router->get('shop', 'PagesController@shop');

$router->get('shop', 'ShopControllerd@index');
$router->get('shop/earrings', 'ShopController@earrings');
$router->get('shop/necklaces', 'ShopController@necklaces');
$router->get('shop/anklets', 'ShopController@anklets');
$router->get('shop/bracelets', 'ShopController@bracelets');
