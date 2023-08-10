<?php

namespace App\Models;

use CodeIgniter\Model;

class DistributorModel extends Model
{
    protected $table = 'distributor';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'kota', 'provinsi', 'negara', 'telepon', 'email'];

    public function getDistributor($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }

    
}