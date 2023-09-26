<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Educational_qualifications extends BaseController
{
    public function list()
    {
        $page = "list of Educational Qualifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Educational_qualifications_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/educational_qualifications_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Educational Qualifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Educational_qualifications_model();
        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/educational_qualifications');
            }
        }
        $data['main_content'] = view('Admin/educational_qualifications_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Educational Qualifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Educational_qualifications_model();
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/educational_qualifications');
            }
        }

        $data['main_content'] = view('Admin/educational_qualifications_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Educational_qualifications_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/educational_qualifications');
    }
}
