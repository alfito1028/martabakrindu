<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimelineModel;

class Cerita extends BaseController
{
    public function cerita()
    {
        $model = new TimelineModel();
        $data['timelines'] = $model->orderBy('year', 'ASC')->findAll();

        return view('cerita', $data); // ini akan membuka Views/cerita.php
    }
}
