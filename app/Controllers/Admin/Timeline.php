<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TimelineModel;

class Timeline extends BaseController
{
    public function index()
    {
        $model = new TimelineModel();
        $data['timelines'] = $model->orderBy('year', 'ASC')->findAll();
        return view('admin/timeline/index', $data);
    }

    public function create()
    {
        return view('admin/timeline/create');
    }

    public function store()
    {
        $model = new TimelineModel();

        $data = [
            'year' => $this->request->getPost('year'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imgName = $image->getRandomName();
            $image->move('uploads/', $imgName);
            $data['image'] = $imgName;
        }

        $model->insert($data);
        return redirect()->to('/admin/timeline')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $model = new TimelineModel();
        $data['timeline'] = $model->find($id);
        return view('admin/timeline/edit', $data);
    }

    public function update($id)
    {
        $model = new TimelineModel();

        $data = [
            'year' => $this->request->getPost('year'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imgName = $image->getRandomName();
            $image->move('uploads/', $imgName);
            $data['image'] = $imgName;
        }

        $model->update($id, $data);
        return redirect()->to('/admin/timeline')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $model = new TimelineModel();
        $data = $model->find($id);

        if ($data && $data['image']) {
            $path = FCPATH . 'uploads/' . $data['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);
        return redirect()->to('/admin/timeline')->with('success', 'Data berhasil dihapus');
    }
}
