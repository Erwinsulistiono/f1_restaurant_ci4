<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  public function get_user()
  {
    return $this->db->table('sys_user')->get()->getResultArray();;
  }

}