<?php

namespace App\Models;

use CodeIgniter\Model;

class Teaching_and_mentoring_model extends Model
{
    protected $table = 'teaching_and_mentoring';
    protected $primaryKey = 'id';
    public function get($id = false)
    {
        if ($id == false) {
            return $this->first();
        }
        return $this->where("id", $id)->first();
    }
    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['image', 'description','updated_at'];
}
