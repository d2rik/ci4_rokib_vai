<?php

namespace App\Models;

use CodeIgniter\Model;

class About_model extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    public function get_about()
    {
        return $this->first();
    }
    protected $allowedFields = ['about','updated_at'];
}
