<?php

namespace App\Controllers;

use App\Models\Data;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends BaseController
{
    public function exportToExcel()
    {
        $model = new Data();
        $data = $model->findAll(); // Ambil semua data dari model

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the column headers
        $sheet->setCellValue('B1', 'Nama Produk')
              ->setCellValue('C1', 'Nama Pembeli')
              ->setCellValue('D1', 'Kuantitas')
              ->setCellValue('E1', 'Subtotal')
              ->setCellValue('F1', 'Waktu');

        // Add data rows
        $rowNumber = 2;
        foreach ($data as $index => $row) {
            $sheet->setCellValue('B' . $rowNumber, $row->nm_produk)
                  ->setCellValue('C' . $rowNumber, $row->users)
                  ->setCellValue('D' . $rowNumber, $row->kuantitas)
                  ->setCellValue('E' . $rowNumber, $row->harga * $row->kuantitas)   
                  ->setCellValue('F' . $rowNumber, $row->created_at);
            $rowNumber++;
        }

        // Create a writer and output the file
        $writer = new Xlsx($spreadsheet);

        // Set headers to force download
        $filename = 'Data_Pembeli_' . date('Ymd') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit;
    }
}
