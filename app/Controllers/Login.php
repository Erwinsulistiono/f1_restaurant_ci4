<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Controllers\Home;

class Login extends BaseController
{

  public function __construct()
  {
    helper(['form']);
    $this->LoginModel = new LoginModel();
  }

	public function index()
	{
		$data=[
			'title' => '',
			'isi' => 'v_login',
		];
		helper(['form']);
		echo view('layout_login/v_wrapper',$data);
  }
  
  public function cek_login()
  {
    $id = $this->request->getPost('id');
    $password = md5($this->request->getPost('password'));

    $cek = ($this->LoginModel->cek_login($id, $password));
    

    if (isset($cek['id'])!=$id)
    {
      $message = 'User ID belum terdaftar';
    }
    elseif (isset($cek['password'])!=$password)
    {
      $message = 'Password Salah';
    }
    elseif ((isset($cek['id'])==$id)&&(isset($cek['password'])==$password))
      {
        //if username and password matched
        $message = 'Selamat datang' .$id. 'Selamat bekerja';
        session()->set('id',$cek['id']);
        session()->set('nama',$cek['nama']);
        session()->set('level',$cek['level']);
        return redirect()->to(base_url('home'));
      }
      
    session()->setFlashdata('msg', $message);
    return redirect()->to(base_url('login'));
   }
  }