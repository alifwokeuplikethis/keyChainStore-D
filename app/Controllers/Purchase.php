<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\Data;

class Purchase extends BaseController
{
    public function index()
    {
        $mahiru = $this->request->getVar("mahiru");
        $fyodor = $this->request->getVar("fyodor");
        $dazai = $this->request->getVar("dazai");
        $users = $this->request->getVar('user');

        $mahiru = is_numeric($mahiru) ? (int)$mahiru : 0;
        $fyodor = is_numeric($fyodor) ? (int)$fyodor : 0;
        $dazai = is_numeric($dazai) ? (int)$dazai : 0;

        if($mahiru > 0 || $fyodor > 0 || $dazai > 0){
            $model = new ProdukModel();
            $data1 = $model->select('*')->where('id_produk', 1)->first();
            $data2 = $model->select('*')->where('id_produk', 2)->first();
            $data3 = $model->select('*')->where('id_produk', 3)->first();
            $message = "Halo kak alieff, saya ingin membeli ";
            if($mahiru > 0){
                $message .= "{$mahiru} {$data1->nm_produk} dengan harga {$data1->harga},";
            }
            if($dazai > 0){
                $message .= "{$dazai} {$data2->nm_produk} dengan harga {$data2->harga},";
            }
            if($fyodor > 0){
                $message .= "{$fyodor} {$data3->nm_produk} dengan harga {$data3->harga},";
            }
        return view("purchase", 
        ['data1' => $data1,
         'data2' => $data2,
         'data3' => $data3,
         'mahiru' => $mahiru,
         'fyodor' =>  $fyodor,
         'dazai' =>  $dazai,
         'message' => $message,
         'users' => $users]);
        }else{
            session()->setFlashdata("tidakMengisi", "Anda tidak membeli apa-apa!");
            return redirect()->to('/');

        }
    }

    public function process()
    {
    $users = session()->get("username");
    $mahiru = $this->request->getPost("mahiru");
    $fyodor = $this->request->getPost("fyodor");
    $dazai = $this->request->getPost("dazai");

    $mahiru = is_numeric($mahiru) ? (int)$mahiru : 0;
    $fyodor = is_numeric($fyodor) ? (int)$fyodor : 0;
    $dazai = is_numeric($dazai) ? (int)$dazai : 0;

    $model = new ProdukModel();
    $modelData = new Data();

    if ($mahiru > 0) {
        $data1 = $model->find(1); 
        if ($data1) {
            $idProduk = $data1->id_produk;
            $inserting = [
                'id_produk' => $idProduk,
                'nm_produk' => $data1->nm_produk,
                'kuantitas' => $mahiru,
                'harga' => $data1->harga,
                'users' => $users,
            ];
            $modelData->insert($inserting);
            $newStock1 = $data1->stok - $mahiru;
            $newSold = $data1->terjual + $mahiru;
            $model->update(1, ['stok' => $newStock1, 'terjual' => $newSold]);
        }
    }

    if ($dazai > 0) {
        $data2 = $model->find(2); 
        if ($data2) {
            $idProduk = $data2->id_produk;
            $inserting = [
                'id_produk' => $idProduk,
                'nm_produk' => $data2->nm_produk,
                'kuantitas' => $dazai,
                'harga' => $data2->harga,
                'users' => $users,
            ];
            $modelData->insert($inserting);
            $newStock2 = $data2->stok - $dazai;
            $newSold2 = $data2->terjual + $dazai;
            $model->update(2, ['stok' => $newStock2, 'terjual' => $newSold2]);
        }
    }

    if ($fyodor > 0) {
        $data3 = $model->find(3);
        if ($data3) {
            $idProduk = $data3->id_produk;
            $inserting = [
                'id_produk' => $idProduk,
                'nm_produk' => $data3->nm_produk,
                'kuantitas' => $fyodor,
                'harga' => $data3->harga,
                'users' => $users,
            ];
            $modelData->insert($inserting);
            $newStock3 = $data3->stok - $fyodor;
            $newSold3 = $data3->terjual + $fyodor;
            $model->update(3, ['stok' => $newStock3, 'terjual' => $newSold3]);
        }
    }
    $message = $this->request->getPost("message");
    $messageEncoded = urlencode($message);
    return redirect()->to("https://api.whatsapp.com/send?phone=6287782383913&text={$messageEncoded}");
    }

}

