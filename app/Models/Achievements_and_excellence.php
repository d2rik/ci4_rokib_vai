<?php

namespace App\Models;

use CodeIgniter\Model;

class Achievements_and_excellence extends Model
{
    protected $table = 'achievements_and_excellence';
    protected $primaryKey = 'id';
    public function get_achievements_and_excellence()
    {
        return $this->findAll();
    }
}
