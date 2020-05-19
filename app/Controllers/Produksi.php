<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProduksiModel;
use App\Controllers\Home;

class Produksi extends BaseController
{
	function __construct(){
        
        // $this->load->model('ProductModel');
    }
	
	public function pos()
	{
	
		$data=[
			'title' => 'POS System',
			'isi' => 'v_pos',
			// 'data' => $this->ProductModel->get_all_product();
		];
		echo view('v_wrapper',$data);
	
	}

	//--------------------------------------------------------------------

}