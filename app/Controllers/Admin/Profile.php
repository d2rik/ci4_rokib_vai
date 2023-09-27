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
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Profile Update Successfully');
            }
            return redirect()->to('/admin');
        }
    }
    public function edit_profile_image()
    {
        $page = "edit profile Image";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $data['main_content'] = view('Admin/profile_image', $data);
        if ($this->request->is('post')) {
            $model = new \App\Models\Profile_model();
            $file = $this->request->getFile('profile_image');
            $item = $model->get_banner();
            $oldFile = $item['profile_image'];
            $oldFilePath = "./assets/image/" . $oldFile;
            $newFileName = $file->getRandomName();
            if ($file->isValid()) {
                if (file_exists($oldFilePath)) {
                    $file->move('./assets/image', $newFileName);
                    unlink($oldFilePath);
                }
            }
            $_POST['id'] = 1;
            $_POST['profile_image'] = $newFileName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Profile image Update Successfully');
            }
            return redirect()->to('/admin');
        }

        return view('Admin/index', $data);
    }
    public function edit_banner_image()
    {
        if ($this->request->is('post')) {
            $model = new \App\Models\Profile_model();
            $file = $this->request->getFile('banner_image');
            $item = $model->get();
            $oldFile = $item['banner_image'];
            $oldFilePath = "./assets/image/" . $oldFile;
            $newFileName = $file->getRandomName();
            if ($file->isValid()) {
                if (file_exists($oldFilePath)) {
                    $file->move('./assets/image', $newFileName);
                    unlink($oldFilePath);
                }
            }
            $_POST['id'] = 1;
            $_POST['banner_image'] = $newFileName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Banner Image Update Successfully');
            }
            return redirect()->to('/admin');
        }
        $page = "edit Banner Image";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),

        ];
        $data['main_content'] = view('Admin/banner_image', $data);
        return view('Admin/index', $data);
    }
}
