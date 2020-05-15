<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProduksiModel;
use App\Controllers\Home;

class Produksi extends BaseController
{
	public function pos()
	{
	
		$data=[
			'title' => 'POS System',
			'isi' => 'v_pos',
		];
		echo view('v_wrapper',$data);
	
	}

	//--------------------------------------------------------------------

}