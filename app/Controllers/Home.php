<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class Home extends BaseController
{
	
	public function __construct()
	{
	  helper(['form']);
	  $this->LoginModel = new LoginModel();
	}
	
	public function index()
	{
	
		$data=[
			'title_pt' => $this->LoginModel->cek_pt(),
			'title' => 'Home',
			'isi' => 'v_home',
		];
		echo view('v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
