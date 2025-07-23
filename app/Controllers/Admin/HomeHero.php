<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HeroSectionModel;

class HomeHero extends BaseController
{
    public function index()
    {
        $model = new HeroSectionModel();
        $data['hero'] = $model->first(); // hanya satu data
        return view('admin/home_section/hero/index', $data);
    }

    public function update()
    {
        $model = new HeroSectionModel();
        $id = $this->request->getPost('id');

        $data = [
            'title'    => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
        ];

        // Logo
        $logo = $this->request->getFile('logo');
        if ($logo && $logo->isValid()) {
            $logoName = $logo->getRandomName();
            $logo->move('uploads/', $logoName);
            $data['logo'] = $logoName;
        }

        // Backgrounds
        $backgrounds = $this->request->getFiles()['backgrounds'] ?? [];
        $bgList = [];

        foreach ($backgrounds as $bg) {
            if ($bg->isValid()) {
                $bgName = $bg->getRandomName();
                $bg->move('uploads/', $bgName);
                $bgList[] = '/uploads/' . $bgName;
            }
        }

        if (!empty($bgList)) {
            $data['backgrounds'] = json_encode($bgList);
        }

        $model->update($id, $data);
        return redirect()->to('/admin/home/hero')->with('success', 'Berhasil diubah!');
    }
}
