<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    public function cek_login($username, $password)
    {
        return $this->db->table('user')
            ->where([
                'username' => $username,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function umum()
    {
        return $this->db->table('form')
            ->get()->getResultArray();
    }

    public function ketum()
    {
        return $this->db->table('form')
            ->getWhere(array('bertemu' => 'Ketua Umum'))
            ->getResultArray();
    }

    public function sekjen()
    {
        return $this->db->table('form')
            ->getWhere(array('bertemu' => 'Sekretaris Jenderal'))
            ->getResultArray();
    }
}
