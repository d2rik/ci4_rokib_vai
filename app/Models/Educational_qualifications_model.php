<?php

namespace App\Models;

use CodeIgniter\Model;

class Educational_qualifications_model extends Model
{
    protected $table = 'educational_qualifications';
    protected $primaryKey = 'id';
    public function get_educational_qualifications()
    {
        return $this->findAll();
    }
}
