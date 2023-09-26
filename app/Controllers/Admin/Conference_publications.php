<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Conference_publications extends BaseController
{
    public function list()
    {
        $page = "list of Conference Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Conference_publications_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/conference_publications_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Conference Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Conference_publications_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/conference_publications');
            }
        }
        $data['main_content'] = view('Admin/conference_publications_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Conference Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Conference_publications_model();
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/conference_publications');
            }
        }

        $data['main_content'] = view('Admin/conference_publications_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Conference_publications_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/conference_publications');
    }
}
