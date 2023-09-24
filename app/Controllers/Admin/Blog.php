<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $page = "list of external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Blog_model();
        $data['blog'] = $model->get_blog_admin();

        $data['main_content'] = view('Admin/blog_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Blog_model();
        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $title = $this->request->getPost('title');
            $slug = url_title("$title", '-', true);

            $file = $this->request->getFile('thumbnail');
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move('./assets/image/blog_image');
            }

            $originalName = $file->getClientName();
            $database_data = [
                'title' => $title,
                'slug' => $slug,
                'blog' => $this->request->getPost('blog'),
                'thumbnail' => $originalName,
            ];

            $model->save($database_data);
            return redirect()->to('admin/blog_list');
        }
        $data['main_content'] = view('Admin/blog_add', $data);
        return view('Admin/index', $data);
    }

    public function edit($id)
    {
        $page = "edit external website link";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Blog_model();
        $data['blog'] = $model->get_blog($id);

        $requestMethod = $this->request->getMethod();
        if ($requestMethod == "post") {
            $_POST['id'] = $id;
            $model->save($_POST);
            return redirect()->to('admin/blog_list');
        }

        $data['main_content'] = view('Admin/blog_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Blog_model();
        if ($id) {
            $model->del($id);
        }
        return redirect()->to('admin/blog_list');
    }
}
