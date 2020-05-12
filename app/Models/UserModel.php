<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  public function get_user()
  {
    return $this->db->table('sys_user')->get()->getResultArray();
  }

  public function insert_user($data)
  {
    return $this->db->table('sys_user')->insert($data);
  }

  public function user_edit($user_id)
  {
    return $this->db->table('sys_user')->where('id',$user_id)->get()->getRowArray();
  }

  public function user_update($data, $user_id)
  {
    return $this->db->table('sys_user')->update($data, array('id' => $user_id));
  }

  public function user_delete($user_id)
  {
    return $this->db->table('sys_user')->delete(array('id' => $user_id));
  }

}