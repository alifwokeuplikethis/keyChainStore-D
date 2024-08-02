<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DestroySession extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('username');
        $session->remove('logged_in');
        return redirect()->to('/');
    }
}
