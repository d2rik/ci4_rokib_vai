<?php

namespace App\Models;

use CodeIgniter\Model;

class Contact_model extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    public function get_contact()
    {
        return $this->first();
    }
    protected $allowedFields = ['sub_title','phone','email','address','updated_at'];
}
