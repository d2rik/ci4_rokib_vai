<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog_model extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    public function blog($slug = false, $limit = 6, $offset = 0, )
    {
        if ($slug === false) {
            return $this->orderBy('id', 'DESC')->findAll($limit, $offset);
        }

        return $this->where(['slug' => $slug])->first();
    }
}
