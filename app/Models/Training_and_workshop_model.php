<?php

namespace App\Models;

use CodeIgniter\Model;

class Training_and_workshop_model extends Model
{
    protected $table = 'training_and_workshop';
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
    protected $allowedFields = ['title', 'date', 'duration', 'location', 'training_type', 'details', 'updated_at'];
}
