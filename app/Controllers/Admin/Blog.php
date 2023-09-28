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
            $image = service('image');
            $path = './uploads/images/blog_image/';
            $file = $this->request->getFile('thumbnail');
            $randomName = $file->getRandomName();
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move($path, $randomName);
                if (!is_dir($path . 'thumbs')) {
                    mkdir($path . 'thumbs', 0777, true);
                }
                $image->withFile(src($randomName, 'blog_image'))->fit(150, 100, 'center')->save($path . 'thumbs/' . $randomName);
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
            $image = service('image');
            $item = $model->get_blog_edit($id);
            $oldFile = $item['thumbnail'];

            $path = './uploads/images/blog_image/';
            $oldFilePath_main = $path . $oldFile;
            $oldFilePath_thumb = $path . "thumbs/" . $oldFile;

            $newFile = $this->request->getFile('thumbnail');

            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newRandomName = $newFile->getRandomName();

                if (!is_dir($path . 'thumbs')) {
                    mkdir($path . 'thumbs', 0777, true);
                }
                $newFile->move($path, $newRandomName);

                $image->withFile(src($newRandomName, 'blog_image'))->fit(150, 100, 'center')->save($path . 'thumbs/' . $newRandomName);

                if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                    unlink($oldFilePath_main);
                    unlink($oldFilePath_thumb);
                }
            } else {
                $newRandomName = $oldFile;
            }
            $_POST['id'] = $id;
            $_POST['thumbnail'] = $newRandomName;
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
        $oldFilePath_main = "./uploads/images/blog_image/" . $oldFile;
        $oldFilePath_thumb = "./uploads/images/blog_image/thumbs/" . $oldFile;
        if ($id) {
            $model->del($id);
            if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                unlink($oldFilePath_main);
                unlink($oldFilePath_thumb);
            }
        }
        return redirect()->to('admin/blog_list');
    }
}
