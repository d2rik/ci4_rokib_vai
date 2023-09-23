<?php

namespace App\Models;

use CodeIgniter\Model;

class External_link_model extends Model
{
    protected $table = 'external_link_model';
    protected $primaryKey = 'id';
    public function get_external_link($id = false)
    {
        if ($id === false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['site_name', 'site_link'];
}
