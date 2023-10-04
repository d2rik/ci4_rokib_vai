<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Others_interest extends BaseController
{
    public function index()
    {
        $page = "list of Others interest";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Others_interest_model();
        $data['others_interest'] = $model->get();

        $data['main_content'] = view('Admin/others_interest_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Others Interest";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Others_interest_model();

        if ($this->request->is('post')) {

            $database_data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
            ];

            if ($model->save($database_data)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/others_interest');
            }
        }
        $data['main_content'] = view('Admin/others_interest_add', $data);
        return view('Admin/index', $data);
    }

    public function edit($id)
    {
        $page = "edit Others interest";
        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Others_interest_model();
        $data['others_interest'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/others_interest');
            }
        }

        $data['main_content'] = view('Admin/others_interest_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Others_interest_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/others_interest');
    }
}
