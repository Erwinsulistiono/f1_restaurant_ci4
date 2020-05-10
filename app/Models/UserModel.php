<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

  function __construct()
  {
    $this->db = db_connect();
  }

  function tampildata()
  {
    return $this->db->table('sys_user')->get();
  }

}