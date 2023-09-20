<?php

namespace App\Controllers;

class FrontEnd extends BaseController
{
    public function home($page = 'home'): string
    {
        $sub_title = "about me";

        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($sub_title);

        $data['main_content'] = view('home');
        return view('index', $data);
    }
    public function academic_info($page = 'academic information'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('academic_info');
        return view('index', $data);
    }
    public function personal_experience($page = 'personal experience'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('personal_experience');
        return view('index', $data);
    }
    public function research_and_publications($page = 'research and publications'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('research_and_publications');
        return view('index', $data);
    }
    
    public function blog($page = 'blog'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('blog');
        return view('index', $data);
    }
    public function single_blog($page = 'single blog'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('single_blog');
        return view('index', $data);
    }

    public function contact_me($page = 'contact me'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('contact_me');
        return view('index', $data);
    }
}
