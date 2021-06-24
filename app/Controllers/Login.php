<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Login Buku Tamu | Komite Olimpiade Indonesia'
        ];

        return view('auth/login', $data);
    }
}
