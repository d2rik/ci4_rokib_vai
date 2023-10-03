<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Training_and_workshop extends BaseController
{
    public function list()
    {
        $page = "list of training and workshop";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Training_and_workshop_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/training_and_workshop_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Training and workshop";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Training_and_workshop_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/training_and_workshop');
            }
        }
        $data['main_content'] = view('Admin/training_and_workshop_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Professional Experience";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Training_and_workshop_model();
        $item = $model->get($id);
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/training_and_workshop');
            }
        }

        $data['main_content'] = view('Admin/training_and_workshop_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Training_and_workshop_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/training_and_workshop');
    }
}
