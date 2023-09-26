<?php

namespace App\Models;

use CodeIgniter\Model;

class Journal_publications_model extends Model
{
    protected $table = 'journal_publications';
    protected $primaryKey = 'id';
    public function get($id = false)
    {
        if ($id === false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function del($id = false)
    {
        return $this->delete($id);
    }
    protected $allowedFields = ['title','link','authors','journal'];
}
