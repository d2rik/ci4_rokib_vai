<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Profile extends BaseController
{

    public function index()
    {
        $page = "edit profile";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),

        ];
        $data['main_content'] = view('Admin/profile', $data);
        return view('Admin/index', $data);
    }
    public function edit()
    {
        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $model = new \App\Models\Profile_model();
            $_POST['id'] = 1;
            $model->save($_POST);
            return redirect()->to('/');
        }
    }
}
