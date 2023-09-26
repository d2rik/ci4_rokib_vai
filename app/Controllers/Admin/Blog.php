<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $page = "list of Blog";

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
        $page = "Add Blog";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Blog_model();

        if ($this->request->is('post')) {
            $title = $this->request->getPost('title');
            $slug = uniqid();

            $file = $this->request->getFile('thumbnail');
            $randomName = $file->getRandomName();
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move('./assets/image/blog_image', $randomName);
            }

            $database_data = [
                'title' => $title,
                'slug' => $slug,
                'blog' => $this->request->getPost('blog'),
                'thumbnail' => $randomName,
            ];

            if ($model->save($database_data)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/blog_list');
            }
        }
        $data['main_content'] = view('Admin/blog_add', $data);
        return view('Admin/index', $data);
    }

    public function edit($id)
    {
        $page = "edit Blog";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Blog_model();
        $data['blog'] = $model->get_blog_edit($id);

        if ($this->request->is('post')) {
            $item = $model->get_blog_edit($id);

            $oldFile = $item['thumbnail'];
            $newFile = $this->request->getFile('thumbnail');
            $oldFilePath = "./assets/image/blog_image/" . $oldFile;
            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newName = $newFile->getRandomName();
                $newFile->move('./assets/image/blog_image', $newName);
                unlink($oldFilePath);
            } else {
                $newName = $oldFile;
            }
            $_POST['id'] = $id;
            $_POST['thumbnail'] = $newName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/blog_list');
            }
        }

        $data['main_content'] = view('Admin/blog_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Blog_model();
        $item = $model->get_blog_edit($id);

        $oldFile = $item['thumbnail'];
        $oldFilePath = "./assets/image/blog_image/" . $oldFile;
        if ($id) {
            $model->del($id);
            unlink($oldFilePath);
        }
        return redirect()->to('admin/blog_list');
    }
}
