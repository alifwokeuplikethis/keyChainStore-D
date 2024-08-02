<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Lainnya extends BaseController
{
    public function ulasan()
    {
        return view("ulasan");
    }
    public function sosmed()
    {
        return view("sosmed");
    }
}
