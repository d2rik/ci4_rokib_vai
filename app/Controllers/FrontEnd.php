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
        $model = $userModel = new \App\Models\Educational_qualifications_model();
        $data['educational_qualifications'] = $model->get_educational_qualifications();

        $model = $userModel = new \App\Models\Achievements_and_excellence();
        $data['achievements_and_excellence'] = $model->get_achievements_and_excellence();
        
        $data['main_content'] = view('academic_info', $data);
        return view('index', $data);
    }

    public function professional_experience($page = 'professional experience'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('professional_experience');
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
