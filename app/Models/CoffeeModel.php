<?php

namespace App\Models;

use CodeIgniter\Model;

class CoffeeModel extends Model
{
    protected $table = 'bean';
    protected $useTimestamps = true;

    public function getCoffee($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getCoffeeBySale()
    {
        return $this->where(['sale_number' > 10])->first();
    }
}