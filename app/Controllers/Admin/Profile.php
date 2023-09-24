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
    public function edit_profile_image()
    {
        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $model = new \App\Models\Profile_model();
            $file = $this->request->getFile('profile_image');
            $file_extension = $file->getExtension();
            $previousFilePath='./assets/image/profile.' . $file_extension;
            if ($file->isValid()) {
                if (file_exists($previousFilePath)) {
                    unlink($previousFilePath);
                }
                $file->move('./assets/image', 'profile.' . $file_extension, false);
            }
            $file_name = $file->getName();
            $_POST['id'] = 1;
            $_POST['profile_image'] = $file_name;
            $model->save($_POST);
            return redirect()->to('/');
        }
        $page = "edit profile Image";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),

        ];
        $data['main_content'] = view('Admin/profile_image', $data);
        return view('Admin/index', $data);
    }
}
