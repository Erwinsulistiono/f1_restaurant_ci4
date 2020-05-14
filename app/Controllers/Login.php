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
    if (session()->get('id')){
      return redirect()->to(base_url('home'));
    }
    else{
      $data=[
        'title_pt' => $this->LoginModel->cek_pt(),
        'isi' => 'v_login',
      ];
      helper(['form']);
      echo view('v_login',$data);
    }
  }
  
  public function cek_login()
  {
    $id = $this->request->getPost('id');
    $password = md5($this->request->getPost('password'));

    $cek = ($this->LoginModel->cek_login($id, $password));
    $pt_cd = ($this->LoginModel->cek_pt());

    if ((isset($cek['id'])==$id)&&(isset($cek['password'])==$password))
      {
        //if username and password matched
        session()->set('id',$cek['id']);
        session()->set('nama',$cek['nama']);
        session()->set('level',$cek['level']);
        session()->set('pt_cd',$pt_cd['pt_cd']);
        session()->set('pt_nm',$pt_cd['pt_nm']);
        session()->setFlashdata('msg',  'Selamat datang ' .$cek['nama']. ' Selamat bekerja');
        return redirect()->to(base_url('home'));
      }
      else{   
        session()->setFlashdata('msg', 'user belum terdaftar atau password salah');
        return redirect()->to(base_url('login'));
      }      
   }

   public function logout()
   {
      session()->destroy();
      return redirect()->to(base_url());
   }

}