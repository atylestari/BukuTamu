<?php

namespace App\Controllers;

use App\Models\FormModel;
use App\Models\AdminModel;

class Admin extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->FormModel = new FormModel();
        $this->AdminModel = new AdminModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Buku Tamu | Komite Olimpiade Indonesia'
        ];

        return view('admin/index', $data);
    }

    public function edit_tamu($id)
    {
        $data = [
            'title' => 'Dashboard Buku Tamu | Komite Olimpiade Indonesia',
            'form' => $this->AdminModel->edit_tamu($id)
        ];

        return view('admin/edit_tamu', $data);
    }

    public function hapus($id)
    {
        $this->AdminModel->hapus($id);
        return redirect()->to(base_url('login/admin_menu'));
    }

    public function kembali()
    {
        return redirect()->to(base_url('login/admin_menu'));
    }

    public function ubah($id)
    {
        $data = array(
            'nama'      => $this->request->getPost('nama'),
            'instansi'  => $this->request->getPost('instansi'),
            'email'     => $this->request->getPost('email'),
            'kontak'    => $this->request->getPost('nomer'),
            'bertemu'   => $this->request->getPost('bertemu'),
            'lainnya'   => $this->request->getPost('jikalain'),
            'keperluan' => $this->request->getPost('keperluan'),
            'waktu'     => $this->request->getPost('waktu'),
            'tanggal'   => $this->request->getPost('tanggal')
        );
        $this->AdminModel->ubah($data, $id);
        return redirect()->to(base_url('login/admin_menu'));
    }
}
