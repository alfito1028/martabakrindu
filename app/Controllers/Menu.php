<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Menu extends BaseController
{
    public function index()
    {
        $model = new ProductModel();

        $data = [
            'manis'  => $model->where('kategori', 'Martabak Manis')->findAll(),
            'telur'  => $model->where('kategori', 'Martabak Telur')->findAll(),
            'gulung' => $model->where('kategori', 'Martabak Gulung')->findAll(),
        ];

        return view('menu', $data);
    }

}
