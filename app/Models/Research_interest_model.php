<?php

namespace App\Models;

use CodeIgniter\Model;

class Research_interest_model extends Model
{
    protected $table = 'research_interest';
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
    protected $allowedFields = ['title', 'image', 'description', 'updated_at'];
}
