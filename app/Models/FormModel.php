<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'form';

    public function kirim($data)
    {
        return $this->db->table('form')->insert($data);
    }
}
