<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontEnd::home');
$routes->get('/academic_info', 'FrontEnd::academic_info');
$routes->get('/professional_experience', 'FrontEnd::professional_experience');
$routes->get('/research_and_publications', 'FrontEnd::research_and_publications');
$routes->get('/blog', 'FrontEnd::blog');
$routes->post('/getData', 'Dataaa::getData');
$routes->get('/blog/(:segment)', 'FrontEnd::show_blog');
$routes->get('/single_blog', 'FrontEnd::single_blog');
$routes->get('/contact_me', 'FrontEnd::contact_me');
