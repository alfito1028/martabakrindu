<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutSectionModel extends Model
{
    protected $table = 'about_section';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image'];
}
