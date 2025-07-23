<?php namespace App\Controllers\Admin;



use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        $data['pageTitle'] = 'Kelola Menu Martabak';

        return view('admin/product/index', $data);
    }

    public function create()
    {
       $data = [
        'pageTitle' => 'Tambah Produk',
        'action'    => '/admin/products/store' // ✅ ini penting!
    ];

    return view('admin/product/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama_produk' => 'required',
            'kategori'    => 'required',
            'harga'       => 'required|numeric',
            'deskripsi'   => 'required',
            'gambar'      => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getRandomName();
        $gambar->move('uploads', $namaGambar);

        $model = new ProductModel();
        $model->save([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'gambar'      => $namaGambar,
        ]);

        return redirect()->to('/admin/products');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data = [
        'product'   => $model->find($id),
        'pageTitle' => 'Edit Produk',
        'action'    => '/admin/products/update/' . $id
    ];

    return view('admin/product/edit', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $produk = $model->find($id);

        $gambar = $this->request->getFile('gambar');
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads', $namaGambar);

            if (!empty($produk['gambar']) && file_exists('uploads/' . $produk['gambar'])) {
                unlink('uploads/' . $produk['gambar']);
            }
        } else {
            $namaGambar = $produk['gambar'];
        }

        $model->update($id, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'gambar'      => $namaGambar,
        ]);

        return redirect()->to('/admin/products');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $produk = $model->find($id);

        if ($produk && $produk['gambar']) {
            unlink('uploads/' . $produk['gambar']);
        }

        $model->delete($id);
        return redirect()->to('/admin/products');
    }
}
