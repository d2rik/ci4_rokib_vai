<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Achievements_and_excellence extends BaseController
{
    public function list()
    {
        $page = "list of Educational Qualifications";

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
        $page = "Add Educational Qualifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Achievements_and_excellence_model();
        $requestMethod = $this->request->getMethod();

        if ($requestMethod == "post") {
            $model->save($_POST);
            return redirect()->to('admin/achievements_and_excellence');
        }
        $data['main_content'] = view('Admin/achievements_and_excellence_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit Educational Qualifications";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Achievements_and_excellence_model();
        $data['item'] = $model->get($id);

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $_POST['id'] = $id;
            $model->save($_POST);
            return redirect()->to('admin/achievements_and_excellence');
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
