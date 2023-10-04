<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Research_interest extends BaseController
{
    public function index()
    {
        $page = "list of Research interest";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Research_interest_model();
        $data['research_interest'] = $model->get();

        $data['main_content'] = view('Admin/research_interest_list', $data);
        return view('Admin/index', $data);
    }
    public function add()
    {
        $page = "Add Research Interest";

        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];

        $model = new \App\Models\Research_interest_model();

        if ($this->request->is('post')) {
            $title = $this->request->getPost('title');
            $image = service('image');
            $path = './uploads/images/research_interest/';
            $file = $this->request->getFile('image');
            $randomName = $file->getRandomName();
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move($path, $randomName);
                if (!is_dir($path . 'thumbs')) {
                    mkdir($path . 'thumbs', 0777, true);
                }
                $image->withFile(src($randomName, 'research_interest'))->fit(300, 200, 'center')->save($path . 'thumbs/' . $randomName);
            }

            $database_data = [
                'title' => $title,
                'description' => $this->request->getPost('description'),
                'image' => $randomName,
            ];

            if ($model->save($database_data)) {
                session()->setFlashdata('success_alert', 'Add Successfully');
                return redirect()->to('admin/research_interest');
            }
        }
        $data['main_content'] = view('Admin/research_interest_add', $data);
        return view('Admin/index', $data);
    }

    public function edit($id)
    {
        $page = "edit Research interest";
        $data = [
            'site_info' => $this->site_info,
            'page_title' => ucfirst($page),
        ];
        $model = new \App\Models\Research_interest_model();
        $data['research_interest'] = $model->get($id);

        if ($this->request->is('post')) {
            $image = service('image');
            $item = $model->get($id);
            $oldFile = $item['image'];

            $path = './uploads/images/research_interest/';
            $oldFilePath_main = $path . $oldFile;
            $oldFilePath_thumb = $path . "thumbs/" . $oldFile;

            $newFile = $this->request->getFile('image');

            if ($newFile->isValid() && !$newFile->hasMoved()) {
                $newRandomName = $newFile->getRandomName();

                if (!is_dir($path . 'thumbs')) {
                    mkdir($path . 'thumbs', 0777, true);
                }
                $newFile->move($path, $newRandomName);

                $image->withFile(src($newRandomName, 'research_interest'))->fit(300, 200, 'center')->save($path . 'thumbs/' . $newRandomName);

                if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                    unlink($oldFilePath_main);
                    unlink($oldFilePath_thumb);
                }
            } else {
                $newRandomName = $oldFile;
            }
            $_POST['id'] = $id;
            $_POST['image'] = $newRandomName;
            if ($model->save($_POST)) {
                session()->setFlashdata('success_alert', 'Update Successfully');
                return redirect()->to('admin/research_interest');
            }
        }

        $data['main_content'] = view('Admin/research_interest_edit', $data);
        return view('Admin/index', $data);
    }

    public function delete($id = false)
    {
        $model = new \App\Models\Research_interest_model();
        $item = $model->get($id);

        $oldFile = $item['image'];
        $oldFilePath_main = "./uploads/images/research_interest/" . $oldFile;
        $oldFilePath_thumb = "./uploads/images/research_interest/thumbs/" . $oldFile;
        if ($id) {
            $model->del($id);
            if (is_file($oldFilePath_main) && is_file($oldFilePath_thumb)) {
                unlink($oldFilePath_main);
                unlink($oldFilePath_thumb);
            }
        }
        return redirect()->to('admin/research_interest');
    }
}
