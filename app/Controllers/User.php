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

  public function tambah_user() 
  {
    $data = [
      'title' => 'Tambah User',
      'isi' => 'v_user_tambah'
    ];
    echo view('layout/v_wrapper',$data);
  }

  public function save()
  {
    $data = [
      'id' => $this->request->getPost('id'),
      'nama' => $this->request->getPost('nama'),
      'telp' => $this->request->getPost('telp'),
      'jabatan' => $this->request->getPost('jabatan'),
      'cabang' => $this->request->getPost('cabang'),
      'level' => $this->request->getPost('level'),
      'tgl_lahir' => $this->request->getPost('tgl_lahir'),
      'password' => md5($this->request->getPost('password')),
    ];
    
    $this->UserModel->insert_user($data);
    session()->setFlashdata('success','data Berhasil Ditambah');
    return redirect()->to(base_url('user'));
  }

  public function edit($user_id) 
  {
    $data = [
      'title' => 'Edit User',
      'user' => $this->UserModel->user_edit($user_id),
      'isi' => 'v_user_edit'
    ];
    echo view('layout/v_wrapper',$data);
  }

  public function update($user_id)
  {
    $data = [
      'id' => $this->request->getPost('id'),
      'nama' => $this->request->getPost('nama'),
      'telp' => $this->request->getPost('telp'),
      'jabatan' => $this->request->getPost('jabatan'),
      'cabang' => $this->request->getPost('cabang'),
      'level' => $this->request->getPost('level'),
      'tgl_lahir' => $this->request->getPost('tgl_lahir'),
      'password' => md5($this->request->getPost('password')),
    ];
    $this->UserModel->user_update($data, $user_id);
    session()->setFlashdata('success', $data['nama'] . ' Berhasil Diupdate');
    return redirect()->to(base_url('user'));
  }

  public function delete($user_id)
  {
    $this->UserModel->user_delete($user_id);
    session()->setFlashdata('success','Data Berhasil Dihapus');
    return redirect()->to(base_url('user'));
  }
  

}