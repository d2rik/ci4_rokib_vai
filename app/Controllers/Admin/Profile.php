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
        $page = "profile edit";
        $site_model= new \App\Models\Site_info_model();
        $data = [
            'site_info' => $site_model->get_profile(),
            'page_title' => ucfirst($page),
        ];

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $model = new \App\Models\Profile_model();
            $_POST['id'] = 1;
            $model->save($_POST);

            $data['site_info'] = $site_model->get_profile();
        }

        $data['main_content'] = view('Admin/profile', $data);
        return view('Admin/index', $data);
    }
}
