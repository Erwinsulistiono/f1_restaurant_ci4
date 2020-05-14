<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
	
		$data=[
			'title' => 'Home',
			'isi' => 'v_home',
		];
		echo view('v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
