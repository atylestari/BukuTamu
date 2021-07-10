<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function hapus($id)
    {
        return $this->db->table('form')->delete(array('id' => $id));
    }
}
