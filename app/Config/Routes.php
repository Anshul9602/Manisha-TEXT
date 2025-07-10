<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ourstory', 'Ourstory::index');
$routes->get('/about', 'About::index');
$routes->get('/services', 'Services::index');
$routes->get('/ferrous', 'Home::ferrous');
$routes->get('/board-of-directors', 'Home::board_of_directors');
$routes->get('/investor', 'Home::investor');
$routes->get('/scores', 'Home::scores');
$routes->get('/csr', 'Home::csr');
$routes->get('/vigil-mechanism', 'Home::vigil_mechanism');
$routes->get('/careers', 'Career::index');
$routes->get('/policies', 'Home::policies');
$routes->get('/committees', 'Home::committees');
$routes->get('/code-of-conduct', 'Home::code_of_conduct');
$routes->get('/management', 'Home::management');
$routes->get('/key-managerial-personnel', 'Home::key_managerial_personnel');
$routes->get('/investor-grievances', 'Home::investor_grievances');
$routes->get('/stock-exchange-intimations', 'Home::stock_exchange_intimations');
$routes->get('/general-meeting', 'Home::general_meeting');
$routes->get('/financial-results', 'Home::financial_results');
$routes->get('/familiarisation-programme-for-independent-directors', 'Home::familiarisation_programme_for_independent_directors');
$routes->get('/postal-ballot', 'Home::postal_ballot');
$routes->get('/prospectus', 'Home::prospectus');
$routes->get('/annual-return', 'Home::annual_return');
$routes->get('/annual-report', 'Home::annual_report');
$routes->get('/shareholding-pattern', 'Home::shareholding_pattern');
$routes->get('/corporate-governance', 'Home::corporate_governance');
$routes->get('/events', 'Home::events');
$routes->get('/corporate', 'Home::corporate');
$routes->get('/dyeing', 'Home::dyeing');
$routes->get('/spinning', 'Home::spinning');
$routes->get('/product', 'Home::product');





$routes->get('/privacy', 'Privacy::index');
$routes->get('/terms', 'Terms::index');


$routes->get('/contact', 'Contact::index');
$routes->get('/careers', 'Career::index');




