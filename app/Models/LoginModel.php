<?php namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{

    public function cek_login($id, $password)
    {
        return $this->db->table('ms_user')
        ->where(array('id' => $id, 'password' => $password))
        ->get()->getRowArray();
    }

}