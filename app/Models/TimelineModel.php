<?php namespace App\Models;

use CodeIgniter\Model;

class TimelineModel extends Model
{
    protected $table = 'timelines';
    protected $primaryKey = 'id';
    protected $allowedFields = ['year', 'title', 'description', 'image'];
}
