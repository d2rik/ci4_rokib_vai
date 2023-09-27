<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Achievements_and_excellence extends BaseController
{
    public function list()
    {
        $page = "list of Achievements and excellence";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Achievements_and_excellence_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/achievements_and_excellence_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Achievements and excellence";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Achievements_and_excellence_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/achievements_and_excellence');
            }
        }
        $data['main_content'] = view('Admin/achievements_and_excellence_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Achievements and excellence";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Achievements_and_excellence_model();
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/achievements_and_excellence');
            }
        }

        $data['main_content'] = view('Admin/achievements_and_excellence_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Achievements_and_excellence_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/achievements_and_excellence');
    }
}
