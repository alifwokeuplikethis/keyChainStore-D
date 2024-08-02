<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_produk', 'stok', 'terjual', 'harga'];
}
