<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $allowedFields = ['nama_depan', 'instansi', 'email', 'hal', 'pesan'];
    public $timestamps = false;
}
