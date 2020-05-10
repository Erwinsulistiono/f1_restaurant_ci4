<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller
{

  public function index() 
  {
    $usr = new UserModel();
    $data = [
      'tampildata' => $usr->tampildata()
    ];
    echo view('layout/v_wrapper',$data);
  }

}