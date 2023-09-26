<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Professional_experience extends BaseController
{
    public function list()
    {
        $page = "list of Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Professional_experience_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/professional_experience_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Professional_experience_model();

        if ($this->request->is('post')) {
            $file = $this->request->getFile('company_logo');
            $newFileName = $file->getRandomName();
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move('./assets/image', $newFileName);
            }
            $_POST['company_logo'] = $newFileName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/professional_experience');
            }
        }
        $data['main_content'] = view('Admin/professional_experience_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Professional_experience_model();
        $item = $model->get($id);
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $oldFile = $item['company_logo'];
            $newFile = $this->request->getFile('company_logo');
            $oldFilePath = "./assets/image/" . $oldFile;
            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newName = $newFile->getRandomName();
                $newFile->move('./assets/image/', $newName);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            } else {
                $newName = $oldFile;
            }
            $_POST['id'] = $id;
            $_POST['company_logo'] = $newName;

            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/professional_experience');
            }
        }

        $data['main_content'] = view('Admin/professional_experience_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Professional_experience_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/professional_experience');
    }
}
