<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Lokasi extends BaseController
{
    public function lokasi()
    {
        return view('lokasi');
    }
}
