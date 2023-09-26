<?php

namespace App\Models;

use CodeIgniter\Model;

class Overall_skills_model extends Model
{
    protected $table = 'overall_skills';
    protected $primaryKey = 'id';
    public function get($id = false)
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
    protected $allowedFields = ['skill_name', 'skill_level'];
}
