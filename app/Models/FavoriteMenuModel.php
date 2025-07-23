<?php

namespace App\Models;

use CodeIgniter\Model;

class FavoriteMenuModel extends Model
{
    protected $table = 'favorite_menus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'image'];
}
