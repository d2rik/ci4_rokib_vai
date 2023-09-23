<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile_model extends Model
{
    protected $table = 'site_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','date_of_birth','designation','profile_image','banner_image','link1','link2','link3','updated_at'];
}
