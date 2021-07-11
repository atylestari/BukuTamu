<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'form';

    public function hapus($id)
    {
        return $this->db->table('form')
            ->delete(array('id' => $id));
    }

    public function edit_tamu($id)
    {
        return $this->db->table('form')
            ->where('id', $id)->get()->getRowArray();
    }

    public function ubah($data, $id)
    {
        return $this->db->table('form')
            ->update($data, array('id' => $id));
    }
}
