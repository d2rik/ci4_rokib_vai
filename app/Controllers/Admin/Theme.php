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
        if ($this->request->is('post')) {
            $model = new \App\Models\Theme();
            $_POST['id'] = 1;
            if($model->save($_POST)){
                session()->setFlashdata('success_alert', 'Theme Color Update Successfully');
            }
            return redirect()->to('admin');
        }
    }
}
