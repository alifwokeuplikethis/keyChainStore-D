<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function login()
    {
        echo view("login");
    }


    public function process()
    {

        $users = new UsersModel();

        $username = $this->request->getVar('Name');
        $password = $this->request->getVar('Password');
        $dataUser = $users->where('Name', $username)->first();
        

        if ($dataUser) {
            if (password_verify($password, $dataUser->Password)) {
                session()->set([
                    'username' => $dataUser->Name,
                    'logged_in' => TRUE
                ]);
                session()->setFlashdata('login', 'Selamat datang '. $username .'^^');
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah^^');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah^^');
            return redirect()->back();
        }
    }
}
