<?php

namespace App\Models;

use CodeIgniter\Model;

class Journal_publications_model extends Model
{
    protected $table = 'journal_publications';
    protected $primaryKey = 'id';
    public function get_journal_publications()
    {
        return $this->findAll();
    }
}
