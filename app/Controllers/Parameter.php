<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ParameterModel;

class Parameter extends BaseController
{

  protected $ParameterModel;

  public function __construct()
  {
    $this->ParameterModel = new ParameterModel();
  }
    
  public function profile() 
  {
    $data = [
      'title' => 'Profile PT',
      'pt' => $this->ParameterModel->get_pt(),
      'isi' => 'v_parameter_profile'
    ];
    echo view('v_wrapper',$data);
  }

  public function update($pt_cd)
  {
    $data = [
      'pt_cd' => $this->request->getPost('pt_cd'),
      'pt_nm' => $this->request->getPost('pt_nm'),
      'pt_npwp' => $this->request->getPost('pt_npwp'),
      'pt_addr' => $this->request->getPost('pt_addr'),
      'pt_country' => $this->request->getPost('pt_country'),
      'pt_pic_nm' => $this->request->getPost('pt_pic_nm'),
      'pt_pic_telp' => $this->request->getPost('pt_pic_telp'),
      'pt_email' => $this->request->getPost('pt_email'),
      'pt_website' => $this->request->getPost('pt_website'),
    ];
    $this->ParameterModel->pt_update($data, $pt_cd);
    session()->setFlashdata('success', $data['pt_nm'] . ' Berhasil Diupdate');
    return redirect()->to(base_url('parameter/profile'));
  }

}