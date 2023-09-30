<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function index()
    {
        $page = "dashboard";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Blog_model();
        $data['blog_items'] = $model->get_blog_admin();
        $data['main_content'] = view('Admin/dashboard',$data);
        return view('Admin/index', $data);
    }
}
