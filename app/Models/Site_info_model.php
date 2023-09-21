<?php

namespace App\Models;

use CodeIgniter\Model;

class Site_info_model extends Model
{
    protected $table = 'site_info';
    protected $primaryKey = 'id';
    public function get_profile()
    {
        return $this->first();
    }
}
