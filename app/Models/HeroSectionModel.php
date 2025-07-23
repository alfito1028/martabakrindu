<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroSectionModel extends Model
{
    protected $table = 'hero_sections';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'subtitle', 'logo', 'backgrounds'];
    protected $useTimestamps = true;
}
