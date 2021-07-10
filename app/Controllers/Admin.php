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
            'form' => $this->FormModel->find($id)
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
}
