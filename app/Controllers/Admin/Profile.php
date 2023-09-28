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

            $image = service('image');
            $model = new \App\Models\Profile_model();
            $item = $model->get();
            $oldFile = $item['profile_image'];

            $path = './uploads/images/profile/';
            $oldFilePath_main = $path . $oldFile;
            $oldFilePath_thumb = $path . "small/" . $oldFile;

            $newFile = $this->request->getFile('profile_image');

            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newRandomName = $newFile->getRandomName();

                if (!is_dir($path . 'small')) {
                    mkdir($path . 'small', 0777, true);
                }

                $newFile->move($path, $newRandomName);

                $image->withFile(src($newRandomName, 'profile'))->fit(400, 520, 'center')->save($path . 'small/' . $newRandomName);

                if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                    unlink($oldFilePath_main);
                    unlink($oldFilePath_thumb);
                }
            } else {
                $newRandomName = $oldFile;
            }
            $_POST['id'] = 1;
            $_POST['profile_image'] = $newRandomName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Profile image Update Successfully');
            }
            return redirect()->to('/admin');
        }

        return view('Admin/index', $data);
    }
    public function edit_banner_image()
    {
        $page = "edit Banner Image";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        if ($this->request->is('post')) {
            $image = service('image');
            $model = new \App\Models\Profile_model();
            $item = $model->get();
            $oldFile = $item['banner_image'];

            $path = './uploads/images/banner/';
            $oldFilePath_main = $path . $oldFile;
            $oldFilePath_thumb = $path . "small/" . $oldFile;

            $newFile = $this->request->getFile('banner_image');

            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newRandomName = $newFile->getRandomName();

                if (!is_dir($path . 'small')) {
                    mkdir($path . 'small', 0777, true);
                }

                $newFile->move($path, $newRandomName);

                $image->withFile(src($newRandomName, 'banner'))->fit(1400, 208, 'center')->save($path . 'small/' . $newRandomName);
                if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                    unlink($oldFilePath_main);
                    unlink($oldFilePath_thumb);
                }
            } else {
                $newRandomName = $oldFile;
            }
            $_POST['id'] = 1;
            $_POST['banner_image'] = $newRandomName;

            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Banner Image Update Successfully');
            }
            return redirect()->to('/admin');
        }

        $data['main_content'] = view('Admin/banner_image', $data);
        return view('Admin/index', $data);
    }
}
