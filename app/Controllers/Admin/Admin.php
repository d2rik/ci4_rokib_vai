<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    function index()
    {
        return view('Admin/index');
    }
}
