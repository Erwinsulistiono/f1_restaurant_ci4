<?php 
namespace App\Models;

use CodeIgniter\Model;

class ParameterModel extends Model
{

  public function get_pt()
  {
    $pt_cd = session()->get('pt_cd');
    return $this->db->table('ms_pt')
    ->where('pt_cd',$pt_cd)->get()->getRowArray();
  }

  public function pt_update($data, $pt_cd)
  {
    return $this->db->table('ms_pt')
    ->update($data, array('pt_cd' => $pt_cd));
  }

  

}