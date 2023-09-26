<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Overall_skills extends BaseController
{
    public function index()
    {
        $page = "list of Overall Skills";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Overall_skills_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/overall_skills_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Overall_skills_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/overall_skills_list');
            }
        }
        $data['main_content'] = view('Admin/overall_skills_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Overall Skills";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Overall_skills_model();
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/overall_skills_list');
            }
        }

        $data['main_content'] = view('Admin/overall_skills_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Overall_skills_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/overall_skills_list');
    }
}
