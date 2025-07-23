<?php

use App\Controllers\Menu;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::home');
$routes->get('menu', 'Menu::index');
$routes->get('cerita', 'Cerita::cerita');
$routes->get('lokasi', 'Lokasi::lokasi');
$routes->get('kontak', 'Kontak::index');


$routes->get('/', 'Home::home');
$routes->get('login', 'Auth::login');
$routes->post('do-login', 'Auth::doLogin');
$routes->get('logout', 'Auth::logout');





$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
});

// Grup route untuk admin dengan filter login (opsional pakai 'auth')
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');

    // Routes CRUD produk
    $routes->get('products', 'Admin\Product::index');
    $routes->get('products/create', 'Admin\Product::create');
    $routes->post('products/store', 'Admin\Product::store');
    $routes->get('products/edit/(:num)', 'Admin\Product::edit/$1');
    $routes->post('products/update/(:num)', 'Admin\Product::update/$1');
    $routes->post('products/delete/(:num)', 'Admin\Product::delete/$1');
});

$routes->group('admin', function($routes) {
    $routes->get('categories', 'Admin\Categories::index');
    $routes->get('categories/create', 'Admin\Categories::create');
    $routes->post('categories/store', 'Admin\Categories::store');
    $routes->get('categories/edit/(:num)', 'Admin\Categories::edit/$1');
    $routes->post('categories/update/(:num)', 'Admin\Categories::update/$1');
    $routes->post('categories/delete/(:num)', 'Admin\Categories::delete/$1');
    
    
    $routes->get('home/hero', 'Admin\HomeHero::index');
    $routes->post('home/hero/update', 'Admin\HomeHero::update');

    $routes->get('home/about', 'Admin\HomeAbout::index');
    $routes->post('home/about/update', 'Admin\HomeAbout::update');
});


$routes->group('admin', function($routes) {
    $routes->get('home/menu', 'Admin\FavoriteMenu::index');
    $routes->get('home/menu/create', 'Admin\FavoriteMenu::create');
    $routes->post('home/menu/store', 'Admin\FavoriteMenu::store');
    $routes->get('home/menu/edit/(:num)', 'Admin\FavoriteMenu::edit/$1');
    $routes->post('home/menu/update/(:num)', 'Admin\FavoriteMenu::update/$1');
    $routes->post('home/menu/delete/(:num)', 'Admin\FavoriteMenu::delete/$1');
});

$routes->group('admin', function($routes) {
    $routes->get('timeline', 'Admin\Timeline::index');
    $routes->get('timeline/create', 'Admin\Timeline::create');
    $routes->post('timeline/store', 'Admin\Timeline::store');
    $routes->get('timeline/edit/(:num)', 'Admin\Timeline::edit/$1');
    $routes->post('timeline/update/(:num)', 'Admin\Timeline::update/$1');
    $routes->post('timeline/delete/(:num)', 'Admin\Timeline::delete/$1');

$routes->get('messages', 'Admin\Message::index');
$routes->get('messages/(:num)', 'Admin\Message::show/$1');
$routes->post('messages/delete/(:num)', 'Admin\Message::delete/$1');

});

$routes->get('kontak', 'Kontak::index');
$routes->post('kontak/kirim', 'Kontak::kirim');

$routes->group('admin', function($routes) {
    $routes->get('locations', 'Admin\Location::index');
    $routes->get('locations/create', 'Admin\Location::create');
    $routes->post('locations/store', 'Admin\Location::store');
    $routes->get('locations/edit/(:num)', 'Admin\Location::edit/$1');
    $routes->post('locations/update/(:num)', 'Admin\Location::update/$1');
    $routes->get('locations/delete/(:num)', 'Admin\Location::delete/$1');
});











