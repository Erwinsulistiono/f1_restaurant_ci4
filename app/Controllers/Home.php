<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		$data=[
			'title' => '',
			'isi' => 'v_login',
		];
		echo view('layout_login/v_wrapper',$data);
	}

	public function dashboard()
	{
	
		$data=[
			'title' => 'Home',
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
