<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_score_and_certifications_model extends Model
{
    protected $table = 'test_score_and_certifications';
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
    protected $allowedFields = ['title','date','expiry_date','overall_score','score_breakdown','breakdown_1','breakdown_1_score','breakdown_2','breakdown_2_score','breakdown_3','breakdown_3_score','breakdown_4','breakdown_4_score','analysis','updated_at'];
}
