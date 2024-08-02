<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use CodeIgniter\HTTP\ResponseInterface;

class Detail extends BaseController
{
    public function index()
    {
        $model = new Data();
        $data['koloms'] = $model->getAllData(); 
        return view('detail', $data);
    }
}
