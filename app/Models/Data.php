<?php
namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
    protected $table = "data";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_produk', 'users', 'nm_produk', 'kuantitas', 'harga', 'created_at'];

    public function getAllData()
    {
        return $this->findAll(); 
    }



    public function sumDalamSatuKolom($startDate = null, $endDate = null)
    {
        $builder = $this->builder();
        
        // Jika startDate dan endDate diberikan, tambahkan kondisi WHERE
        if ($startDate && $endDate) {
            $builder->where('created_at >=', $startDate);
            $builder->where('created_at <=', $endDate);
        }

        $builder->selectSum('kuantitas'); 
        $query = $builder->get();
        $result = $query->getRow();
        return $result->kuantitas;
    }


    public function getSalesWithinDateRange($id, $startDate, $endDate)
    {
        $builder = $this->builder();
        $builder->select('created_at, SUM(kuantitas) as total_amount');
        $builder->where('created_at >=', $startDate);
        $builder->where('created_at <=', $endDate);
        $builder->where('id_produk', $id);
        $builder->groupBy('created_at');
        $builder->orderBy('created_at', 'ASC');
        $query = $builder->get();
        
        return $query->getResultArray();
    }
}
