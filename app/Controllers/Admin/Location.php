<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LocationModel;

class Location extends BaseController
{
    protected $locationModel;

    public function __construct()
    {
        $this->locationModel = new LocationModel();
    }

    public function index()
    {
        $data['locations'] = $this->locationModel->findAll();
        return view('admin/locations/index', $data);
    }

    public function create()
    {
        return view('admin/locations/create');
    }

    public function store()
    {
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/locations', $fileName);
        } else {
            return redirect()->back()->with('error', 'Upload gagal');
        }

        $this->locationModel->save([
            'wilayah' => $this->request->getPost('wilayah'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'wa' => $this->request->getPost('wa'),
            'grab' => $this->request->getPost('grab'),
            'gofood' => $this->request->getPost('gofood'),
            'image' => '/uploads/locations/' . $fileName,
        ]);

        return redirect()->to('/admin/locations')->with('message', 'Lokasi ditambahkan');
    }

    public function edit($id)
    {
        $data['location'] = $this->locationModel->find($id);
        return view('admin/locations/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $location = $this->locationModel->find($id);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/locations', $fileName);
            $data['image'] = '/uploads/locations/' . $fileName;
        } else {
            $data['image'] = $location['image']; // keep old
        }

        $this->locationModel->update($id, $data);
        return redirect()->to('/admin/locations')->with('message', 'Lokasi diupdate');
    }

    public function delete($id)
    {
        $this->locationModel->delete($id);
        return redirect()->to('/admin/locations')->with('message', 'Lokasi dihapus');
    }
}
