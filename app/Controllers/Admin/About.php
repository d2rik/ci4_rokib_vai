<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $page = "edit about";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\About_model();
        $data['about_info'] = $model->get_about();
        $data['main_content'] = view('Admin/about', $data);
        return view('Admin/index', $data);
    }
    public function edit()
    {

        $model = new \App\Models\About_model();

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $_POST['id'] = 1;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
            }
            return redirect()->to('/admin');
        }
    }
}
