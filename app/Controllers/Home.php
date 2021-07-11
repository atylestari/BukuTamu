<?php

namespace App\Controllers;

use App\Models\FormModel;

class Home extends BaseController
{
	// public function index()
	// {
	// 	return view('welcome_message');
	// }

	public function __construct()
	{
		helper('form');
		$this->FormModel = new FormModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Form Buku Tamu | Komite Olimpiade Indonesia'
		];
		return view('form/form', $data);
	}

	public function thanks()
	{
		$data = [
			'title' => 'Form Buku Tamu | Komite Olimpiade Indonesia'
		];
		return view('form/thanks', $data);
	}

	public function kirim()
	{
		$data = array(
			'nama'      => $this->request->getVar('nama'),
			'instansi'  => $this->request->getVar('instansi'),
			'email'     => $this->request->getVar('email'),
			'kontak'    => $this->request->getVar('nomer'),
			'bertemu'   => $this->request->getVar('bertemu'),
			'lainnya'   => $this->request->getVar('jikalain'),
			'keperluan' => $this->request->getVar('keperluan'),
			'waktu' => $this->request->getVar('waktu'),
			'tanggal' => $this->request->getVar('tanggal')
		);
		$this->FormModel->kirim($data);
		return redirect()->to(base_url('Home/thanks'));
	}
}
