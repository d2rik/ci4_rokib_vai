<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class FrontEnd extends BaseController
{

    public function home($page = 'home'): string
    {
        $sub_title = "about me";
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($sub_title);
        $model = new \App\Models\About_model();
        $data['about'] = $model->get_about();
        $model = new \App\Models\Contact_model();
        $data['contact_info'] = $model->get_contact();

        $data['site_info'] = $this->site_info;

        $data['main_content'] = view('home', $data);

        return view('index', $data);
    }

    public function academic_info($page = 'academic information'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Educational_qualifications_model();
        $data['educational_qualifications'] = $model->get();

        $model = new \App\Models\Achievements_and_excellence_model();
        $data['achievements_and_excellence'] = $model->get();

        $data['main_content'] = view('academic_info', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function professional_experience($page = 'professional experience'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Professional_experience_model();
        $data['professional_experience'] = $model->get();


        $data['main_content'] = view('professional_experience', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    public function resume($page = 'resume'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);
        $model = new \App\Models\Professional_experience_model();
        $data['professional_experience'] = $model->get();

        $model2 = new \App\Models\Educational_qualifications_model();
        $data['educational_qualifications'] = $model2->get();

        $model = new \App\Models\Achievements_and_excellence_model();
        $data['achievements_and_excellence'] = $model->get();

        $model = new \App\Models\Overall_skills_model();
        $data['overall_skills'] = $model->get();
        $model = new \App\Models\Language_skills_model();
        $data['language_skills'] = $model->get();


        $data['main_content'] = view('resume', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    public function research_and_publications($page = 'research and publications'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $model = new \App\Models\Journal_publications_model();
        $data['journal_publications'] = $model->get();
        $model2 = new \App\Models\Conference_publications_model();
        $data['conference_publications'] = $model2->get();

        $data['main_content'] = view('research_and_publications', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    public function teaching_and_mentoring($page = 'Teaching and mentoring'): string
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $model = new \App\Models\Teaching_and_mentoring_model();
        $data['teaching_and_mentoring'] = $model->get();

        $data['main_content'] = view('teaching_and_mentoring', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function blog($page = 'blog'): string
    {
        helper(['image']);
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $model = new \App\Models\Blog_model();
        $data['blog'] = $model->get_blog();

        $data['main_content'] = view('blog', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function show_blog($page = 'single blog'): string
    {

        helper(['image']);
        $uri = $this->request->getUri();
        $slug = $uri->getSegment(2);
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $model = new \App\Models\Blog_model();
        $data['blog'] = $model->get_blog($slug);

        if (empty($data['blog'])) {
            throw new PageNotFoundException('Cannot find the blog item: ' . $slug);
        }

        $data['main_content'] = view('single_blog', $data);
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
    public function social_works($page = 'Social Works')
    {
        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('social_works', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }
    // public function register($page = 'Register')
    // {
    //     helper('form');

    //     $data['page_title'] = ucfirst($page);
    //     $data['sub_title'] = strtoupper($page);

    //     $data['main_content'] = view('register', $data);
    //     $data['site_info'] = $this->site_info;
    //     return view('index', $data);
    // }

    // public function create_resister()
    // {
    //     helper('form');
    //     if ($this->request->is('post')) {
    //         if (!$this->validate([
    //             'username' => 'required',
    //             'password' => 'required',
    //             'con_password' => 'required|matches[password]'
    //         ])) {
    //             return $this->register();
    //         }

    //         $validData = $this->validator->getValidated();
    //         $validData['password'] = password_hash($validData['password'], PASSWORD_BCRYPT);

    //         $model = new \App\Models\Admin_model();

    //         $model->save($validData);
    //         return redirect()->to('/admin');
    //     }
    // }
    public function login($page = 'Login')
    {
        helper('form');

        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('login', $data);
        $data['site_info'] = $this->site_info;
        return view('index', $data);
    }

    public function match_login()
    {
        helper('form');
        if ($this->request->is('post')) {
            if (!$this->validate([
                'username' => 'required',
                'password' => 'required',
            ])) {
                return $this->login();
            }
            $validData = $this->validator->getValidated();
            $model = new \App\Models\Admin_model();
            $database_data = $model->get($validData['username']);
            if ($database_data) {
                if (password_verify($validData['password'], $database_data['password'])) {
                    $this->session->set("admin", $database_data['role']);
                    session()->setFlashdata('success_alert', 'Successfully Logged in');
                    return redirect()->to('/admin');
                } else {
                    session()->setFlashdata('danger_alert', 'Username and Password Do Not Match');
                    session_destroy();
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('danger_alert', 'Username and Password Do Not Match');
                session_destroy();
                return redirect()->to('/login');
            }
        }
    }
    public function logout()
    {
        session_destroy();
        return redirect()->to('/');
    }

    public function login_edit($page = "Change Login Password & Username")
    {
        helper('form');

        $data['page_title'] = ucfirst($page);
        $data['sub_title'] = strtoupper($page);

        $data['main_content'] = view('Admin/login_edit', $data);
        $data['site_info'] = $this->site_info;
        return view('Admin/index', $data);
    }
    public function login_edit_match()
    {
        helper('form');
        if ($this->request->is('post')) {
            if (!$this->validate([
                'old_username' => 'required',
                'old_password' => 'required',
                'new_username' => 'required',
                'new_password' => 'required',
                'confirm_password' => 'required|matches[new_password]',
            ])) {
                return $this->login_edit();
            }
            $validData = $this->validator->getValidated();
            $model = new \App\Models\Admin_model();
            $database_data = $model->get($validData['old_username']);
            if ($database_data) {
                if (password_verify($validData['old_password'], $database_data['password'])) {

                    $validData['password'] = password_hash($validData['new_password'], PASSWORD_BCRYPT);
                    $validData['username'] = $validData['new_username'];

                    $valData = [
                        "id" => 1,
                        "username" => $validData['new_username'],
                        "password" => password_hash($validData['new_password'], PASSWORD_BCRYPT)
                    ];
                    if ($model->save($valData)) {
                        session()->setFlashdata('success_alert', 'Change Successfully');
                        return redirect()->to('/admin');
                    }

                    return $this->logout();
                } else {
                    session()->setFlashdata('danger_alert', 'Old Username and Password Do Not Match');
                    return redirect()->to('/admin/login_edit');
                }
            } else {
                session()->setFlashdata('danger_alert', 'Old Username and Password Do Not Match');
                return redirect()->to('/admin/login_edit');
            }
            return $this->login_edit();
        }
    }
}
