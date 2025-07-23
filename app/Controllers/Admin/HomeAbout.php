<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AboutSectionModel;

class HomeAbout extends BaseController
{
    public function index()
    {
        $model = new AboutSectionModel();
        $data['about'] = $model->first(); // Ambil data pertama
        return view('admin/home_section/about/index', $data);
    }

    public function update()
    {
        $model = new AboutSectionModel();
        $id = $this->request->getPost('id');

        $data = [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        // Upload gambar jika ada
        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to('/admin/home/about')->with('success', 'Tentang Kami berhasil diperbarui.');
    }
}
