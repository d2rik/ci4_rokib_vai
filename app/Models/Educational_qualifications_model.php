<?php

namespace App\Models;

use CodeIgniter\Model;

class Educational_qualifications_model extends Model
{
    protected $table = 'educational_qualifications';
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
    protected $allowedFields = ['degree','subject','academy','session','passing_year'];
}
