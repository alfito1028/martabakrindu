<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FavoriteMenuModel;

class FavoriteMenu extends BaseController
{
    public function index()
    {
        $model = new FavoriteMenuModel();
        $data['menus'] = $model->findAll();
        return view('admin/home_section/favorite/index', $data);
    }

    public function create()
    {
        return view('admin/home_section/favorite/create');
    }

    public function store()
    {
        $model = new FavoriteMenuModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/', $imageName);
            $data['image'] = $imageName;
        }

        $model->insert($data);
        return redirect()->to('/admin/home/menu')->with('success', 'Menu favorit berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new FavoriteMenuModel();
        $data['menu'] = $model->find($id);
        return view('admin/home_section/favorite/edit', $data);
    }

    public function update($id)
    {
        $model = new FavoriteMenuModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);
        return redirect()->to('/admin/home/menu')->with('success', 'Menu favorit berhasil diubah');
    }

    public function delete($id)
    {
        $model = new FavoriteMenuModel();
        $menu = $model->find($id);

        if ($menu && $menu['image']) {
            $path = FCPATH . 'uploads/' . $menu['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);
        return redirect()->to('/admin/home/menu')->with('success', 'Menu favorit berhasil dihapus');
    }
}
