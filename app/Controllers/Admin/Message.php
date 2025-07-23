<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MessageModel;

class Message extends BaseController
{
    protected $messageModel;

    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }

    public function index()
    {
        $data['messages'] = $this->messageModel->orderBy('created_at', 'DESC')->findAll();
        return view('admin/messages/index', $data);
    }

    public function show($id)
    {
        $message = $this->messageModel->find($id);

        if (!$message) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Pesan tidak ditemukan");
        }

        return view('admin/messages/show', ['message' => $message]);
    }

    public function delete($id)
    {
        $this->messageModel->delete($id);
        return redirect()->to('/admin/messages')->with('message', 'Pesan berhasil dihapus.');
    }
}
