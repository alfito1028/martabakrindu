<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Kontak extends BaseController
{
    public function index()
    {
        return view('kontak'); // ini menampilkan kontak.php
    }

    public function kirim()
    {
        $model = new MessageModel();

        $model->insert([
            'nama_depan' => $this->request->getPost('nama_depan'),
            'instansi' => $this->request->getPost('instansi'),
            'email' => $this->request->getPost('email'),
            'hal' => $this->request->getPost('hal'),
            'pesan' => $this->request->getPost('pesan'),
        ]);

        return redirect()->to('/kontak')->with('message', 'Pesan berhasil dikirim!');
    }
}
