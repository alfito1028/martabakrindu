<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();

        $data = [
            'pageTitle'       => 'Dashboard Admin',
            'totalProducts'   => $productModel->countAllResults(),
            'totalCategories' => $categoryModel->countAllResults(),
            'latestProducts'  => $productModel->orderBy('created_at', 'DESC')->findAll(3)
        ];

        return view('admin/dashboard', $data);
    }
}