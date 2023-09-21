<?php

namespace App\Models;

use CodeIgniter\Model;

class Professional_experience_model extends Model
{
    protected $table = 'professional_experience';
    protected $primaryKey = 'id';
    public function get_professional_experience()
    {
        return $this->findAll();
    }
}
