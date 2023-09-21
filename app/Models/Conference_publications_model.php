<?php

namespace App\Models;

use CodeIgniter\Model;

class Conference_publications_model extends Model
{
    protected $table = 'conference_publications';
    protected $primaryKey = 'id';
    public function get_conference_publications()
    {
        return $this->findAll();
    }
}
