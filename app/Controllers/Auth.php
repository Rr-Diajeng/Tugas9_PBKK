<?php

// app/Controllers/Auth.php

namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $model = new AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $model->getAdminByUsername($username);

        // Pastikan bahwa password yang di-hash dengan password_hash() pada saat registrasi
        if ($admin && $password == $admin['password']) {
            // Login berhasil, simpan data admin ke session
            $session = session();
            $session->set([
                'admin_id' => $admin['id'],
                'username' => $admin['username'],
                'logged_in' => true,
            ]);

            return redirect()->to(base_url('employees'));
        } else {
            // Login gagal
            $session = session();
            $session->setFlashdata('message', 'Invalid username or password');
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        // Logout, hapus data admin dari session
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('auth/login'));
    }

    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        // Validasi form dan aturan lainnya bisa ditambahkan di sini

        $model = new AdminModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        $model->insert($data);

        return redirect()->to(base_url('auth/login'));
    }
}
