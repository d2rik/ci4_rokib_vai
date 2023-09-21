<?php

namespace App\Controllers;

class FrontEnd extends BaseController
{
    public function home($page = 'home'): string
    {
        $sub_title = "about me";

        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($sub_title);
        $model = new \App\Models\About_model();
        $data['about'] = $model->get_about();
        $data['main_content'] = view('home', $data);

        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function academic_info($page = 'academic information'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Educational_qualifications_model();
        $data['educational_qualifications'] = $model->get_educational_qualifications();

        $model = new \App\Models\Achievements_and_excellence();
        $data['achievements_and_excellence'] = $model->get_achievements_and_excellence();

        $data['main_content'] = view('academic_info', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function professional_experience($page = 'professional experience'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Professional_experience_model();
        $data['professional_experience'] = $model->get_professional_experience();


        $data['main_content'] = view('professional_experience', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    public function research_and_publications($page = 'research and publications'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('research_and_publications');
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function blog($page = 'blog'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('blog');
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    public function single_blog($page = 'single blog'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('single_blog');
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function contact_me($page = 'contact me'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Contact_model();
        $data['contact'] = $model->get_contact();
        $data['main_content'] = view('contact_me', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
}
