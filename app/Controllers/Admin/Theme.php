<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Theme extends BaseController
{
    public function index()
    {
        $page = 'edit theme appearance';
        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Theme();
        $data['theme'] = $model->get_info();
        $data['main_content'] = view('Admin/theme', $data);
        return view('Admin/index', $data);
    }

    public function edit()
    {
        $page = 'theme appearance edit';
        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == 'post') {
            $model = new \App\Models\Theme();
            $_POST['id'] = 1;
            $model->save($_POST);
            $data['theme'] = $model->get_info();
        }
        
        $data['main_content'] = view('Admin/theme', $data);
        return view('Admin/index', $data);
    }
}
