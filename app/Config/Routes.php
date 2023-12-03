<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->group('pdf', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->match(['get', 'post'], 'upload', 'PdfController::upload');
    $routes->get('view/(:num)', 'PdfController::view/$1');
    $routes->get('viewpdf/(:num)', 'PdfController::viewpdf/$1');
});
$routes->get('tabelpentest/view_pdf/(:num)', 'TabelPentest::view_pdf/$1');
$routes->get('tabelpentest/tampilkanPdf/(:num)', 'TabelPentest::tampilkanPdf/$1');
