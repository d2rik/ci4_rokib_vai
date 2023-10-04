<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontEnd::home');
$routes->get('academic_info', 'FrontEnd::academic_info');
$routes->get('test_score_and_certifications', 'FrontEnd::test_score_and_certifications');
$routes->get('professional_experience', 'FrontEnd::professional_experience');
$routes->get('research_and_publications', 'FrontEnd::research_and_publications');
$routes->get('research_interest', 'FrontEnd::research_interest');
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
$routes->post('login', 'FrontEnd::match_login', ['filter' => 'csrf']);
// admin
$routes->group('admin', ['filter' => 'isLoggedIn'], function ($routes) {
    //dashboard
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');
    //Blog
    $routes->get('blog_list', 'Admin\Blog::index');
    $routes->match(['get', 'post'], 'blog_add', 'Admin\Blog::add');
    $routes->match(['get', 'post'], 'blog_edit/(:num)', 'Admin\Blog::edit/$1');
    $routes->get('blog_delete/(:num)', 'Admin\Blog::delete/$1');
    //research interest
    $routes->get('research_interest', 'Admin\Research_interest::index');
    $routes->match(['get', 'post'], 'research_interest_add', 'Admin\Research_interest::add');
    $routes->match(['get', 'post'], 'research_interest_edit/(:num)', 'Admin\Research_interest::edit/$1');
    $routes->get('research_interest_delete/(:num)', 'Admin\Research_interest::delete/$1');

    //theme
    $routes->get('theme', 'Admin\Theme::index');
    $routes->post('theme', 'Admin\Theme::edit');
    //profile
    $routes->get('profile', 'Admin\Profile::index');
    $routes->post('profile', 'Admin\Profile::edit');
    $routes->match(['get', 'post'], 'profile_image', 'Admin\Profile::edit_profile_image');
    $routes->match(['get', 'post'], 'banner_image', 'Admin\Profile::edit_banner_image');
    //contact
    $routes->get('contact', 'Admin\Contact::index');
    $routes->post('contact', 'Admin\Contact::edit');
    //About
    $routes->get('about', 'Admin\About::index');
    $routes->post('about', 'Admin\About::edit');
    //External Link
    $routes->get('external_link_list', 'Admin\External_link::index');
    $routes->match(['get', 'post'], 'external_link_add', 'Admin\External_link::add');
    $routes->match(['get', 'post'], 'external_link_edit/(:num)', 'Admin\External_link::edit/$1');
    $routes->get('external_link_delete/(:num)', 'Admin\External_link::delete/$1');

    //Educational Qualifications
    $routes->get('educational_qualifications', 'Admin\Educational_qualifications::list');
    $routes->match(['get', 'post'], 'educational_qualifications_add', 'Admin\Educational_qualifications::add');
    $routes->match(['get', 'post'], 'educational_qualifications_edit/(:num)', 'Admin\Educational_qualifications::edit/$1');
    $routes->get('educational_qualifications_delete/(:num)', 'Admin\Educational_qualifications::delete/$1');

    //Achievements and excellence

    $routes->get('achievements_and_excellence', 'Admin\Achievements_and_excellence::list');
    $routes->match(['get', 'post'], 'achievements_and_excellence_add', 'Admin\Achievements_and_excellence::add');
    $routes->match(['get', 'post'], 'achievements_and_excellence_edit/(:num)', 'Admin\Achievements_and_excellence::edit/$1');
    $routes->get('achievements_and_excellence_delete/(:num)', 'Admin\Achievements_and_excellence::delete/$1');

    //Professional Experience
    $routes->get('professional_experience', 'Admin\Professional_experience::list');
    $routes->match(['get', 'post'], 'professional_experience_add', 'Admin\Professional_experience::add');
    $routes->match(['get', 'post'], 'professional_experience_edit/(:num)', 'Admin\Professional_experience::edit/$1');
    $routes->get('professional_experience_delete/(:num)', 'Admin\Professional_experience::delete/$1');

    //Test score and certifications
    $routes->get('test_score_and_certifications', 'Admin\Test_score_and_certifications::list');
    $routes->match(['get', 'post'], 'test_score_and_certifications_add', 'Admin\Test_score_and_certifications::add');
    $routes->match(['get', 'post'], 'test_score_and_certifications_edit/(:num)', 'Admin\Test_score_and_certifications::edit/$1');
    $routes->get('test_score_and_certifications_delete/(:num)', 'Admin\Test_score_and_certifications::delete/$1');

    //Training and workshop
    $routes->get('training_and_workshop', 'Admin\Training_and_workshop::list');
    $routes->match(['get', 'post'], 'training_and_workshop_add', 'Admin\Training_and_workshop::add');
    $routes->match(['get', 'post'], 'training_and_workshop_edit/(:num)', 'Admin\Training_and_workshop::edit/$1');
    $routes->get('training_and_workshop_delete/(:num)', 'Admin\Training_and_workshop::delete/$1');
    //Teaching and mentoring

    $routes->match(['get', 'post'], 'teaching_and_mentoring_edit/(:num)', 'Admin\Teaching_and_mentoring::edit/$1');
    //Social Works

    $routes->match(['get', 'post'], 'social_works_edit/(:num)', 'Admin\Social_works::edit/$1');

    //Journal Publications
    $routes->get('journal_publications', 'Admin\Journal_publications::list');
    $routes->match(['get', 'post'], 'journal_publications_add', 'Admin\Journal_publications::add');
    $routes->match(['get', 'post'], 'journal_publications_edit/(:num)', 'Admin\Journal_publications::edit/$1');
    $routes->get('journal_publications_delete/(:num)', 'Admin\Journal_publications::delete/$1');

    //Conference Publications
    $routes->get('conference_publications', 'Admin\Conference_publications::list');
    $routes->match(['get', 'post'], 'conference_publications_add', 'Admin\Conference_publications::add');
    $routes->match(['get', 'post'], 'conference_publications_edit/(:num)', 'Admin\Conference_publications::edit/$1');
    $routes->get('conference_publications_delete/(:num)', 'Admin\Conference_publications::delete/$1');

    //Overall Skills
    $routes->get('overall_skills_list', 'Admin\Overall_skills::index');
    $routes->match(['get', 'post'], 'overall_skills_add', 'Admin\Overall_skills::add');
    $routes->match(['get', 'post'], 'overall_skills_edit/(:num)', 'Admin\Overall_skills::edit/$1');
    $routes->get('overall_skills_delete/(:num)', 'Admin\Overall_skills::delete/$1');

    //Language Skills
    $routes->get('language_skills_list', 'Admin\Language_skills::index');
    $routes->match(['get', 'post'], 'language_skills_add', 'Admin\Language_skills::add');
    $routes->match(['get', 'post'], 'language_skills_edit/(:num)', 'Admin\Language_skills::edit/$1');
    $routes->get('language_skills_delete/(:num)', 'Admin\Language_skills::delete/$1');

    //login system
    $routes->get('logout', 'FrontEnd::logout');
    $routes->get('login_edit', 'FrontEnd::login_edit');
    $routes->post('login_edit', 'FrontEnd::login_edit_match');
});
