<?php

namespace App\Controllers;
use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new ProdukModel();
        $data1 = $model->select('*')->where('id_produk', 1)->first();
        $data2 = $model->select('*')->where('id_produk', 2)->first();
        $data3 = $model->select('*')->where('id_produk', 3)->first();
        return view('home', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }
}
