<?php

namespace App\Controllers;

use App\Models\DistributorModel;

class Distributor extends BaseController
{

    protected $DistributorModel;
    public function __construct()
    {
        $this->DistributorModel = new DistributorModel();
    }

    public function index()
    {   
        // $Distributor = $this->DistributorModel->findAll();
        $data = [
            'title' => 'Daftar Distributor',
            'Distributor' => $this->DistributorModel->getDistributor()
        ];
        
        return view('distributor/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah Distributor'
        ];
        return view('distributor/create', $data);
    }

    public function save()
    {
        $nama = $this->request->getVar('nama');
        $kota = $this->request->getVar('kota');
        dd($this->request->getVar('nama'));
    }
}