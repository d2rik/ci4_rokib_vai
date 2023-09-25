<?php

namespace App\Models;

use CodeIgniter\Model;

class Achievements_and_excellence_model extends Model
{
    protected $table = 'achievements_and_excellence';
    protected $primaryKey = 'id';
    public function get($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['title', 'description'];
}
