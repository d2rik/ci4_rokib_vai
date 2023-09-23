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
    protected $allowedFields = ['about','quote','fun_fact1','fun_fact1_count','fun_fact2','fun_fact2_count','fun_fact3','fun_fact3_count','updated_at'];
}
