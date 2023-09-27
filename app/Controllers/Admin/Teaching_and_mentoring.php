<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Teaching_and_mentoring extends BaseController
{
    public function list()
    {
        $page = "list of Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Teaching_and_mentoring_model();
        $data['item'] = $model->get();

        $data['main_content'] = view('Admin/teaching_and_mentoring_list', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Teaching_and_mentoring_model();
        $item = $model->get($id);
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $oldFile = $item['image'];
            $newFile = $this->request->getFile('image');
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
            $_POST['image'] = $newName;

            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/teaching_and_mentoring');
            }
        }

        $data['main_content'] = view('Admin/teaching_and_mentoring_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Teaching_and_mentoring_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/teaching_and_mentoring');
    }
}
