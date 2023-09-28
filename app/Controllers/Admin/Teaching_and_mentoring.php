<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Teaching_and_mentoring extends BaseController
{
    public function edit($id)
    {
        $page = "edit Teaching and Mentoring";

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
                return redirect()->to('admin/teaching_and_mentoring_edit/1');
            }
        }

        $data['main_content'] = view('Admin/teaching_and_mentoring_edit', $data);
        return view('Admin/index', $data);
    }

}
