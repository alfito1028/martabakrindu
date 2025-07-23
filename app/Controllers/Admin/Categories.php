<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Categories extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $data = [
            'pageTitle' => 'Kategori Produk',
            'categories' => $this->categoryModel->findAll()
        ];
        return view('admin/categories/index', $data);
    }

    public function create()
    {
        return view('admin/categories/create', ['pageTitle' => 'Tambah Kategori']);
    }

    public function store()
    {
        $this->categoryModel->save([
            'name' => $this->request->getPost('name')
        ]);
        return redirect()->to('/admin/categories')->with('success', 'Kategori ditambahkan.');
    }

    public function edit($id)
    {
        $category = $this->categoryModel->find($id);
        return view('admin/categories/edit', [
            'pageTitle' => 'Edit Kategori',
            'category' => $category
        ]);
    }

    public function update($id)
    {
        $this->categoryModel->update($id, [
            'name' => $this->request->getPost('name')
        ]);
        return redirect()->to('/admin/categories')->with('success', 'Kategori diperbarui.');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        return redirect()->to('/admin/categories')->with('success', 'Kategori dihapus.');
    }
}
