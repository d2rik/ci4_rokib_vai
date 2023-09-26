<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $page = "edit contact";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Contact_model();
        $data['contact_info'] = $model->get_contact();

        $data['main_content'] = view('Admin/contact', $data);
        return view('Admin/index', $data);
    }
    public function edit()
    {

        $model = new \App\Models\Contact_model();
        if ($this->request->is('post')) {
            $_POST['id'] = 1;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('/contact_me');
            }
        }
    }
}
