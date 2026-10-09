<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
$routes->get('/login', 'Auth::index', ['as' => 'auth.index']);
$routes->post('/login', 'Auth::store', ['as' => 'auth.store']);
