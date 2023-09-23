<?php

namespace App\Models;

use CodeIgniter\Model;

class Theme extends Model
{
    protected $table = 'theme';
    protected $primaryKey = 'id';
    protected $allowedFields = ['color'];
    public function get_info(){
        return $this->first();
    }
}
