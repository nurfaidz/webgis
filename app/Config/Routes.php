<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('/', 'GisController::gis');

$routes->get('/gis', 'GisController::gis');
$routes->get('/table_migas', 'TableMigas::table_migas');
$routes->get('/table_batas', 'TableBatas::table_batas');
$routes->get('/fasilitas', 'GisController::fasilitas');
$routes->get('/rt', 'GisController::rt');
$routes->get('/jalan', 'GisController::jalan');
$routes->get('/batasadministrasi', 'GisController::batasadministrasi');

$routes->get('/', 'AdminGisController::admingis');

$routes->get('/admingis', 'AdminGisController::admingis');

$routes->get('/admin_table_migas', 'AdminTableMigas::admin_table_migas');
$routes->get('/admin_table_migas/edit/(:any)', 'AdminTableMigas::edit/$1');
$routes->get('/updateMigas', 'AdminTableMigas::updateMigas');
$routes->get('/deleteMigas', 'AdminTableMigas::deleteMigas');
$routes->get('/insertMigas', 'AdminTableMigas::insertMigas');

// $routes->get('/admin_table_migas/(:any)', 'AdminTableMigas::getFasilitas/$1');

$routes->add('/save_table_migas', 'AdminTableMigas::save_table_migas');
$routes->get('/createtablemigas', 'AdminTableMigas::createtablemigas');
$routes->get('/adminfasilitas', 'AdminGisController::adminfasilitas');
$routes->get('/adminrt', 'AdminGisController::adminrt');
$routes->get('/adminjalan', 'AdminGisController::adminjalan');
$routes->get('/adminbatasadministrasi', 'AdminGisController::adminbatasadministrasi');

// batas
$routes->get('/admin_table_batas', 'AdminBatas::admin_table_batas');
$routes->get('/createtablebatas', 'AdminBatas::createtablebatas');
$routes->add('/save_table_batas', 'AdminBatas::save_table_batas');
$routes->get('/updateBatas', 'AdminBatas::updateBatas');
$routes->get('/deleteBatas', 'AdminBatas::deleteBatas');
$routes->get('/insertBatas', 'AdminBatas::insertBatas');





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
