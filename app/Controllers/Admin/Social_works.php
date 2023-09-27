<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Social_works extends BaseController
{
    public function index()
    {
        $page = "Social Works";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),

        ];
        $data['main_content'] = view('Admin/social_works', $data);
        return view('Admin/index', $data);
    }
}
