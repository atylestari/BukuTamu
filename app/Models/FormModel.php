<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{

    protected $table = "form";

    public function data()
    {
        return $this->db->table('form')->get()->getResultArray();
    }
}
