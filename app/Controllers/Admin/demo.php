<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Site_config extends BaseController
{
    function index()
    {
        $page = "dashboard";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
            'main_content' => view('Admin/dashboard'),
        ];
        return view('Admin/index',$data);
    }
}
