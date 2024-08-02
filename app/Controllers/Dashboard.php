<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;

class Dashboard extends BaseController
{
    public function index($startDate = null, $endDate = null)
    {
        $salesModel = new Data();
        
        // Tentukan rentang tanggal default jika tidak ada input dari URL
        if (empty($startDate) || empty($endDate)) {
            $startDate = date('Y-m-d');
            $endDate = date('Y-m-d');
        }
        
        // Ambil data untuk 3 ID yang berbeda dalam rentang tanggal yang ditentukan
        $salesDataId1 = $this->getFormattedData($salesModel, 1, $startDate, $endDate);
        $salesDataId2 = $this->getFormattedData($salesModel, 2, $startDate, $endDate);
        $salesDataId3 = $this->getFormattedData($salesModel, 3, $startDate, $endDate);
        $sumTotal = $salesModel->sumDalamSatuKolom($startDate, $endDate);
        
        // Kirim data ke view
        $dataSend = [
            'dataId1' => $salesDataId1,
            'dataId2' => $salesDataId2,
            'dataId3' => $salesDataId3,
            'sumTotal' => $sumTotal,
            'startDate' => $startDate,
            'endDate' => $endDate
        ];
        
        return view('chart', $dataSend);
    }

    private function getFormattedData($salesModel, $id, $startDate, $endDate)
    {
        $salesData = $salesModel->getSalesWithinDateRange($id, $startDate, $endDate);
        $builder = $salesModel->builder();
        
        // Total Kuantitas
        $builder->selectSum('kuantitas', 'total_kuantitas');
        $builder->where('created_at >=', $startDate);
        $builder->where('created_at <=', $endDate);
        $builder->where('id_produk', $id);
        $query = $builder->get();
        $totalQuantity = $query->getRow()->total_kuantitas;

        // Format Data
        $groupedData = [];
        foreach ($salesData as $entry) {
            $date = date('Y-m-d', strtotime($entry['created_at']));
            if (!isset($groupedData[$date])) {
                $groupedData[$date] = 0;
            }
            $groupedData[$date] += $entry['total_amount'];
        }
        
        $formattedData = [];
        foreach ($groupedData as $date => $total_amount) {
            $formattedData[] = ['date' => $date, 'total_amount' => $total_amount];
        }

        return [
            'data' => $formattedData,
            'totalData' => $totalQuantity
        ];
    }
}
