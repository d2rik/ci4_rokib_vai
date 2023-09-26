<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Journal_publications extends BaseController
{
    public function list()
    {
        $page = "list of Journal Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Journal_publications_model();
        $data['items'] = $model->get();

        $data['main_content'] = view('Admin/journal_publications_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Journal Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Journal_publications_model();

        if ($this->request->is('post')) {
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/journal_publications');
            }
        }
        $data['main_content'] = view('Admin/journal_publications_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Journal Publications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Journal_publications_model();
        $data['item'] = $model->get($id);

        if ($this->request->is('post')) {
            $_POST['id'] = $id;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/journal_publications');
            }
        }

        $data['main_content'] = view('Admin/journal_publications_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Journal_publications_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/journal_publications');
    }
}
