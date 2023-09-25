<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    public function get($username = false)
    {
        if (!$username == false) {
            return $this->where('username', $username)->first();
        }
    }
    protected $allowedFields = ['username', 'password'];
}
