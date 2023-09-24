<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog_model extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    public function get_blog($slug = false, $limit = 1, $offset = 0,)
    {
        if ($slug === false) {
            return $this->orderBy('id', 'DESC')->findAll($limit, $offset);
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function get_blog_admin()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }

    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['title', 'slug', 'blog', 'thumbnail'];
}
