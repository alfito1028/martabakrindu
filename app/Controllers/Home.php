<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\HeroSectionModel;
use App\Models\AboutSectionModel;

class Home extends BaseController
{
   public function home(): string
{
    $heroModel = new HeroSectionModel();
    $aboutModel = new AboutSectionModel();

    return view('home', [
        'hero' => $heroModel->first(),
        'about' => $aboutModel->first()
    ]);
}
}
