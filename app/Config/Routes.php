<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontEnd::home');
$routes->get('academic_info', 'FrontEnd::academic_info');
$routes->get('professional_experience', 'FrontEnd::professional_experience');
$routes->get('research_and_publications', 'FrontEnd::research_and_publications');
$routes->get('blog', 'FrontEnd::blog');
$routes->post('getData', 'Dataaa::getData'); //ajax request
$routes->get('blog/(:segment)', 'FrontEnd::show_blog');
$routes->get('single_blog', 'FrontEnd::single_blog');
$routes->get('contact_me', 'FrontEnd::contact_me');
// admin
$routes->group('admin', function ($routes) {
    //dashboard
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');
    //theme
    $routes->get('theme', 'Admin\Theme::index');
    $routes->post('theme', 'Admin\Theme::edit');
    //profile
    $routes->get('profile', 'Admin\Profile::index');
    $routes->post('profile', 'Admin\Profile::edit');
    //contact
    $routes->get('contact','Admin\Contact::index');
    $routes->post('contact','Admin\Contact::edit');
});
