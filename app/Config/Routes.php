<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/profile', 'Profile::index');
$routes->get('/', 'Home::index');
$routes->get('/hallo', 'HalloWorld::halodunia');
$routes->get('/form', 'FormController::input');
$routes->get('/latihanview', 'HelloWorld::halodunia');
$routes->get('/layout', 'LayoutController::index');

$routes->get('/', 'HomeController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/experience', 'ExperienceController::index');

//TUGAS BAB 4
$routes->get('/profile-tugas', 'ProfileController::index');
$routes->get('/experience-tugas', 'Profile::experience');

//PERCOBAAN LAPRAK BAB 6
$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->match(['get', 'post'], '/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');
$routes->get('/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');