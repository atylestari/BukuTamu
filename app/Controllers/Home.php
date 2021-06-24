<?php

namespace App\Controllers;

class Home extends BaseController
{
	// public function index()
	// {
	// 	return view('welcome_message');
	// }

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
