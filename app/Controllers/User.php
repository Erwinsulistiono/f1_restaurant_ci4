<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{

  protected $UserModel;

  public function __construct()
  {
    $this->UserModel = new UserModel();
  }


  public function index() 
  {
    $data = [
      'title' => 'Data User',
      'user' => $this->UserModel->get_user(),
      'isi' => 'v_user_list'
    ];
    echo view('layout/v_wrapper',$data);
  }

  public function tambah() 
  {
    $data = [
      'title' => 'Tambah User',
      'isi' => 'v_user_tambah'
    ];
    echo view('layout/v_wrapper',$data);
  }

}