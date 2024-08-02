<?php namespace App\Controllers;
use App\Models\UsersModel;

class register extends BaseController
{
	public function register()
	{
		echo view("register");
	}
	public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('Name');
        if ($users->where('Name', $username)->first()) {
            session()->setFlashdata('error', 'Username sudah ada. Silakan gunakan username yang lain.');
            return redirect()->back()->withInput();
        } else {
            $users->insert([
                'Name' => $this->request->getVar('Name'),
                'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
            ]);
            session()->setFlashdata('registered', 'Berhasil menambahkan data dengan nama '.$username.'^^');
            return redirect()->to('/login');
        }
}
}