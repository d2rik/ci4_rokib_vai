<?php

namespace App\Models;

use CodeIgniter\Model;

class Professional_experience_model extends Model
{
    protected $table = 'professional_experience';
    protected $primaryKey = 'id';
    public function get($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where("id", $id)->first();
    }
    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['year', 'title', 'company', 'company_logo', 'responsibilities', 'updated_at'];
}
