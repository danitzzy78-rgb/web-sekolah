<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('head', 'Head::index');

$routes->get('topbar', 'Topbar::index');
