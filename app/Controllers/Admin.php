<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard Buku Tamu | Komite Olimpiade Indonesia',
        ];

        return view('admin/index', $data);
    }

    public function edit_tamu()
    {
        $data = [
            'title' => 'Dashboard Buku Tamu | Komite Olimpiade Indonesia'
        ];

        return view('admin/edit_tamu', $data);
    }
}
