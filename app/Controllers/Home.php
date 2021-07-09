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
}
