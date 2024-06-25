<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $user;

    function __construct()
    {
        helper('form');
        $this->user = new UserModel();
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $rules = [
                'username' => 'required|min_length[4]',
                'password' => 'required|min_length[7]|numeric'
            ];

            if ($this->validate($rules)) {
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                $datauser = $this->user->where(['username' => $username])->first();

                if ($datauser) {
                    if (password_verify($password, $datauser['password'])) { //Verifikasi password sudah terdaftar atau belum
                        $role = $datauser['role']; //variabel untuk cek data role

                        //// Menetapkan data sesi untuk pengguna yang berhasil login
                        session()->set([
                            'user' => $datauser['username'],
                            'role' => $datauser['role'],
                            'isLoggedIn' => TRUE
                        ]);

                        if ($role == 'admin') { //cek admin
                            return redirect()->to(base_url('profile'));
                        } elseif ($role == 'guest') { //cek guest
                            return redirect()->to(base_url('keranjang'));
                        } else {
                            session()->getFlashdata('failed', 'Akun Tidak Belum Terdaftar');
                        }
                    } else {
                        session()->setFlashdata('failed,', 'Username dan Password Salah');
                        return redirect()->back();
                    }
                } else {
                    session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', $this->validator->listErrors());
                return redirect()->back();
            }
        } else {
            return view('v_login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
