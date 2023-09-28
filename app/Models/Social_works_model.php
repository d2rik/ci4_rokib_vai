<?php

namespace App\Models;

use CodeIgniter\Model;

class Social_works_model extends Model
{
    protected $table = 'social_work';
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
