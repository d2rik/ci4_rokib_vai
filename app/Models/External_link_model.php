<?php

namespace App\Models;

use CodeIgniter\Model;

class External_link_model extends Model
{
    protected $table = 'external_link_model';
    protected $primaryKey = 'id';
    public function get_external_link()
    {
        return $this->findAll();
    }
}
