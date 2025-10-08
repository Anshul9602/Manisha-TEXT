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
$routes->get('/Draft_Red_Herring_Prospectus', 'Home::Draft');
$routes->get('/board-of-directors', 'Home::board_of_directors');
$routes->get('/board-committees', 'Home::board_committees');
$routes->get('/Public_Announcement', 'Home::Public_Announcement');

// Investor Grievance page route
$routes->get('/investor-grievance', 'Home::investor_grievance');


$routes->get('/privacy', 'Privacy::index');
$routes->get('/terms', 'Terms::index');

$routes->get('/contact', 'Contact::index');
$routes->get('/careers', 'Career::index');
