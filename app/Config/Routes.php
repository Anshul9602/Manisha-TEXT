<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ourstory', 'Ourstory::index');
$routes->get('/about', 'About::index');
$routes->get('/annual-return', 'Home::annual_return');
$routes->get('/annual-report', 'Home::annual_report');
$routes->get('/shareholding-pattern', 'Home::shareholding_pattern');
$routes->get('/corporate-governance', 'Home::corporate_governance');
$routes->get('/events', 'Home::events');
$routes->get('/corporate', 'Home::corporate');
$routes->get('/stock_exchange', 'Home::Stock_exchange');
$routes->get('/company', 'Home::company');
$routes->get('/spinning', 'Home::spinning');
$routes->get('/product', 'Home::product');

$routes->get('/privacy', 'Privacy::index');
$routes->get('/terms', 'Terms::index');

$routes->get('/contact', 'Contact::index');
$routes->get('/careers', 'Career::index');
