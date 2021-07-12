<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login Buku Tamu | Komite Olimpiade Indonesia'
        ];

        return view('auth/login', $data);
    }

    public function cek_login()
    {
        if ($this) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->LoginModel->cek_login($username, $password);
            if ($cek) {
                session()->set('log', true);
                session()->set('username', $cek['username']);
                session()->set('nama', $cek['nama']);
                session()->set('level', $cek['level']);

                if (session()->get('level') == 'Admin Sekjen') {
                    $data  = [
                        'title' => 'Daftar Tamu Sekretaris Jenderal NOC Indonesia',
                        'form' => $this->LoginModel->sekjen()
                    ];
                    return view('admin/index', $data);
                } else if (session()->get('level') == 'Admin Ketum') {
                    $data  = [
                        'title' => 'Daftar Tamu Ketua Umum NOC Indonesia',
                        'form' => $this->LoginModel->ketum()
                    ];
                    return view('admin/index', $data);
                } else {
                    $data  = [
                        'title' => 'Daftar Tamu NOC Indonesia',
                        'form' => $this->LoginModel->umum()
                    ];
                    return view('admin/index', $data);
                }
            } else {
                session()->setFlashdata('gagal', 'Username atau Password Salah!!');
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function logout()
    {
        session()->remove('username');
        session()->remove('nama');
        session()->remove('level');

        session()->setFlashdata('sukses', 'Anda Berhasil Logout !!!');
        return redirect()->to(base_url('login'));
    }

    public function admin_menu()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->LoginModel->cek_login($username, $password);

        if (session()->get('level') == 'Admin Sekjen') {
            $data  = [
                'title' => 'Daftar Tamu Sekretaris Jenderal NOC Indonesia',
                'form' => $this->LoginModel->sekjen()
            ];
            return view('admin/index', $data);
        } else if (session()->get('level') == 'Admin Ketum') {
            $data  = [
                'title' => 'Daftar Tamu Ketua Umum NOC Indonesia',
                'form' => $this->LoginModel->ketum()
            ];
            return view('admin/index', $data);
        } else {
            $data  = [
                'title' => 'Daftar Tamu NOC Indonesia',
                'form' => $this->LoginModel->umum()
            ];
            return view('admin/index', $data);
        }
    }
}
