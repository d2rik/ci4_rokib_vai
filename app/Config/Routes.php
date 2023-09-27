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
$routes->get('resume', 'FrontEnd::resume');
$routes->get('social_works', 'FrontEnd::social_works');
$routes->get('teaching_and_mentoring', 'FrontEnd::teaching_and_mentoring');
$routes->get('contact_me', 'FrontEnd::contact_me');
// $routes->get('register', 'FrontEnd::register');
// $routes->post('register', 'FrontEnd::create_resister');
$routes->get('login', 'FrontEnd::login');
$routes->post('login', 'FrontEnd::match_login');
// admin
$routes->group('admin', ['filter' => 'isLoggedIn'], function ($routes) {
    //dashboard
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');
    //Blog
    $routes->get('blog_add', 'Admin\Blog::add');
    $routes->post('blog_add', 'Admin\Blog::add');
    $routes->get('blog_list', 'Admin\Blog::index');
    $routes->get('blog_edit/(:num)', 'Admin\Blog::edit/$1');
    $routes->post('blog_edit/(:num)', 'Admin\Blog::edit/$1');
    $routes->get('blog_delete/(:num)', 'Admin\Blog::delete/$1');
    //theme
    $routes->get('theme', 'Admin\Theme::index');
    $routes->post('theme', 'Admin\Theme::edit');
    //profile
    $routes->get('profile', 'Admin\Profile::index');
    $routes->post('profile', 'Admin\Profile::edit');
    $routes->get('profile_image', 'Admin\Profile::edit_profile_image');
    $routes->post('profile_image', 'Admin\Profile::edit_profile_image');
    $routes->get('banner_image', 'Admin\Profile::edit_banner_image');
    $routes->post('banner_image', 'Admin\Profile::edit_banner_image');
    //contact
    $routes->get('contact', 'Admin\Contact::index');
    $routes->post('contact', 'Admin\Contact::edit');
    //About
    $routes->get('about', 'Admin\About::index');
    $routes->post('about', 'Admin\About::edit');
    //External Link
    $routes->get('external_link_add', 'Admin\External_link::add');
    $routes->post('external_link_add', 'Admin\External_link::add');
    $routes->get('external_link_list', 'Admin\External_link::index');
    $routes->get('external_link_edit/(:num)', 'Admin\External_link::edit/$1');
    $routes->post('external_link_edit/(:num)', 'Admin\External_link::edit/$1');
    $routes->get('external_link_delete/(:num)', 'Admin\External_link::delete/$1');

    //Educational Qualifications
    $routes->get('educational_qualifications', 'Admin\Educational_qualifications::list');

    $routes->get('educational_qualifications_add', 'Admin\Educational_qualifications::add');

    $routes->get('educational_qualifications_edit/(:num)', 'Admin\Educational_qualifications::edit/$1');

    $routes->post('educational_qualifications_edit/(:num)', 'Admin\Educational_qualifications::edit/$1');

    $routes->post('educational_qualifications_add', 'Admin\Educational_qualifications::add');

    $routes->get('educational_qualifications_delete/(:num)', 'Admin\Educational_qualifications::delete/$1');

    //Achievements and excellence

    $routes->get('achievements_and_excellence', 'Admin\Achievements_and_excellence::list');

    $routes->get('achievements_and_excellence_add', 'Admin\Achievements_and_excellence::add');

    $routes->get('achievements_and_excellence_edit/(:num)', 'Admin\Achievements_and_excellence::edit/$1');

    $routes->post('achievements_and_excellence_edit/(:num)', 'Admin\Achievements_and_excellence::edit/$1');

    $routes->post('achievements_and_excellence_add', 'Admin\Achievements_and_excellence::add');

    $routes->get('achievements_and_excellence_delete/(:num)', 'Admin\Achievements_and_excellence::delete/$1');

    //Professional Experience
    $routes->get('professional_experience', 'Admin\Professional_experience::list');

    $routes->get('professional_experience_add', 'Admin\Professional_experience::add');

    $routes->get('professional_experience_edit/(:num)', 'Admin\Professional_experience::edit/$1');

    $routes->post('professional_experience_edit/(:num)', 'Admin\Professional_experience::edit/$1');

    $routes->post('professional_experience_add', 'Admin\Professional_experience::add');

    $routes->get('professional_experience_delete/(:num)', 'Admin\Professional_experience::delete/$1');

    //Teaching and mentoring
    // $routes->get('teaching_and_mentoring', 'Admin\Teaching_and_mentoring::list');

    // $routes->get('teaching_and_mentoring_add', 'Admin\Teaching_and_mentoring::add');

    $routes->get('teaching_and_mentoring_edit/(:num)', 'Admin\Teaching_and_mentoring::edit/$1');

    $routes->post('teaching_and_mentoring_edit/(:num)', 'Admin\Teaching_and_mentoring::edit/$1');

    // $routes->post('teaching_and_mentoring_add', 'Admin\Teaching_and_mentoring::add');

    // $routes->get('teaching_and_mentoring_delete/(:num)', 'Admin\Teaching_and_mentoring::delete/$1');

    //Journal Publications
    $routes->get('journal_publications', 'Admin\Journal_publications::list');

    $routes->get('journal_publications_add', 'Admin\Journal_publications::add');

    $routes->get('journal_publications_edit/(:num)', 'Admin\Journal_publications::edit/$1');

    $routes->post('journal_publications_edit/(:num)', 'Admin\Journal_publications::edit/$1');

    $routes->post('journal_publications_add', 'Admin\Journal_publications::add');

    $routes->get('journal_publications_delete/(:num)', 'Admin\Journal_publications::delete/$1');

    //Conference Publications
    $routes->get('conference_publications', 'Admin\Conference_publications::list');

    $routes->get('conference_publications_add', 'Admin\Conference_publications::add');

    $routes->get('conference_publications_edit/(:num)', 'Admin\Conference_publications::edit/$1');

    $routes->post('conference_publications_edit/(:num)', 'Admin\Conference_publications::edit/$1');

    $routes->post('conference_publications_add', 'Admin\Conference_publications::add');

    $routes->get('conference_publications_delete/(:num)', 'Admin\Conference_publications::delete/$1');

    //Overall Skills
    $routes->get('overall_skills_add', 'Admin\Overall_skills::add');
    $routes->post('overall_skills_add', 'Admin\Overall_skills::add');
    $routes->get('overall_skills_list', 'Admin\Overall_skills::index');
    $routes->get('overall_skills_edit/(:num)', 'Admin\Overall_skills::edit/$1');
    $routes->post('overall_skills_edit/(:num)', 'Admin\Overall_skills::edit/$1');
    $routes->get('overall_skills_delete/(:num)', 'Admin\Overall_skills::delete/$1');

    //Language Skills
    $routes->get('language_skills_add', 'Admin\Language_skills::add');
    $routes->post('language_skills_add', 'Admin\Language_skills::add');
    $routes->get('language_skills_list', 'Admin\Language_skills::index');
    $routes->get('language_skills_edit/(:num)', 'Admin\Language_skills::edit/$1');
    $routes->post('language_skills_edit/(:num)', 'Admin\Language_skills::edit/$1');
    $routes->get('language_skills_delete/(:num)', 'Admin\Language_skills::delete/$1');

    //login system
    $routes->get('logout', 'FrontEnd::logout');
    $routes->get('login_edit', 'FrontEnd::login_edit');
    $routes->post('login_edit', 'FrontEnd::login_edit_match');
});
