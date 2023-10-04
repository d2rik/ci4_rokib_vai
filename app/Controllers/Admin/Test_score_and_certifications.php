<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Test_score_and_certifications extends BaseController
{
    public function list()
    {
        $page = "list of Test score and certifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Test_score_and_certifications_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/test_score_and_certifications_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Test score and certifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Test_score_and_certifications_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/test_score_and_certifications');
            }
        }
        $data['main_content'] = view('Admin/test_score_and_certifications_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Test score and certifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Test_score_and_certifications_model();
        $item = $model->get($id);
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/test_score_and_certifications');
            }
        }

        $data['main_content'] = view('Admin/test_score_and_certifications_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Test_score_and_certifications_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/test_score_and_certifications');
    }
}
