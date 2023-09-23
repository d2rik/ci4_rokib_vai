<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class External_link extends BaseController
{
    public function index()
    {
        $page = "list of external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\External_link_model();
        $data['external_link'] = $model->get_external_link();

        $data['main_content'] = view('Admin/external_link_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\External_link_model();
        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $model->save($_POST);
        }
        $data['main_content'] = view('Admin/external_link_add', $data);
        return view('Admin/index', $data);
    }
    public function edit($id)
    {
        $page = "edit external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\External_link_model();
        $data['external_link'] = $model->get_external_link($id);

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $_POST['id'] = $id;
            $model->save($_POST);
            $data['external_link'] = $model->get_external_link($id);
        }

        $data['main_content'] = view('Admin/external_link', $data);
        return view('Admin/index', $data);
    }
    public function delete($id)
    {
        $page = "edit external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\External_link_model();
        $model->del($id);
        $data['external_link'] = $model->get_external_link($id);

        $data['main_content'] = view('Admin/external_link_list', $data);
        return view('Admin/index', $data);
    }
}
